<template>
    <hr class="neon-hr rounded-full bg-gradient-to-r from-transparent via-blue-700 dark:via-blue-300 to-transparent">
</template>
<style scoped lang="scss">
.neon-hr {
    border: none;
    height: 2px;
    position: relative;
    overflow: hidden;
    filter: blur(0.5px);

    &::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: inherit;
        opacity: 0.5;
        animation: neon-glow 5s linear infinite;
    }
}

@keyframes neon-glow {
    0% {
        left: -100%;
    }

    100% {
        left: 100%;
    }
}
</style>