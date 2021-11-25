<template>
    <div class="card mt-3">
        <div class="card-body row">
            <div
                class="col-md-3 col-sm-12 mb-sm-5 mb-md-1 d-flex justify-content-md-center justify-content-sm-start">
<!--               TODO закрепить размер-->
                <img :src=partner.logo>
            </div>
            <div class="col-md-5 col-sm-12  mb-sm-5 mb-md-1 d-flex flex-column justify-content-center">
                <h2 class="fw-bold" style="font-family: OpenSans;"> {{partner.company}} </h2>
                <label style="font-family: OpenSans;">{{partner.address}}</label>
            </div>
            <div
                class="col-md-2 col-sm-12  mb-sm-5 mb-md-1 d-flex flex-column justify-content-around border-end">
                <a :href=partner.website style="font-family: OpenSans;">Website</a>
                <label style="font-family: OpenSans;">{{partner.phone}}</label>
            </div>
            <div class="col-md-2 col-sm-12 ">
                <label style="font-family: OpenSans;">{{partner.status}}</label>
            </div>
        </div>

    </div>

</template>

<script>
export default {
    props:['partner'],
    name: "partnerItem"
}
</script>

<style scoped>

</style>
