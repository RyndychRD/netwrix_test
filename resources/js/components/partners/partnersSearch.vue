<template>
    <div class="container col-5">
        <div class="position-relative">
            <input v-on:keyup.enter="search" class="form-control" v-model="search_input" id="search_input">
            <button v-on:click="search" class="bg-transparent border-0 position-absolute end-0 top-0 mt-2 me-2">
                <font-awesome-icon style="color:blue" icon="search"/>
            </button>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-xl-4 col-sm-12 mb-sm-2">
                <v-select class="search-input"
                          @input="onInput"
                          v-model="selected"
                          :options="typeOptions"
                          :labelTitle="typeTitlePlaceholder"
                />
            </div>
            <div class="col-xl-8 col-sm-12">
                <div class="input-group">
                    <v-select class="search-input right-border-no-radius w-50 mb-sm-2"
                              :options="countries"
                              :searchable=true
                              :labelSearchPlaceholder=null
                              :labelTitle="countryTitlePlaceholder"
                    />

                    <v-select class="search-input left-border-no-radius w-50 mb-sm-2"
                              :options="states"
                              :searchable=true
                              :labelSearchPlaceholder=null
                              :labelTitle="stateTitlePlaceholder"
                    />
                </div>
            </div>
        </div>
    </div>

</template>

<script>


import VSelect from '@alfsnd/vue-bootstrap-select'

export default {
    name: 'app',
    components: {
        VSelect
    },

    methods: {
        search: function () {
            this.$emit('update_search', this.search_input, this.selected_type);
        },
        onInput(selected) {
            let selected_id = Object.keys(this.typeOptions).find(key => this.typeOptions[key] === selected);
            this.selected_type = selected_id == 0 ? 'company' : 'address';
            this.search();
        }
    },
    mounted() {
        var placeholder = document.querySelector("#search_input");
        if (window.innerWidth > 767) {
            placeholder.setAttribute("placeholder", "Search by company name or address..");
        } else {
            placeholder.setAttribute("placeholder", "Search");
        }
        window.addEventListener('resize', function () {
            if (window.innerWidth > 767) {
                placeholder.setAttribute("placeholder", "Search by company name or address..");
            } else {
                placeholder.setAttribute("placeholder", "Search");
            }
        }, true);
    },
    data() {
        return {
            search_input: "",
            selected: "",
            selected_type: "company",
            countryTitlePlaceholder: 'Country',
            stateTitlePlaceholder: 'State',
            typeTitlePlaceholder: 'Type',
            typeOptions: ['Name', 'Address'],
            countries: [],
            states: [],
            errored: false,
            loading: true,
        };
    },

    beforeMount() {
        axios.get('api/countries')
            .then(response => {
                for (let temp of response.data.data) {
                    this.countries.push(temp.name);
                }
            })
            .catch(error => {
                console.log(error)
                this.errored = true;
            })
        axios.get('api/states')
            .then(response => {
                for (let temp of response.data.data) {
                    this.states.push(temp.name);
                }
            })
            .catch(error => {
                console.log(error)
                this.errored = true;
            })
    }

}
</script>

<style>
.v-select-toggle {
    background-color: Transparent !important;
    border-width: 2px !important;
    border-color: white !important;
    color: white !important;
}

ul {
    max-height: 300px;
    overflow-y: scroll;
}

@media only screen and (min-width: 1260px) {
    .right-border-no-radius .v-select-toggle {
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
    }

    .left-border-no-radius .v-select-toggle {
        border-top-left-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
    }
}

@media only screen and (max-width: 767px) {
    .search-input {
        width: 100% !important;
    }
}

</style>

