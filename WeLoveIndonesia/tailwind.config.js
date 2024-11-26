import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            translate: {
                '128': '32rem', 
                '144': '36rem', 
                '160': '40rem',
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans]
            },
        },
    },
    plugins: [],
};
