<script lang="ts" setup>
const { locale } = useI18n()

const toggle = ref(false)
const notifications = []

const changeToggle = async() => {
    toggle.value = !toggle.value
}
</script>

<template>
    <div>
        <div class="flex items-center justify-center text-light_primary dark:text-dark_primary">
            <div class="relative inline-block text-start" aria-label="language">
                <!--@focusout="toggle = false"-->
                <button @click="changeToggle"
                    class="inline-flex uppercase justify-center p-2 items-center rounded-md shadow-sm focus:outline-none">
                    <Icon v-if="notifications?.length == 0" name="mdi:bell" class="w-5 h-5" />
                    <Icon v-else name="mdi:bell-badge" class="w-5 h-5" />
                </button>
                <div class="w-64 capitalize absolute mt-2 rounded-md shadow-lg origin-top-right dark:bg-dark_blue-900 bg-white"
                    :class="(!toggle ? 'hidden' : '')+' '+ (locale == 'ar' ? 'left-0' : 'right-0')">
                    <div role="menu" aria-orientation="vertical">
                        <ul class="py-2 p-2 flex flex-col gap-y-1" @mouseleave="toggle = false">
                            <li class="border-b opacity-30 flex justify-center items-center py-1">{{ $t('content.notifications') }}</li>
                            <li v-for="(notify, i) in notifications" :key="i" role="menuItem"
                                class="inline-flex rounded-md px-4 py-2 text-sm cursor-pointer w-full hover:bg-light_blue-50 dark:hover:bg-dark_blue-800">
                                {{ notify.title }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<style scoped lang="scss"></style>