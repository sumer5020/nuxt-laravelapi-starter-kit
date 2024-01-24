import type {UseFetchOptions} from 'nuxt/app'
import {useRequestHeaders} from "nuxt/app";
 
export function useApiFetch<T>(path: string, options: UseFetchOptions<T> = {}) {
  let headers: any = {}
  const config = useRuntimeConfig();
  const token = useCookie('XSRF-TOKEN');
  const lang = useCookie('i18n_redirected');
  
  if (lang.value) {
    headers['x-accept-language'] = lang.value as string;
  }

  if (token.value) {
    headers['X-XSRF-TOKEN'] = token.value as string;
  }
 
  if (process.server) {
    headers = {
      ...headers,
      ...useRequestHeaders(["cookie"]),
        referer: config.public.webURL,
    }
  }
 
  return useFetch(config.public.apiURL + path, {
    credentials: "include",
    watch: false,
    ...options,
    headers: {
      ...headers,
      ...options?.headers
    }
  });
}