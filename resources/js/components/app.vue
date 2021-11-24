<template>
    <div class="container">

        <p>
            <router-link :to="{name:'home'}">Главная</router-link>
        </p>
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

