<template>
    <div>
        <div class="container d-flex justify-content-md-start justify-content-sm-center my-4">
            <img src="/img/netwrix_logo.png">
        </div>
        <div class="d-flex flex-column justify-content-center"
             style="background-image:url('/img/background_image.jpg') ">
            <div class="container text-white col-6 py-5 ">
                <h2 style="font-family: Open Sans;display: block;
text-align: center; font-weight: bold">
                    Netwrix Partner Locator</h2>
                <br>
                <label style="font-family: Open Sans;
font-style: normal;
font-weight: normal;
font-size: 16px;
line-height: 32px;
/* or 200% */

display: block;
text-align: center;">
                    Hundreds of Netwrix partners around the world are
                    standing by to help you. With our Partner Locator you can easily find the
                    list of authorized partners in your area.</label>
            </div>
            <div class="alert alert-danger" role="alert" v-if="errored">
                Database not connected.
            </div>
            <partners-search></partners-search>

        </div>
        <div class="d-flex justify-content-center" v-if="loading">
            <div class="spinner-border" role="status">
                <span class="sr-only"></span>
            </div>
        </div>
        <div v-if="!loading">
            <div class="container col">
            <partner-item></partner-item>
        </div>
        </div>
    </div>
</template>

<script>

import PartnersSearch from "./partners/partnersSearch";
import PartnerItem from "./partners/partnerItem";

export default {
    name: "app",
    components: {PartnerItem, PartnersSearch},
    data() {
        return {
            partners: [],
            errored: false,
            loading: true
        }
    },
    mounted() {
        axios.get('/api/partners')
            .then(response => {
                this.partners = response.data.data;
            })
            .catch(error => {
                console.log(error)
                this.errored = true;
            }).finally(() => {
            this.loading = false;
        })
    }
}
</script>
