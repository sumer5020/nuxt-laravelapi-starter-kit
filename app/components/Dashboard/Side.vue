<script lang="ts" setup>
import { useAuthStore } from "~/stores/useAuthStore";
import logo from '~/assets/logo.svg'

const auth = useAuthStore();
const localePath = useLocalePath()

const sideBarStyle = ref("ltr:-translate-x-[260px] rtl:translate-x-[260px]")
const moved = ref(true)

async function handleLogout() {
  await auth.logout()
}

const sidebarHandler = async (toggle: boolean) => {
  if (toggle) {
    sideBarStyle.value = "translateX(0px)"
    moved.value = false
  }
  else {
    sideBarStyle.value = "ltr:-translate-x-[260px] rtl:translate-x-[260px]"
    moved.value = true
  }
}
</script>

<template>
  <div>
    <button title="toggle" aria-label="toggle sidebar" id="openSideBar"
      class="h-10 w-10 md:hidden z-40 bg-blue-900 text-blue-100 fixed top-0 ltr:left-0 rtl:right-0 mt-3 flex items-center shadow ltr:rounded-r-full rtl:rounded-l-full justify-center cursor-pointer focus:outline-none transition duration-150 ease-in-out"
      @click="sidebarHandler(moved)">
      <!--style="transform: translateX(-260px);"-->
      <Icon name="mdi:menu" class="w-6 h-6" />
    </button>

    <div class="fixed md:relative z-30 min-h-screen md:flex">
      <!-- Remove class [ hidden ] and replace [ md:flex ] with [ flex ] -->
      <div
        class="min-h-screen z-30 w-64 absolute md:relative bg-blue-700 shadow ms:h-full flex-col justify-between hidden md:flex">
        <div style="min-height: calc(100vh - 59px)" class="px-5">
          <div class="h-20 pt-4 flex items-center ms-6">
            <!-- logo -->
            <NuxtLink data-track-arguments="brand, event, Navbar, Home" :title="$t('appName')" :aria-label="$t('appName')"
              :to="localePath('/')">
              <img :src="logo" :alt="$t('appName')" class="my-1 min-h-[60px] min-w-[55px] h-10 w-10 py-1" />
            </NuxtLink>
            <div class="flex flex-col">
              <NuxtLink to="#" class="text-blue-100 hover:text-blue-50 text-sm font-extrabold truncate w-32">
                <span>{{ auth.user?.name }}</span>
              </NuxtLink>
              <span class="text-blue-100 text-xs truncate w-32">{{ auth.user?.email }}</span>
            </div>
          </div>
          <ul class="mt-12">
            <li class="flex w-full justify-between text-blue-100 hover:text-blue-50 cursor-pointer items-center mb-6">
              <NuxtLink to="#" class="flex items-center focus:outline-none focus:text-lime-100">
                <Icon name="material-symbols:dashboard-rounded" class="w-5 h-5" />
                <span class="text-sm font-bold mx-2">{{
                  $t("content.dashboard")
                }}</span>
              </NuxtLink>
              <!--<div class="px-2 bg-blue-100 rounded-full text-black font-bold flex items-center justify-center text-xs">5</div>-->
            </li>
            <li class="flex w-full justify-between text-blue-100 hover:text-blue-50 cursor-pointer items-center mb-6">
              <NuxtLink to="#" class="flex items-center focus:outline-none focus:text-lime-100">
                <Icon name="material-symbols:display-settings" class="w-5 h-5" />
                <span class="text-sm font-bold mx-2">{{
                  $t("content.settings")
                }}</span>
              </NuxtLink>
              <!--<div class="px-2 bg-blue-100 rounded-full text-black font-bold flex items-center justify-center text-xs">5</div>-->
            </li>
          </ul>
        </div>
        <div class="px-5 border-t border-blue-100 sticky bottom-0">
          <ul class="w-full flex items-center justify-between bg-blue-700">
            <li class="cursor-pointer px-1 py-3">
              <Theme :dashStyle="true" />
            </li>
            <li class="cursor-pointer px-1 py-3">
              <Language :dashStyle="true" />
            </li>
            <li class="cursor-pointer px-1 py-3 text-blue-100">
              <!-- Authentication -->
              <button @click="handleLogout" aria-label="logout" class="focus:outline-none rounded focus:text-lime-100">
                <Icon name="material-symbols:mode-off-on" class="w-6 h-6" />
              </button>
            </li>
          </ul>
        </div>
      </div>

      <div
        class="overflow-y-scroll scrollbar-thumb-blue-800 scrollbar-thin scrollbar-track-blue-500 scroll-smooth max-h-screen absolute min-h-screen w-64 z-30 bg-blue-700 shadow md:h-full flex-col justify-between md:hidden transition duration-150 ease-in-out"
        id="mobile-nav" :class="sideBarStyle">
        <div style="min-height: calc(100vh - 59px)" class="px-5">
          <div class="h-20 pt-4 flex items-center ms-6">
            <!-- logo -->
            <NuxtLink data-track-arguments="brand, event, Navbar, Home" :title="$t('appName')" :aria-label="$t('appName')"
              :to="localePath('/')">
              <img :src="logo" :alt="$t('appName')" class="my-1 min-h-[60px] min-w-[55px] h-10 w-10 py-1" />
            </NuxtLink>
            <div class="flex flex-col">
              <NuxtLink to="#" class="text-blue-100 hover:text-blue-50 text-sm font-extrabold truncate w-32">
                <span>{{ auth.user?.name }}</span>
              </NuxtLink>
              <span class="text-blue-100 text-xs truncate w-32">{{ auth.user?.email }}</span>
            </div>
          </div>
          <ul class="mt-12">
            <li class="flex w-full justify-between text-blue-100 hover:text-blue-50 cursor-pointer items-center mb-6">
              <NuxtLink to="#" class="flex items-center focus:outline-none focus:text-lime-100">
                <Icon name="material-symbols:dashboard-rounded" class="w-5 h-5" />
                <span class="text-sm font-bold mx-2">{{
                  $t("content.dashboard")
                }}</span>
              </NuxtLink>
              <!--<div class="px-2 bg-blue-100 rounded-full text-black font-bold flex items-center justify-center text-xs">5</div>-->
            </li>
            <li class="flex w-full justify-between text-blue-100 hover:text-blue-50 cursor-pointer items-center mb-6">
              <NuxtLink to="#" class="flex items-center focus:outline-none focus:text-lime-100">
                <Icon name="material-symbols:display-settings" class="w-5 h-5" />
                <span class="text-sm font-bold mx-2">{{
                  $t("content.settings")
                }}</span>
              </NuxtLink>
              <!--<div class="px-2 bg-blue-100 rounded-full text-black font-bold flex items-center justify-center text-xs">5</div>-->
            </li>
          </ul>
        </div>
        <div class="px-5 border-t border-blue-100 sticky bottom-0">
          <ul class="w-full flex items-center justify-between bg-blue-700">
            <li class="cursor-pointer px-1 py-3">
              <Theme :dashStyle="true" />
            </li>
            <li class="cursor-pointer px-1 py-3">
              <Language :dashStyle="true" />
            </li>
            <li class="cursor-pointer px-1 py-3 text-blue-100">
              <!-- Authentication -->
              <button @click="handleLogout" aria-label="logout" class="focus:outline-none rounded focus:text-lime-100">
                <Icon name="material-symbols:mode-off-on" class="w-6 h-6" />
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>