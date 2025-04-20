<style scoped>
@import url("~/assets/css/game.css");

.game-container {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    background-color: black;
}

.cover {
    width: 100%;
    height: 100vh;
}
</style>

<template>
    <div class="game-container">
        <div class="back">
            <button class="back-button" @click="goBack">
                <Icon name="material-symbols:arrow-back-rounded" />
            </button>
        </div>
        <iframe :src="gameUrl" class="cover" frameBorder="0" id="game"></iframe>
        <div id="preloader"></div>
    </div>
</template>

<script setup>
import games from '~/games.json';

const route = useRoute();
const { $setTitle, $setDiscription } = useNuxtApp();
const gameName = route.query.game || '';
const game = games.find(g => g.name === gameName);
if (!game) {
    navigateTo('/games');
}
const gameUrl = game.platform === 'web' ? game.path : ('assets/emulator/?rom=' + game.rom + '&core=' + game.system + '&name=' + game.name + '&path=' + game.path + '&image=' + game.image);
$setTitle(game.name);
$setDiscription(game.description);

onMounted(() => {
    if (window.$('#preloader').length) {
        window.$('#preloader').delay(500).fadeOut('slow', function () {
            window.$(this).remove();
        });
    }
})

const goBack = () => {
    if (window.confirm('Are you sure you want to go back?')) {
        if (game.platform === 'web') {
            document.querySelector('#game').contentWindow.postMessage('save', '*');
            setTimeout(() => {
                navigateTo('/games');
            }, 500);
        }
        navigateTo('/games');
    }
};
</script>