export default defineI18nConfig(() => ({
    locales: [
        { code: 'ar', name: 'العربية', file: 'ar.js', iso: 'ar', dir: 'rtl' },
        { code: 'en', name: 'English', file: 'en.js', iso: 'en', dir: 'ltr' }
    ],
    detectBrowserLanguage: {
        useCookie: true,
        fallbackLocale: 'ar',
    },
    defaultDirection: 'rtl',
    defaultLocale: 'ar',
    langDir: 'lang',
    lazy: true,
    legacy: false,
    locale: 'ar',
    fallbackLocale: 'ar',
    vueI18nLoader: true,
    strategy: 'prefix_except_default'
}))