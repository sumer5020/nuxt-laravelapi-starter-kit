import { defineStore } from "pinia";
import { useApiFetch } from "~/composables/useApiFetch";

export const useTestStore = defineStore("test", () => {
  const apiInfo = ref();

  async function fetchApiInfo() {
    const { data, error } = await useApiFetch("/api");
    apiInfo.value = data.value;
  }

  return { apiInfo, fetchApiInfo };
});
