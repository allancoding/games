<template>
    <canvas id="c"></canvas>
</template>

<script setup>
onMounted(() => {
  useHead({
    script: [{ src: '/js/cool.js' }]
  })
})
</script>

<style scoped>
canvas {
    position: absolute;
    top: 0;
    left: 0;
}
</style>