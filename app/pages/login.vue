<script lang="ts" setup>
import rectangles from '~/assets/rectangles.svg'
import { useAuthStore } from "~/stores/useAuthStore";
const { t } = useI18n();

definePageMeta({
  layout: 'empty',
  middleware: ['guest']
})

useHeadSafe({
  title: `${t('appName')} - ${t('title.login')}`,
  meta: [
    { name: 'description', content: `${t('content.loginIntro')}` }
  ],
})

const form = ref({
  email: "test@example.com",
  password: "password"
});

const loginPending = ref(false)
const auth = useAuthStore()
const localePath = useLocalePath()

async function handleLogin() {
  loginPending.value = true
  const { error, pending } = await auth.login(form.value);

  if (!pending.value) {
    loginPending.value = false
    if (auth.isLoggedIn) {
      navigateTo(localePath('/dashboard'));
    }
  }
}
</script>
 
<template>
  <HeaderDefault />
  <section
    class="antialiased bg-gradient-to-br from-light_blue-200 to-light_bg dark:from-dark_blue-800 dark:to-dark_bg">
    <div class="container px-10 mx-auto overflow-hidden">
      <div class="mx-5 pt-10 flex flex-col text-center md:text-left md:flex-row min-h-screen justify-center items-center"
        :style="{ backgroundImage: `url(${rectangles})` }">
        <div class="hidden md:flex flex-col w-full">
          <h1 class="text-5xl font-bold">{{ $t('content.loginTitle') }}</h1>
          <p class="w-8/12 mx-auto md:mx-0 mt-2">
            {{ $t('content.loginIntro') }}
          </p>
        </div>
        <div class="mx-auto flex justify-center items-center md:w-2/3 lg:w-1/2 w-[75vw]">
          <div class="bg-light_blue-50/95 dark:bg-dark_blue-900/95 p-8 flex flex-col w-full shadow-xl rounded-xl">
            <h2 class="text-2xl font-bold text-left mb-3">
              {{ $t('content.signIn') }}
            </h2>
            <form @submit.prevent="handleLogin" class="w-full">
              <input type="hidden" name="remember" value="true">
              <div class="flex flex-col w-full my-5">
                <InputOutline v-model="form.email" :label="$t('content.username')" name="email" autofocus />
              </div>

              <div class="flex flex-col w-full my-5">
                <InputOutline v-model="form.password" type="password" :label="$t('content.password')" name="password" />
              </div>

              <div id="button" class="flex flex-col w-full mt-3">
                <button :disabled="loginPending == true" type="submit" label="Login" class="w-full py-2 bg-blue-600 rounded-lg text-blue-100 hover:text-blue-50">
                  <div class="flex flex-row items-center justify-center">
                    <div class="rtl:order-1 ltr:order-2 font-bold uppercase">{{ $t('content.signIn') }}</div>
                    <Icon v-if="loginPending" name="svg-spinners:gooey-balls-2" class="w-6 h-6 mx-2" />
                  </div>
                </button>

                <div class="flex justify-between items-center mt-5 text-xs">
                  <NuxtLink disabled :to="localePath('/register')">
                    <span
                      class="disabled:text-light_secondary/60 hover:text-light_secondary dark:hover:text-dark_secondary no-underline hover:underline cursor-pointer">
                      {{ $t('content.registerAnAccount') }}
                    </span>
                  </NuxtLink>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
 
<style scoped lang="scss"></style>