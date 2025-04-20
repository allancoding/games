<script setup lang="ts">
import type { NuxtError } from '#app'
import type Typed from 'typed.js';

const props = defineProps({
    error: Object as () => NuxtError
})

const { $setTitle } = useNuxtApp() as unknown as { $setTitle: (title: string) => void };
$setTitle(props.error?.statusCode?.toString() || 'Error');
const typed = useTypedJs()
let errorMessage: Typed;

onMounted(() => {
    runErrorMessage(true);
});

const runErrorMessage = (start: boolean) => {
    if (start) {
        errorMessage = typed('#errorMessage', {
            strings: ['', (props.error?.statusCode?.toString() || 'Error') + ' - ' + (props.error?.message || 'An error occurred')],
            typeSpeed: 70,
            backSpeed: 50,
            smartBackspace: false,
            cursorChar: '|',
            loop: true,
            onComplete: (self) => {
                self.stop();
            },
        });
    } else {
        errorMessage.start();
    }
}
</script>
<template>
    <div class="box">
        <h1 class="errorMessage"><span @click="runErrorMessage(false)"><span id="errorMessage">&#8203;</span></span>
        </h1>
    </div>
</template>

<style scoped>
.box{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
    text-align: center;
    background-color: #000;
}

.errorMessage {
    font-size: 2rem;
    margin-top: 1em;
    margin-bottom: 1em;
    color: #00ff00;
    text-shadow: 0 0 2px #00ff00, 0 0 10px #00ff00;
}

.errorMessage span {
    transition: all 0.2s ease;
}

@media (hover: hover) {
    .errorMessage span:hover {
        cursor: pointer;
        color: #ff0000;
        text-shadow: 0 0 2px #ff0000, 0 0 10px #ff0000;
    }
}

@media (hover: none) {
    .errorMessage span:active {
        color: #ff0000;
        text-shadow: 0 0 2px #ff0000, 0 0 10px #ff0000;
    }
}
</style>