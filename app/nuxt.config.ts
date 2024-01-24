// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  routeRules: {
    // Homepage pre-rendered at build time
    '/': { prerender: true },
  },
  build: {
    transpile: ['vue-toastification'],
  },
  runtimeConfig: {
    public: {
      apiURL: process.env.API_URL ?? "http://localhost:8000",
      webURL: process.env.WEB_URL ?? "http://localhost:3000",
    }
  },
  // modules configuration
  modules: [
    '@pinia/nuxt',
    '@nuxtjs/i18n',
    '@nuxtjs/robots',
    'nuxt-icon',
    '@nuxt/image',
  ],
  i18n: {
    vueI18n: './i18n.config.ts',
    defaultDirection: 'rtl',
    defaultLocale: 'ar',
    langDir: 'lang',
    lazy: true,
    baseUrl: process.env.WEB_URL ?? "http://localhost:3000",
    locales: [
      { code: 'ar', name: 'العربية', file: 'ar.js', iso: 'ar', dir: 'rtl' },
      { code: 'en', name: 'English', file: 'en.js', iso: 'en', dir: 'ltr' }
    ],
    detectBrowserLanguage: {
      useCookie: true,
      fallbackLocale: 'ar',
    },
    strategy: 'prefix_except_default'
  },
  robots: {
    configPath: "robots.config"
  },
  image: {
    quality: 80,
    screens: {
      'xs': 320,
      'sm': 640,
      'md': 768,
      'lg': 1024,
      'xl': 1280,
      'xxl': 1536,
      '2xl': 1536
    },
  },
  css: [
    // Global SCSS and CSS files
    "~/assets/scss/app.scss", // tailwind style
  ],
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
})
