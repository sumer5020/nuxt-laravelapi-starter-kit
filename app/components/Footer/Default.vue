<script lang="ts" setup>
import logo from '~/assets/logo.svg'
</script>
 
<template>
    <footer data-aos="fade-up" data-aos-duration="1200"
        class="select-none z-40 px-10 relative flex justify-center items-center bg-no-repeat ltr:bg-right rtl:bg-left bg-opacity-5">
        <section class="relative z-40 container mx-auto overflow-hidden">
            <section class="grid gap-x-10 grid-cols-1 md:grid-cols-3 lg:grid-cols-3 mb-5 font-medium capitalize">
                <div class="w-full py-4">
                    <ul
                        class="m-0 p-0 w-full gap-y-1 flex flex-col items-center md:items-start justify-center md:justify-start text-center md:text-start">
                        <li class="mb-3 ms-1 md:ms-0 select-none">
                            <img :src="logo" class="mx-auto w-20" alt="">
                        </li>
                        <li class="ms-1">
                            <a class="flex items-center dark:hover:text-light_blue-50 hover:text-dark_blue-900 py-1"
                                aria-label="call" :href="`tel:${$t('content.phone')}`">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-4 h-4 me-1 hidden md:inline">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                {{ $t('content.phone') }}
                            </a>
                        </li>
        
                        <li class="ms-1">
                            <a class="flex items-center dark:hover:text-light_blue-50 hover:text-dark_blue-900 py-1 lowercase"
                                aria-label="call" href="mailto:info@su-edu.net" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-4 h-4 me-1 hidden md:inline">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                                email@example.ye
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full flex flex-col items-center py-4 justify-center text-center md:text-start">
                    <ul
                        class="m-0 p-0 w-full gap-y-1 flex flex-col items-center md:items-start justify-center md:justify-start text-center md:text-start">
                        <li class="link py-2 font-semibold">{{ $t('content.resources') }}</li>
                        <li>
                            <NuxtLink class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 py-1" to="/">
                                {{ $t('content.item1') }}
                            </NuxtLink>
                        </li>
                        <li>
                            <NuxtLink class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 py-1" to="/">
                                {{ $t('content.item2') }}
                            </NuxtLink>
                        </li>
                    </ul>
                </div>
                <div class="w-full flex flex-col items-center py-4 justify-center text-center md:text-start">
                    <ul
                        class="m-0 p-0 w-full gap-y-1 flex flex-col items-center md:items-start justify-center md:justify-start text-center md:text-start">
                        <li class="link py-2 font-semibold">{{ $t('content.projects') }}</li>
                        <li>
                            <NuxtLink class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 py-1" to="/">
                                {{ $t('content.project1') }}
                            </NuxtLink>
                        </li>
                        <li>
                            <NuxtLink class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 py-1" to="/">
                                {{ $t('content.project2') }}
                            </NuxtLink>
                        </li>
                    </ul>
                </div>
            </section>
            <ShapeLine class="opacity-50" />
            <section class="grid grid-cols-6 justify-center text-center md:text-start md:justify-start items-center py-5">
                <div class="text-center md:text-start col-span-6 md:col-span-4 text-sm mx-auto md:mx-3">
                    &copy; {{ $t('content.copyright') }} | 2023-{{ new Date().getFullYear() }}
                </div>
                <div class="col-span-6 px-10 md:px-0 mt-5 md:mt-auto md:col-span-2">
                    <div
                        class="mx-auto max-w-sm grid grid-cols-7 gap-x-2 px-2 shrink-0 justify-center items-end text-center">
                        <a title="LinkedIn" aria-label="LinkedIn"
                            class="w-10 col-span-1 transition flex justify-center items-center duration-300 dark:hover:fill-light_blue-50 hover:fill-dark_blue-900 fill-current"
                            href="https://linkedin.com/company/" target="_blank">
                            <svg class="w-5 h-5 mx-1 rounded-md" xmlns="http://www.w3.org/2000/svg" role="img"
                                viewBox="0 0 24 24">
                                <title>LinkedIn</title>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a title="WhatsApp" aria-label="WhatsApp"
                            class="w-10 col-span-1 transition flex justify-center items-center duration-300 dark:hover:fill-light_blue-50 hover:fill-dark_blue-900 fill-current"
                            href="https://wa.me/" target="_blank">
                            <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24">
                                <title>WhatsApp</title>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                        </a>
                        <a title="Twitter" aria-label="Twitter"
                            class="w-10 col-span-1 transition flex justify-center items-center duration-300 dark:hover:fill-light_blue-50 hover:fill-dark_blue-900 fill-current"
                            href="https://twitter.com/" target="_blank">
                            <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24">
                                <title>Twitter</title>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a title="Instagram" aria-label="Instagram"
                            class="w-10 col-span-1 transition flex justify-center items-center duration-300 dark:hover:fill-light_blue-50 hover:fill-dark_blue-900 fill-current"
                            href="https://www.instagram.com/" target="_blank">
                            <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24">
                                <title>Instagram</title>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <a title="YouTube" aria-label="YouTube"
                            class="w-10 col-span-1 transition flex justify-center items-center duration-300 dark:hover:fill-light_blue-50 hover:fill-dark_blue-900 fill-current"
                            href="https://www.youtube.com/@" target="_blank">
                            <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24">
                                <title>YouTube</title>
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a title="Telegram" aria-label="Telegram"
                            class="w-10 col-span-1 transition flex justify-center items-center duration-300 dark:hover:fill-light_blue-50 hover:fill-dark_blue-900 fill-current"
                            href="https://t.me/" target="_blank">
                            <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24">
                                <title>Telegram</title>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                            </svg>
                        </a>
                        <a title="Email" aria-label="Email"
                            class="w-10 col-span-1 transition flex justify-center items-center duration-300 dark:hover:fill-light_blue-50 hover:fill-dark_blue-900 fill-current"
                            href="mailto:" target="_blank">
                            <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24">
                                <title>Email</title>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </section>
        <ShapeLogo
            class="z-0 fill-current opacity-5 md:w-[30vw] md:h-[30vw] w-[60vw] h-[60vw] absolute bottom-1/4 rtl:left-0 ltr:right-0" />
    </footer>
</template>
 
<style scoped lang="scss">
.link {
    color: currentColor;
    text-decoration: underline solid #44aeffc9;
    text-decoration-color: #44aeffc9;
    text-decoration-skip-ink: none;
}

ul li{
    text-align: center;
}
</style>