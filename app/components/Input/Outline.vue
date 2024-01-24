<script lang="ts" setup>
const props = defineProps({
    type:{
        type: String,
        default: "text"
    },
    name:{
        type: String,
        default: ""
    },
    classes:{
        type: String,
        default: ""
    },
    label:{
        type: String,
        default: ""
    },
    modelValue: String,
})

defineEmits(['update:modelValue'])

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div class="relative h-10 w-full">
        <input :type="type" :name="name" ref="input" :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            class="peer h-full w-full rounded-[7px] border border-t-0 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-current outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-current placeholder-shown:border-t-current focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-black/10"
            :class="classes"
            placeholder=" " />
        <label :for="name"
            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-current transition-all before:pointer-events-none before:mt-[6.5px] ltr:before:mr-1 rtl:before:ml-1 before:box-border before:block before:h-1.5 before:w-2.5 ltr:before:rounded-tl-md rtl:before:rounded-tr-md before:border-t ltr:before:border-l rtl:before:border-r before:border-current before:transition-all after:pointer-events-none after:mt-[6.5px] ltr:after:ml-1 rtl:after:mr-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow ltr:after:rounded-tr-md rtl:after:rounded-tl-md after:border-t ltr:after:border-r rtl:after:border-l after:border-current after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-current peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight dark:peer-focus:text-dark_blue-50 peer-focus:text-light_blue-900 peer-focus:before:border-t-2 ltr:peer-focus:before:border-l-2 rtl:peer-focus:before:border-r-2 peer-focus:before:border-blue-500 peer-focus:after:border-t-2 ltr:peer-focus:after:border-r-2 rtl:peer-focus:after:border-l-2 peer-focus:after:border-blue-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-current">
            {{ label }}
        </label>
    </div>
</template>