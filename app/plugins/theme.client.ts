import {useThemeStore} from "~/stores/useThemeStore";

export default defineNuxtPlugin((nuxtApp) => {
    if (typeof window !== 'undefined') {
        const theme = useThemeStore();
        theme.init()
    }
})