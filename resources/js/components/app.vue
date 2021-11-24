<template>

    <div class="container">
        <div >
            <img class="pull-left" src="/img/netwrix_logo.png">
        </div>
        <div class="container">
            <label>Netwrix Partner Locator</label>
            <label>Hundreds of Netwrix partners around the world are standing by to help you.  With our Partner Locator you can easily find the list of authorized partners in your area.</label>
            <input >
            <div class="d">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Type</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Country</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>State</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

            </div>

        </div>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>

export default {
    name: "app"
}
</script>

