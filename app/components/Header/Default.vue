<script lang="ts" setup>
import { useAuthStore } from "~/stores/useAuthStore"
import logo from '~/assets/logo.svg'

const auth = useAuthStore()
const localePath = useLocalePath()
const showingNavigationDropdown = ref(false);
const navBg = ref('bg-transparent shadow-none')
const windowTop = ref(0)

async function handleLogout() {
  showingNavigationDropdown.value = false
  await auth.logout()
}

const onScroll = (e) => {
  windowTop.value = e.target.documentElement.scrollTop

  if (windowTop.value < 5) {
    navBg.value = 'bg-transparent shadow-none'
  }
  else {
    navBg.value = 'shadow-md dark:bg-dark_bg bg-light_bg'
  }
}

onMounted(() => {
  document.addEventListener("scroll", onScroll);
});

onUnmounted(() => {
  document.removeEventListener("scroll", onScroll);
});

</script>
 
<template>
  <header class="z-50 select-none fixed w-screen transition-all dir-ltr" :class="navBg">
    <section class="container mx-auto">
      <div class="py-1 px-10 flex items-center">
        <div class="flex me-auto">
          <!-- logo -->
          <NuxtLink :title="$t('appName')" :aria-label="$t('appName')" :to="localePath('/')">
            <img :src="logo" :alt="$t('appName')" class="my-1 min-h-[60px] min-w-[55px] h-10 w-10 py-1" />
          </NuxtLink>
        </div>

        <nav class="flex ms-auto relative">
          <!-- Primary Navigation Menu -->
          <ul class="text-sm font-bold gap-5 p-2 justify-center items-center hidden md:flex">
            <li>
              <NuxtLink class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 p-1" :to="localePath('/')">
                {{ $t('content.home') }}
              </NuxtLink>
            </li>
            <li v-if="!auth.isLoggedIn">
              <NuxtLink class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 p-1" :to="localePath('/login')">
                {{ $t('content.signIn') }}
              </NuxtLink>
            </li>
            <li v-if="auth.isLoggedIn">
              <NuxtLink class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 p-1" :to="localePath('/dashboard')">
                {{ $t('content.dashboard') }}
              </NuxtLink>
            </li>
            <li v-if="auth.isLoggedIn">
              <button class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 p-1" @click="handleLogout">{{
                $t('content.logout') }}</button>
            </li>
          </ul>

          <!-- static links -->
          <ul class="text-base font-bold gap-5 p-2 justify-center items-center flex">
            <li>
              <Language class="dark:hover:text-light_blue-50 hover:text-dark_blue-900" />
            </li>
            <li>
              <Theme class="dark:hover:text-light_blue-50 hover:text-dark_blue-900" />
            </li>
          </ul>

          <!-- hamburger -->
          <div class="z-40 flex items-center -mr-2 md:hidden">
            <button aria-label="Menu Toggle"
              class="inline-flex items-center justify-center transition duration-300 rounded-md focus:outline-none"
              @click="showingNavigationDropdown = !showingNavigationDropdown">
              <ShapeHamburger :showingNavigationDropdown="showingNavigationDropdown" />
            </button>
          </div>

          <!-- Responsive Navigation Menu -->
          <div :class="{ 'left-[0vw]': showingNavigationDropdown, 'left-[100vw]': !showingNavigationDropdown }"
            class="fixed border-none top-0 w-full h-screen transition-all duration-300 ease-in-out md:hidden">
            <div
              class="uppercase absolute right-0 h-screen max-h-screen max-w-full w-[16rem] px-4 pt-20 pb-3 space-y-1 overflow-hidden overflow-y-auto text-center shadow-md bg-[rgba(237,241,236,0.98)] dark:bg-[rgba(4,12,3,0.98)]">
              <div class="h-[70px] top-0 w-[222px] bg-[rgba(237,241,236,0.99)] dark:bg-[rgba(4,12,3,0.99)] fixed z-40">
              </div>
              <ul class="rtl:dir-rtl lrt:dir-ltr text-sm font-bold gap-1 p-2 justify-center items-start flex flex-col">
                <li class="w-full">
                  <NuxtLink @click="showingNavigationDropdown = false"
                    class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 p-1 flex justify-between items-center"
                    :to="localePath('/')">
                    <span>{{ $t('content.home') }}</span>
                    <Icon name="mdi:arrow-top-right" class="w-4 h-4 rtl:-rotate-90" />
                  </NuxtLink>
                </li>
                <li v-if="!auth.isLoggedIn" class="w-full">
                  <NuxtLink @click="showingNavigationDropdown = false"
                    class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 p-1 flex justify-between items-center"
                    :to="localePath('/login')">
                    <span>{{ $t('content.signIn') }}</span>
                    <Icon name="mdi:arrow-top-right" class="w-4 h-4 rtl:-rotate-90" />
                  </NuxtLink>
                </li>
                <li v-if="auth.isLoggedIn" class="w-full">
                  <NuxtLink @click="showingNavigationDropdown = false"
                    class="dark:hover:text-light_blue-50 hover:text-dark_blue-900 p-1 flex justify-between items-center"
                    :to="localePath('/dashboard')">
                    <span>{{ $t('content.dashboard') }}</span>
                    <Icon name="mdi:arrow-top-right" class="w-4 h-4 rtl:-rotate-90" />
                  </NuxtLink>
                </li>
                <li v-if="auth.isLoggedIn" class="w-full">
                  <button
                    class="w-full dark:hover:text-light_blue-50 hover:text-dark_blue-900 p-1 flex justify-between items-center"
                    @click="handleLogout">
                    <span>{{ $t('content.logout') }}</span>
                    <Icon name="mdi:arrow-top-right" class="w-4 h-4 rtl:-rotate-90" />
                  </button>
                </li>
                <li class="w-full">
                  <hr class="opacity-20 my-1">
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>
  </header>
</template>
 
<style scoped lang="scss">
.ham {
  cursor: pointer;
  -webkit-tap-highlight-color: transparent;
  transition: transform 400ms;
}

.hamRotate.active {
  transform: rotate(45deg);
}

.hamRotate180.active {
  transform: rotate(180deg);
}

.line {
  transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
  stroke-width: 5.5;
  stroke-linecap: round;
  stroke: currentColor;
}

.ham4 .top {
  stroke-dasharray: 40 121;
}

.ham4 .bottom {
  stroke-dasharray: 40 121;
}

.ham4.active .top {
  stroke-dashoffset: -68px;
}

.ham4.active .bottom {
  stroke-dashoffset: -68px;
}

.nav-link {
  position: relative;
  transition: 300ms;

  &::before {
    transition: 0.5s;
    height: 5px;
    content: "";
    position: absolute;
    background-color: currentColor;
  }
}

.nav-link-ltr {
  &::before {
    width: 0%;
    bottom: -5px;
    opacity: 0.2;
  }

  &:hover {
    &::before {
      width: 100%;
    }
  }
}
</style>