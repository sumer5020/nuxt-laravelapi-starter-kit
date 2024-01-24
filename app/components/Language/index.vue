<script lang="ts" setup>
const { locales, locale, setLocale } = useI18n();

const props = defineProps({
    dashStyle:{
        type: Boolean,
        default: false
    },
})
const toggle = ref(false)

const changeToggle = async() => {
    toggle.value = !toggle.value
}

const closeToggle = async() => {
    setTimeout(function() { toggle.value = false  }, 250)
}

const langChange = async(lang: string) => {
    setLocale(lang)
    toggle.value = false
}
</script>
 
<template>
    <div class="flex items-center justify-center"
        :class="dashStyle ? 'text-blue-100' : 'text-light_primary dark:text-dark_primary'">
        <div class="relative inline-block text-start" aria-label="language">
            <button @click="changeToggle" @focusout="closeToggle" class="inline-flex uppercase justify-center p-2 items-center rounded-md shadow-sm focus:outline-none">
                <Icon name="ion:language" class="h-5 w-5" />
            </button>
            <div class="capitalize absolute mt-2 rounded-md shadow-lg"
                :class="(!toggle ? 'hidden': '') +' '+ (dashStyle ? 'origin-top bottom-full bg-blue-800' : 'origin-top-right right-0 dark:bg-dark_blue-900 bg-white')">
                <div role="menu" aria-orientation="vertical">
                    <ul class="py-2 p-2 flex flex-col gap-y-1" @mouseleave="toggle = false">
                        <li v-for="(lang, i) in locales" :key="i" @click="langChange(lang?.iso)" role="menuItem" 
                        class="inline-flex rounded-md px-4 py-2 text-sm cursor-pointer w-full"
                        :class="(locale == lang?.iso ? (dashStyle ? 'bg-blue-900/40' : 'bg-light_blue-50/90 dark:bg-dark_blue-800/90') : '') +' '+ (dashStyle ? 'hover:bg-blue-900/70' : 'hover:bg-light_blue-50 dark:hover:bg-dark_blue-800')">
                            {{ lang?.name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
 
<style scoped lang="scss"></style>