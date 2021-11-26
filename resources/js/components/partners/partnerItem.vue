<template>
    <div class="card mt-3">
        <div class="card-body row">
            <div class="col-xl-3 col-sm-12 mb-sm-3 mb-xl-1 d-flex justify-content-xl-center justify-content-sm-start">
                <div class="d-flex flex-column justify-content-center">
                    <img :src=partner.logo height="76" width="95">
                </div>
            </div>
            <div class="col-xl-5 col-sm-12  mb-sm-3 mb-xl-1 d-flex flex-column justify-content-center">
                <h2 class="fw-bold" > {{ partner.company }} </h2>
                <label >{{ partner.address }}</label>
                <hr class="d-xl-none">
            </div>

            <div
                class="col-xl-2 col-sm-12  mb-sm-3 mb-xl-1 d-flex flex-column justify-content-around vertical-line ">
                <a :href=partner.website >Website</a>
                <label >{{ partner.phone }}</label>
            </div>
            <div class="col-xl-2 col-sm-12 ">
                <label >{{ partner.status }}</label>
            </div>
        </div>

    </div>

</template>

<script>
export default {
    props: ['partner'],
    name: "partnerItem"
}
</script>

<style scoped>

@media only screen and (min-width: 1260px) {
    .vertical-line {
        border-right: 1px solid #dee2e6 !important;
    }
}
</style>
