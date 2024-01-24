<script lang="ts" setup>
import { useThemeStore } from "~/stores/useThemeStore";

const theme = useThemeStore()
const pending = ref(true)

const head = useLocaleHead({
  addDirAttribute: true,
  identifierAttribute: 'id',
  addSeoAttributes: true
})

onNuxtReady(() => {
  pending.value = false
})
</script>
 
<template>
  <div v-if="pending" class="bg-dark_bg/10 p-20 w-full flex justify-center relative items-center text-center h-screen">
    <div class="loader text-primary"></div>
  </div>
  <div v-else>
    <Html :class="(theme.getTheme as string)" :lang="head.htmlAttrs?.lang" :dir="head.htmlAttrs?.dir">

    <Head>
      <template v-for="link in head.link" :key="link.id">
        <Link :id="link.id" :rel="link.rel" :href="link.href" :hreflang="link.hreflang" />
      </template>

      <template v-for="meta in head.meta" :key="meta.id">
        <Meta :id="meta.id" :property="meta.property" :content="meta.content" />
      </template>
    </Head>

    <Body class="font-almarai bg-light_bg dark:bg-dark_bg text-light_primary dark:text-dark_primary">
      <HeaderDefault />
      <main class="min-h-screen">
        <ScrollToTop />
        <slot />
      </main>
      <FooterDefault />
    </Body>

    </Html>
  </div>
</template>

<style scoped lang="scss"></style>