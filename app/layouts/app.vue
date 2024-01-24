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
            <div class="overflow-x-hidden">
                <div class="min-h-screen bg-plantation-10 text-gray-900 capitalize">
                    <!-- Page Content -->
                    <main class="min-h-screen mx-auto w-full">
                        <div class="overflow-hidden shadow-xl">
                            <div class="flex flex-no-wrap">
                                <!-- side [need rule of user or the list of permission] -->
                                <DashboardSide />

                                <!-- body -->
                                <div class=" min-w-full md:min-w-[calc(100%-256px)] mx-auto min-h-screen pb-10">
                                    <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
                                    <div class="w-full h-full">
                                        <!-- content -->
                                        <slot />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </Body>

        </Html>
    </div>
</template>

<style scoped lang="scss"></style>