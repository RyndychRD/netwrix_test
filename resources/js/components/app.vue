<template>
    <div>
        <div class="container d-flex justify-content-xl-start justify-content-sm-center my-4">
            <img src="/img/netwrix_logo.png">
        </div>
        <div class="d-flex flex-column justify-content-center"
             style="background-image:url('/img/background_image.jpg') ">
            <div class="container text-white col-6 py-5 ">
                <h2 class="main_label">
                    Netwrix Partner Locator</h2>
                <br>
                <label class="main_label_small">
                    Hundreds of Netwrix partners around the world are
                    standing by to help you. With our Partner Locator you can easily find the
                    list of authorized partners in your area.</label>
            </div>
            <div class="alert alert-danger" role="alert" v-if="errored">
                Database not connected.
            </div>
            <partners-search v-on:update_search="updateSearch" v-if="!loading"></partners-search>

        </div>

        <div class="d-flex justify-content-center" v-if="loading">
            <div class="spinner-border" role="status">
                <span class="sr-only"></span>
            </div>
        </div>
        <div class="d-flex justify-content-center bg-warning" v-if="Object.keys(partners).length === 0 && !loading">
            Your search parameteres did not match any partners. Please try different search
        </div>
        <div class="container col">

            <partner-item v-for="partner in partners" v-bind:partner="partner"></partner-item>
        </div>

    </div>
</template>

<script>

import PartnersSearch from "./partners/partnersSearch";
import PartnerItem from "./partners/partnerItem";

export default {
    name: "app",
    components: {PartnerItem, PartnersSearch},
    methods: {
        updateSearch: function (new_search, new_selected_type) {
            axios.get('/api/partners' + '?line=' + new_search + '&type=' + new_selected_type)
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
    },
    data() {
        return {
            partners: [],
            search_input: "",
            selected_type: 'address',
            countries: [],
            errored: false,
            loading: true
        }
    },
    mounted() {
        axios.get('/api/partners' + '?line=' + this.search_input + '&type=' + this.selected_type)
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

<style>
* {
    font-family: Open Sans;
}

.main_label {
    display: block;
    text-align: center;
    font-weight: bold
}

.main_label_small {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 32px;
    display: block;
    text-align: center;
}
</style>
