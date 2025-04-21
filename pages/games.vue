<style>
@import url("~/assets/css/main.css");
</style>
<template>
    <div>
        <h1 class="text-center text-white">Games</h1>
        <div class="row row-cols-md-3 row-cols-lg-4 g-4">
            <div class="col" v-for="game in games" :key="game.id">
                <div class="card text-white bg-dark h-100">
                    <img class="card-img-top" :src="game.path + game.image" :alt="game.name" />
                    <div class="card-body">
                        <h5 class="card-title">{{ game.name }}</h5>
                        <p class="card-text">{{ game.description }}</p>
                    </div>
                    <div class="card-footer">
                        <a :href="`/play?game=${encodeURIComponent(game.name)}`" class="btn btn-primary">Play</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="preloader"></div>
    </div>
</template>
<script setup>
import games from '~/games.json';
const { $setTitle } = useNuxtApp();

$setTitle('');

onMounted(() => {
    if (window.$('#preloader').length) {
        window.$('#preloader').delay(500).fadeOut('slow', function () {
            window.$(this).remove();
        });
    }
})
</script>