import {useAuthStore} from "~/stores/useAuthStore";
 
export default defineNuxtRouteMiddleware((to, from) => {
  const auth = useAuthStore()
  const nuxt = useNuxtApp()

  if (auth.isLoggedIn) {
    return navigateTo(nuxt.$i18n.locale.value === 'en' ? "/en/dashboard" : "/dashboard", {replace: true});
  }
})