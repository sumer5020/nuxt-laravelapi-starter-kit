<script lang="ts" setup>
const scrollToTop = async () => {
    if (typeof window !== 'undefined') {
        window.scrollTo(0, 0);
    }
}
</script>
<template>
    <div class="fixed right-0 z-[41] rotate-90 -mx-11 p-1 top-1/2">
        <button @click="scrollToTop" aria-label="scroll Up"
            class="after:content-[''] z-[41] uppercase font-rajdhani font-bold after:border after:border-solid after:-translate-y-1 after:mx-2 after:inline-block after:w-14">
            scroll
        </button>
    </div>
</template>