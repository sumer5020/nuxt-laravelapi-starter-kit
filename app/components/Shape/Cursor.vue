<script lang="ts" setup>
const e1 = ref<HTMLDivElement>()
const e2 = ref<HTMLDivElement>()

function handleMouseMove(event) {
  if (event.type === 'mousemove') {
    e1.value.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`
    e2.value.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`
  }
}

onMounted(() => {
  window.addEventListener('mousemove', handleMouseMove)
})

onUnmounted(() => {
  window.removeEventListener('mousemove', handleMouseMove);
})
</script>
<template>
    <div ref="e1" class="cursor"></div>
    <div ref="e2" class="cursor cursor2"></div>
</template>