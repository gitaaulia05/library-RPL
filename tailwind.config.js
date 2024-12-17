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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                lora : ["Lora"],
                inter : ["Inter"],
            },
            colors: {
                yellow : '#FFEDAC',
                red :'#FFE9E9',
                redDark: '#FFDCDC',
                blue :'#E9FCFF',
                purple1 :'#DFD6FF',
                purple2 :'#F9F9FF',
                green : '#E9FFF4',
                greenDark : '#D3F7E5',
                
            }
        },
    },
    plugins: [],
};
