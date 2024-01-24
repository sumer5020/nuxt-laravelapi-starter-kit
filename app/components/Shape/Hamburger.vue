<script lang="ts" setup>
const props = defineProps({
    showingNavigationDropdown: {
    type: Boolean,
    default: false
  },
})
</script>

<template>
    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        :class="{ 'active': showingNavigationDropdown }" class="ham hamRotate ham4 w-12 h-12" viewBox="0 0 100 100">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</template>

<style scoped lang="scss">
.ham {
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
    transition: transform 400ms;
}

.hamRotate.active {
    transform: rotate(45deg);
}

.hamRotate180.active {
    transform: rotate(180deg);
}

.line {
    transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
    stroke-width: 5.5;
    stroke-linecap: round;
    stroke: currentColor;
}

.ham4 .top {
    stroke-dasharray: 40 121;
}

.ham4 .bottom {
    stroke-dasharray: 40 121;
}

.ham4.active .top {
    stroke-dashoffset: -68px;
}

.ham4.active .bottom {
    stroke-dashoffset: -68px;
}
</style>