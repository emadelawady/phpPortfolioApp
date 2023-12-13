/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  darkMode: 'class',
    content: [
        './dist/*.html',
        './*.{html,js,php}',
        "./Resources/Views/**/*.php",
        "./public/*.php",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        colors: {
          'primary': '#5850ec',
          'primary-light': '#00bfff'
        }
      },
    },
    variants: {
      extend: {},
    },
    plugins: [
      require('@tailwindcss/typography'),
      require('@tailwindcss/forms'),
      require('flowbite/plugin')
    ],
  }
  