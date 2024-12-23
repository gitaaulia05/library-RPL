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
                yellow2 : '#FFB423',
                red1 :'#FFCCCC',
                red2 :'#FF6466',
                red3 :'#FFE9E9',
                redDark: '#FFDCDC',
                blue :'#E9FCFF',
                purple1 :'#DFD6FF',
                purple2 :'#F9F9FF',
                green2 : '#2CCF3C',
                green : '#BFF3C4',
                greenDark : '#D3F7E5',
                blueNav : '#312991',
                
            }
        },
    },
    plugins: [],
};
