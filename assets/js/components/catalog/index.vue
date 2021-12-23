<template>
  <div>
    <title-component :text="text"></title-component>
    <product-list :products="products"></product-list>
  </div>
</template>

<script>
import TitleComponent from '@/components/title';
import ProductList from '@/components/catalog/products';
//import axios from "axios";

export default {
  name: "CatalogComponent",
  components:{
    TitleComponent,
    ProductList
  }
  ,
  data: () => (
      {
        text: 'Products Catalog',
        products: []
      }
  )
  ,
  created() {
    console.log("Created event");
    this.getProducts();
  }
  ,
  methods:{
    async getProducts(){
      this.products = [];
      const response = await this.fetchProducts();
      this.products = response.data['hydra:member'];
    },
    fetchProducts(){
      return axios({
        method:'get',
        url: '/api/products'
      });

      // return [
      //         {'name' : "Products 1"}
      //         ,{'name' :"Products 2"}
      //         ,{'name' :"Products 3"}
      //         ];

    }
  }
}
</script>

<style scoped>

</style>