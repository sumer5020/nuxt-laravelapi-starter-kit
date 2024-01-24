<script lang="ts" setup>
import { useTestStore } from "~/stores/useTestStore"
const test = useTestStore()
test.fetchApiInfo()
</script>

<template>
    <div class="dir-ltr">
        <pre class="bg-light_blue-50/95 dark:bg-dark_blue-900/95 p-8 flex flex-col w-full shadow-xl rounded-xl">
            <code>{{ test.apiInfo }}</code>
        </pre>
    </div>
</template>

<style scoped lang="scss"></style>
