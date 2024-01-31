<script setup lang="ts">
import { ref, watchEffect } from 'vue'
/*using nuxt-icons as component*/
const props = withDefaults(defineProps<{
  name: string;
  filled?: boolean
}>(), { filled: false })

const icon = ref<string | Record<string, any>>('')
let hasStroke = false

async function getIcon() {
  try {
    const iconsImport = import.meta.glob('assets/icons/**/**.svg', {
      as: 'raw',
      eager: false
    })
    const rawIcon = await iconsImport[`/assets/icons/${props.name}.svg`]()
    if (rawIcon.includes('stroke')) { hasStroke = true }
    icon.value = rawIcon
  } catch {
    console.error(
      `[nuxt-icons] Icon '${props.name}' doesn't exist in 'assets/icons'`
    )
  }
}

await getIcon()

watchEffect(getIcon)
</script>

<template>
  <span class="nuxt-icon" :class="{ 'nuxt-icon--fill': !filled, 'nuxt-icon--stroke': hasStroke && !filled }"
    v-html="icon" />
</template>
  
<style coped lang="scss">
.nuxt-icon {
  svg {
    width: 100%;
    height: 100%;
    margin-bottom: 0.125em;
    vertical-align: middle;
  }

  &.nuxt-icon--fill,
  &.nuxt-icon--fill * {
    fill: currentColor !important;
  }

  &.nuxt-icon--stroke,
  &.nuxt-icon--stroke * {
    stroke: currentColor !important;
  }
}
</style>