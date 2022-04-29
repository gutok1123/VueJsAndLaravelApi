<template>
  <div v-if="currentProduct" class="edit-form">
    <h4>Cadastro de produtos</h4>
    <form>
      
      <div class="form-group">
        <label for="title">Nome do produto</label>
        <input type="text" class="form-control" id="title"
          v-model="currentProduct.name_product"
        />
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description"
          v-model="currentProduct.description"
        />
      </div>

        <div class="form-group">
        <label for="description">Marca</label>
        <input type="text" class="form-control" id="brand"
          v-model="currentProduct.brand"
        />
       </div>

        <div class="form-group">
        <label for="description">Voltagem</label>
        <input type="text" class="form-control" id="voltage"
          v-model="currentProduct.voltage"
        />
       </div>
      
    </form>

    <button class="badge badge-danger mr-2"
      @click="deleteProduct"
    >
      Deletar
    </button>

    <button type="submit" class="badge badge-success"
      @click="updateProduct"
    >
     Atualizar
    </button>
    <p>{{ message }}</p>
  </div>

  <div v-else>
    <br />
    <p>Carregando Produto...</p>
  </div>
</template>

<script>
import ProductDataService from "../services/ProductDataService";

export default {
  name: "product",
  data() {
    return {
      currentProduct: null,
      message: ''
    };
  },
  methods: {
    getProduct(id) {
      ProductDataService.get(id)
        .then(response => {
          this.currentProduct = response.data;
          console.log(response.data);
        })
        .catch(e => {
          console.log(e);
        });
    },

   
    updateProduct() {
      ProductDataService.update(this.currentProduct.id, this.currentProduct)
        .then(response => {
          console.log(response.data);
          this.message = 'O Produto foi editado com sucesso!';
        })
        .catch(e => {
          console.log(e);
        });
    },

    deleteProduct() {
      ProductDataService.delete(this.currentProduct.id)
        .then(response => {
          console.log(response.data);
          this.$router.push({ name: "Products" });
        })
        .catch(e => {
          console.log(e);
        });
    }
  },
  mounted() {
    this.message = '';
    this.getProduct(this.$route.params.id);
  }
};
</script>

<style>
.edit-form {
  max-width: 300px;
  margin: auto;
}
</style>
