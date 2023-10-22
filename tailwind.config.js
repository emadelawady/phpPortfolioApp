/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './dist/*.html',
        './*.{html,js,php}',
        "./App/Views/**/*.php",
        "./public/*.php",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {},
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
  