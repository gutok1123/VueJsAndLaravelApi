import Vue from "vue";
import Router from "vue-router";

Vue.use(Router);

export default new Router({
  mode: "history",
  routes: [
    {
      path: "/",
      alias: "/products",
      name: "Products",
      component: () => import("./components/ProductList")
    },
    {
      path: "/products/:id",
      name: "Product-details",
      component: () => import("./components/Product")
    },
    {
      path: "/add",
      name: "add",
      component: () => import("./components/AddProduct")
    }
  ]
});
