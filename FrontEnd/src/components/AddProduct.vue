<template>
  <div class="submit-form">
    <div v-if="!submitted">
      <div class="form-group">
        <label for="title">Nome do Produto</label>
        <input
          type="text"
          class="form-control"
          id="name_product"
          required
          v-model="product.name_product"
          name="name_product"
        />
      </div>
      
      <div class="form-group">
        <label for="title">Descrição</label>
        <input
          type="text"
          class="form-control"
          id="description"
          required
          v-model="product.description"
          name="description"
        />
      </div>

      <div class="form-group">
        <label for="description">Marca</label>
        <input
          class="form-control"
          id="brand"
          required
          v-model="product.brand"
          name="brand"
        />
      </div>
      
      <div class="form-group">
        <label for="description">Voltagem</label>
        <input
          class="form-control"
          id="voltage"
          required
          v-model="product.voltage"
          name="voltage"
        />
      </div>

      <button @click="saveProduct" class="btn btn-success">Salvar</button>
    </div>

    <div v-else>
      <h4>Adcionado com sucesso!</h4>
      <button class="btn btn-success" @click="newProduct">Adicionar</button>
    </div>
  </div>
</template>

<script>
import ProductDataService from "../services/ProductDataService";

export default {
  name: "add-product",
  data() {
    return {
      product: {
        id: null,
        name_product: "",
        description: "",
        brand: "",
        voltage: "",
        published: false
      },
      submitted: false
    };
  },
  methods: {
    saveProduct() {
      var data = {
        name_product: this.product.name_product,
        description: this.product.description,
        brand: this.product.brand,
        voltage: this.product.voltage
      };

      if (this.formValidation()) {
            ProductDataService.create(data)
              .then(response => {
                this.product.id = response.data.id;
                console.log(response.data);
                this.submitted = true;
              })
              .catch(e => {
                console.log(e);
              });
      }
    }, formValidation() {
      // first name
      if (document.getElementsByName("name_product")[0].value === "") {
        alert("Digite o nome do produto");
        return false;
      }
      // last name
      if (document.getElementsByName("description")[0].value === "") {
        alert("Digite a desrição");
        return false;
      }
      // email
      if (document.getElementsByName("brand")[0].value === "") {
        alert("Informe a marca");
        return false;
      }

      if (document.getElementsByName("voltage")[0].value === "") {
        alert("Informe a voltagem");
        return false;
      }
      return true;
    },
    
    newProduct() {
      this.submitted = false;
      this.product = {};
    }
  }
};
</script>

<style>
.submit-form {
  max-width: 300px;
  margin: auto;
}
</style>
