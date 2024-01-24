/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
  darkMode: 'class',
  content: [
    "./components/**/*.{js,vue,ts}",
    "./layouts/**/*.vue",
    "./pages/**/*.vue",
    "./plugins/**/*.{js,ts}",
    "./app.vue",
    "./error.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Almarai', ...defaultTheme.fontFamily.sans],
        rajdhani: ['Rajdhani', ...defaultTheme.fontFamily.serif],
        almarai: ['Almarai', ...defaultTheme.fontFamily.sans],
      },
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      red: colors.rose,

      light_blue: {
        50: '#f0f4f3',
        100: '#d3e2eb',
        200: '#b4d1dc',
        300: '#95c0cd',
        400: '#84b1c7',
        500: '#b4c9d9',
        600: '#a1b7cf',
        700: '#8ea5c5',
        800: '#7b93bb',
        900: '#6981b1',
      },
      dark_blue: {
        50: '#e8f0f6',
        100: '#a9d9e8',
        200: '#8ac9ce',
        300: '#6ebab5',
        400: '#549ca5',
        500: '#203552',
        600: '#2d3d4d',
        700: '#1f3348',
        800: '#1a2a3f',
        900: '#091b2a',
      },
      blue: {
        50: '#edf1f3',
        100: '#cfdfe8',
        200: '#b1cddc',
        300: '#93bbd0',
        400: '#7cadca',
        500: '#0b4b7d',
        600: '#0c4270',
        700: '#0a3862',
        800: '#092e54',
        900: '#072346',
      },
      accent: {
        50: '#fce4ec',
        100: '#f8bbd0',
        200: '#f48fb1',
        300: '#f06292',
        400: '#ec407a',
        500: '#e91e63',
        600: '#d81b60',
        700: '#c2185b',
        800: '#ad1457',
        900: '#880e4f',
      },

      /* Blue Dark Theme Colors */
      dark_primary: "#b4c9d9",
      dark_secondary: "#0b4b7d",
      dark_bg: "#090b1f",

      /* Blue Light Theme Colors */
      light_primary: "#203552",
      light_secondary: "#0b4b7d",
      light_bg: "#f0f4f3",
    }
  },
  plugins: [
    require('tailwind-scrollbar')
  ],
}