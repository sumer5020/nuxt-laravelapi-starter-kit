<script lang="ts" setup>

definePageMeta({
  layout: 'app',
  middleware: ['auth']
});

</script>
 
<template>
  <HeaderDashboard>
    <!--
    <NuxtLink to="#" class="flex justify-between items-center">
      link
    </NuxtLink>
    -->
  </HeaderDashboard>
  <div class="container mx-auto p-5">
    <ChartBar />
  </div>
</template>
 
<style scoped lang="scss"></style>