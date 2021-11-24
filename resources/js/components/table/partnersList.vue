<template>
  <div class="container">
      <h1>Все записи</h1>
      <div class="alert alert-danger" role="alert" v-if="errored">
          Database not connected.
      </div>
      <div class="d-flex justify-content-center" v-if="loading">
          <div class="spinner-border" role="status">
              <span class="sr-only"></span>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12" v-for="partner in partners">
              <div class="card mt-3">
                  <a href="#" class="card-body">
                      <h5 class="card-title">{{partner.company}}</h5>
                  </a>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
export default {
    data(){
        return{
            partners:[],
            errored:false,
            loading:true
        }
    },
    mounted(){
        axios.get('/api/partners')
        .then(response => {
            this.partners= response.data.data;
        })
        .catch(error => {
            console.log(error)
            this.errored=true;
        }).finally(()=>{
            this.loading=false;
        })
    }
}
</script>


