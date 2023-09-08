const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{html,js}", "./public/*.html',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                urbanist: ['Urbanist', 'sans-serif'],
                vietnam: ['Be Vietnam Pro', 'sans-serif'],
            },
            colors: {
                "bright-red": "hsl(12, 88%, 59%)",
                "bright-red-light": "hsl(12, 88%, 69%)",
                "bright-red-sup-light": "hsl(12, 88%, 95%)",
                "dark-blue": "hsl(228, 39%, 23%)",
                "dark-grayish-blue": "hsl(227, 12%, 61%)",
                "very-dark-blue": "hsl(233, 12%, 13%)",
                "very-pale-red": "hsl(13, 100%, 96%)",
                "very-light-gray": "hsl(0, 0%, 98%)",
            },
            backgroundImage: {
                "close-menu": "url('../images/icon-close.svg')",
                "open-menu": "url('../images/icon-hamburger.svg')"
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};