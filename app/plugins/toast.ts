import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

export default defineNuxtPlugin((nuxtApp) => {
    nuxtApp.vueApp.use(Toast, {
        position: "bottom-right",
        hideProgressBar: false,
        rtl: true,
        timeout: 2000,
    })
})