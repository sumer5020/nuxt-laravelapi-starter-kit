<script lang="ts" setup>
import { useThemeStore } from "~/stores/useThemeStore";

const props = defineProps({
    dashStyle:{
        type: Boolean,
        default: false
    },
})
const theme = useThemeStore()
const toggle = ref(false)

const changeToggle = async() => {
    toggle.value = !toggle.value
}

const closeToggle = async() => {
    setTimeout(function() { toggle.value = false  }, 250)
}

const themeChange = async(themeValue: string) => {
    theme.setTheme(themeValue)
    toggle.value = false
}

const themeIcon = computed(() => {
    let _theme = "mdi:monitor"
    switch (theme.currentTheme) {
        case "dark":{ _theme="mdi:moon-waning-crescent"; break; }
        case "light":{ _theme="mdi:white-balance-sunny"; break; }
    }
    return _theme
})
</script>
 
<template>
    <div class="flex items-center justify-center"
        :class="dashStyle ? 'text-blue-100' : 'text-light_primary dark:text-dark_primary'">
        <div class="relative inline-block text-start" aria-label="theme">
            <!--@focusout="toggle = false"-->
            <button @click="changeToggle" @focusout="closeToggle"
                class="inline-flex justify-center p-2 items-center rounded-md shadow-sm focus:outline-none">
                <Icon :name="themeIcon" class="h-5 w-5" />
            </button>
            
            <div class="capitalize absolute mt-2 rounded-md shadow-lg"
            :class="(!toggle ? 'hidden': '') + (dashStyle ? ' origin-top bottom-full bg-blue-800' : ' origin-top-right right-0 dark:bg-dark_blue-900 bg-white')">
                <div role="menu" aria-orientation="vertical">
                    <ul class="py-2 p-2 flex flex-col gap-y-1" @mouseleave="toggle = false">
                        <li @click="themeChange('light')" role="menuItem" class="inline-flex rounded-md px-4 py-2 text-sm cursor-pointer w-full"
                        :class="(theme.currentTheme == 'light' ? (dashStyle ? 'bg-blue-900/40' : 'bg-light_blue-50/90 dark:bg-dark_blue-800/90') : '') +' '+ (dashStyle ? 'hover:bg-blue-900/70' : 'hover:bg-light_blue-50 dark:hover:bg-dark_blue-800')">
                            <Icon name="mdi:white-balance-sunny" class="h-5 w-5 me-2" />
                            <span>{{ $t('content.light') }}</span>
                        </li>
                        <li @click="themeChange('dark')" role="menuItem" class="inline-flex rounded-md px-4 py-2 text-sm cursor-pointer w-full"
                        :class="(theme.currentTheme == 'dark' ? (dashStyle ? 'bg-blue-900/40' : 'bg-light_blue-50/90 dark:bg-dark_blue-800/90') : '') +' '+ (dashStyle ? 'hover:bg-blue-900/70' : 'hover:bg-light_blue-50 dark:hover:bg-dark_blue-800')">
                            <Icon name="mdi:moon-waning-crescent" class="h-5 w-5 me-2" />
                            <span>{{ $t('content.dark') }}</span>
                        </li>
                        <li @click="themeChange('system')" role="menuItem" class="inline-flex rounded-md px-4 py-2 text-sm cursor-pointer w-full"
                        :class="(theme.currentTheme == null ? (dashStyle ? 'bg-blue-900/40' : 'bg-light_blue-50/90 dark:bg-dark_blue-800/90') : '') +' '+ (dashStyle ? 'hover:bg-blue-900/70' : 'hover:bg-light_blue-50 dark:hover:bg-dark_blue-800')">
                            <Icon name="mdi:monitor" class="h-5 w-5 me-2" />
                            <span>{{ $t('content.system') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
 
<style scoped lang="scss"></style>