/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  experimental: {
    optimizeUniversalDefaults: false
  },
  content: ["./theme/**/*.php", './src/**/*.{js,tsx}'],
  theme: {
    extend: {}
  },
  corePlugins: {
    preflight: false
  },
  plugins: [],
}
