<template>
    <div class="gradient-background"></div>
</template>

<script setup>
const { $setTitle} = useNuxtApp();

$setTitle('Wall');
</script>

<style scoped>
.gradient-background {
    background: linear-gradient(288deg, #00f52b, #16097a, #68086f, #b1191c);
    background-size: 240% 240%;
    animation: gradient-animation 8s ease infinite;
    width: 100vw;
    height: 100vh;
}

@keyframes gradient-animation {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}
</style>