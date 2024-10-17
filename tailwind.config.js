/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            customBlue : '#3FA2F6',
            customCyan : '#D0F6FF'
          },
    },
  },
  plugins: [],
}

