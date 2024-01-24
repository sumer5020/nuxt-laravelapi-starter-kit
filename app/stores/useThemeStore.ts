import { defineStore } from "pinia";

export const useThemeStore = defineStore('theme', () => {
  /*State*/
  const currentTheme = ref<string | null>(null)
  const systemTheme = ref<string | null>(null)

  /*Getters*/
  const getTheme = computed(() => currentTheme.value ?? systemTheme.value)
  const getSystemTheme = computed(() => systemTheme.value)

  /*Setters*/
  async function init() {
    if (typeof window !== 'undefined') {
      if (window.matchMedia('(prefers-color-scheme: dark)').matches) { systemTheme.value = "dark" }
      else { systemTheme.value = "light" }
    }

    const themeCookie = useCookie('currentTheme');
    currentTheme.value = themeCookie.value ?? null
  }

  async function setTheme(themeValue: string) {
    if (themeValue == "dark" || themeValue == "light") {
      currentTheme.value = themeValue;
      useCookie('currentTheme').value = themeValue
    }
    else {
      currentTheme.value = null
      useCookie('currentTheme').value = null
    }
  }

  return { currentTheme, getSystemTheme, getTheme, setTheme, init }
})