<template>
  <div>

    <div class="container">
      <div class="text-center my-3 py-3">
        <div class="rounder-0 border-0">
          <div class="p-0 overflow-hidden shadow">
            <div class="row align-items-stretch">
              <div class="col-lg-6 p-lg-0">
                <div class="d-block h-100 bg-celter bg-center">
                  <img v-bind:src="'/images/products/' + product.imageName">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="p-5 my-md-4">
                  <ul class="list-inline md-2">
                    <li class="list-inline-item m-0">&starf;</li>
                    <li class="list-inline-item m-0">&starf;</li>
                    <li class="list-inline-item m-0">&starf;</li>
                    <li class="list-inline-item m-0">&starf;</li>
                    <li class="list-inline-item m-0">&starf;</li>
                  </ul>
                  <h2 class="h5 text-uppercase">{{product.name}}</h2>
                  <ul class="list-inline md-4">
                    <li class="list-inline-item me-3"><strong>${{product.price}}</strong></li>
                    <li class="list-inline-item me-3">{{product.category.name}}</li>
                    <li class="list-inline-item me-3">{{product.category.brand}}</li>
                  </ul>
                  <p calss="mb-4">{{product.descriptions}}</p>
                  <ul class="list-inline md-4">
                    <li class="list-inline-item"><strong>Quantity: </strong></li>
                    <li class="list-inline-item">-</li>
                    <li class="list-inline-item">1</li>
                    <li class="list-inline-item">+</li>

                    <li class="list-inline-item"><a class="btm btn-primary" href="#">Add to cart</a></li>
                  </ul>
                  <a class="p-0" href="#">Add to wish list</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

//import TitleComponent from '@/components/title';
//import axios from "axios";

export default {
  name: "ProductDetails",
  components:{

  }
  ,
  data: () => (
      {
        product: {}
      }
  )
  ,
  mounted() {
    this.getProduct();
  }
  ,
  methods:{
    async getProduct(){
      this.product = {};
      const response = await this.fetchProduct(this.$route.params.id);
      this.product = response.data;
    },
    fetchProduct(id){
      return axios({
        method:'get',
        url: `/api/products/${id}`
      });
    }
  }
}
</script>

<style scoped>

</style>