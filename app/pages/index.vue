<script lang="ts" setup>
import { useToast } from "vue-toastification";
const toast = useToast();
const { t } = useI18n();

useHeadSafe({
  title: `${t('appName')} - ${t('title.home')}`,
  meta: [
    { name: 'description', content: 'index page' }
  ],
})

onNuxtReady(() => {
  toast.info("Modified with ❤️ by Sumer Ahmed - [SUMER5020]", {
    timeout: 5000,
    position: "bottom-center"
  });
})
</script>
 
<template>
  <HeaderDefault />
  <section class="container mx-auto pt-40 h-96">
    <div class="mx-20 h-full flex flex-col justify-center items-start">
      <h1 data-aos="fade-up" data-aos-duration="500" data-aos-delay="300"
        class="text-light_primary dark:text-dark_primary text-7xl mb-5">{{ $t('content.tempTitle') }}</h1>
      <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="600"
        class="text-blue-500 dark:text-blue-400 text-2xl">{{ $t('content.tempDesc') }}</p>
    </div>
  </section>
  <section data-aos="fade-up" data-aos-duration="500" data-aos-delay="1200" class="container mx-auto pb-20">
    <div class="container mx-auto p-20">
      <TestInfo />
    </div>
  </section>
</template>
<style scoped lang="scss"></style>