<script lang="ts" setup></script>

<template>
    <header class="bg-light_blue-100 dark:bg-dark_blue-800 w-full shadow-md p-5">
        <section class="flex justify-between items-center px-1">
            <div class="hidden md:w-2/3 ps-6 md:flex justify-start items-center overflow-hidden">
                <NuxtLink to="#" class="flex justify-between items-center">
                    <Icon name="material-symbols:dashboard-outline-rounded" class="w-5 h-5" />
                </NuxtLink>
                <Icon name="mdi:chevron-left" class="w-5 h-5 mx-1 ltr:rotate-180" />
                <slot />             
            </div>
            <div class="w-full md:w-1/3 md:pe-6 flex justify-end items-center">
                <div class="flex me-5 relative">
                    <Icon name="mdi:magnify" class="w-5 absolute h-full ms-1" />
                    <input type="text" class=" text-sm focus:outline-none focus:ring-0 focus:border-none bg-black/10 py-1 rounded-lg ps-7">
                </div>
                <Notification />
            </div>
        </section>
    </header>
</template>

<style scoped lang="scss"></style>