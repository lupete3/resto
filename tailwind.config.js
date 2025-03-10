/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {},
    },
    plugins: [
        require('daisyui'),
        require('tailwind-scrollbar-hide'),
        require('tailwindcss'),
    ],
    daisyui: {
        themes : ["bumblebee"],
    }
}

