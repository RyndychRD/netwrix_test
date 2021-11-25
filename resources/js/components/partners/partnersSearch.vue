<template>
    <div class="container col-5">
        <div class="input-group">
            <input class="form-control" v-model="search_input" id="search_input"
                   placeholder="Search by company name or adress..">
            <button v-on:click="search" class="bg-white border-0">
                <font-awesome-icon style="color:blue" icon="search"/>
            </button>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-4 col-sm-12 mb-sm-1">
                <v-select class="search-input"
                          @input="onInput"
                          v-model="selected"
                          :options="typeOptions"
                          :labelTitle="typeTitlePlaceholder"
                />
            </div>
            <div class="col-md-8 col-sm-12">
                <!--                    &#45;&#45;                TODO при помощи postcss убирать input-group&#45;&#45;}}-->
                <div class="input-group col-sm-12 ">

                    <v-select class="search-input"
                              :options="countries"
                              :searchable=true
                              :labelSearchPlaceholder=null
                              :labelTitle="countryTitlePlaceholder"
                    />
                    <v-select class="search-input" :options="states"
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
            let selected_id=Object.keys(this.typeOptions).find(key => this.typeOptions[key] === selected);
            this.selected_type = selected_id === 0 ? 'address' : 'company';
            this.search();
        }
    },
    data() {
        return {
            search_input: "",
            selected: "",
            selected_type: "address",
            countryTitlePlaceholder: 'Country',
            stateTitlePlaceholder: 'State',
            typeTitlePlaceholder: 'Type',
            typeOptions: ['Address', 'Name'],
            countries: [],
            states: [],
            errored: false,
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

<style scoped>
.search-input {
    color: white;
    background-color: transparent;
}
</style>

