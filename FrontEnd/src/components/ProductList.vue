<template>
  <div class="list row">
    <div class="col-md-6">
      <h4>Lista De Produtos</h4>
      <ul class="list-group">
        <li class="list-group-item"
          :class="{ active: index == currentIndex }"
          v-for="(product, index) in products"
          :key="index"
          @click="setActiveProduct(product, index)"
        >
          {{ product.name_product }}
        </li>
      </ul>

      <button class="m-3 btn btn-sm btn-danger" @click="removeAllProducts">
       Remover Todos os Produtos
      </button>
   
    </div>
    <div class="col-md-6">
      <div v-if="currentProduct">
        <h4>Produto</h4>
        <div>
          <label><strong>Nome:</strong></label> {{ currentProduct.name_product }}
        </div>
        <div>
          <label><strong>Descrição:</strong></label> {{ currentProduct.description }}
        </div>
        <div>
          <label><strong>Voltagem:</strong></label> {{ currentProduct.voltage}}
        </div>

        <div>
          <label><strong>Marca:</strong></label> {{ currentProduct.brand}}
        </div>

        <router-link :to="'/products/' + currentProduct.id" class="dark dark-warning">Visualizar Produto/Editar ou Deletar</router-link>
      </div>
      <div v-else>
        <br />
        <p>Por favor adicione um novo produto...</p>
      </div>
    </div>
  </div>
</template>

<script>
import ProductDataService from "../services/ProductDataService";

export default {
  name: "products-list",
  data() {
    return {
      products: [],
      currentProduct: null,
      currentIndex: -1,
      title: ""
    };
  },
  methods: {
    retrieveProducts() {
      ProductDataService.getAll()
        .then(response => {
          this.products = response.data;
          console.log(response.data);
        })
        .catch(e => {
          console.log(e);
        });
    },

    refreshList() {
      this.retrieveProducts();
      this.currentProduct = null;
      this.currentIndex = -1;
    },

    setActiveProduct(product, index) {
      this.currentProduct = product;
      this.currentIndex = index;
    },

    removeAllProducts() {
      ProductDataService.deleteAll()
        .then(response => {
          console.log(response.data);
          this.refreshList();
        })
        .catch(e => {
          console.log(e);
        });
    },
    
    searchTitle() {
     ProductDataService.findByTitle(this.title)
        .then(response => {
          this.products = response.data;
          console.log(response.data);
        })
        .catch(e => {
          console.log(e);
        });
    }
  },
  mounted() {
    this.retrieveProducts();
  }
};
</script>

<style>
.list {
  text-align: left;
  max-width: 750px;
  margin: auto;
}
</style>
