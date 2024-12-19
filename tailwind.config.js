import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'non-photo-blue': {
                    DEFAULT: '#89d2dc',
                    100: '#103237',
                    200: '#21656e',
                    300: '#3197a5',
                    400: '#52bdcb',
                    500: '#89d2dc',
                    600: '#a1dbe3',
                    700: '#b8e4ea',
                    800: '#d0edf1',
                    900: '#e7f6f8'
                },
                'slate-blue': {
                    DEFAULT: '#6564db',
                    100: '#0d0c34',
                    200: '#1a1868',
                    300: '#27259c',
                    400: '#3532cf',
                    500: '#6564db',
                    600: '#8685e2',
                    700: '#a4a3e9',
                    800: '#c3c2f1',
                    900: '#e1e0f8'
                },
                'palatinate-blue': {
                    DEFAULT: '#232ed1',
                    100: '#07092a',
                    200: '#0e1354',
                    300: '#151c7e',
                    400: '#1c26a7',
                    500: '#232ed1',
                    600: '#4a54e0',
                    700: '#777ee8',
                    800: '#a4a9f0',
                    900: '#d2d4f7'
                },
                'oxford-blue': {
                    DEFAULT: '#101d42',
                    100: '#03060d',
                    200: '#060c1a',
                    300: '#0a1227',
                    400: '#0d1735',
                    500: '#101d42',
                    600: '#213c87',
                    700: '#315acc',
                    800: '#7591de',
                    900: '#bac8ee'
                },
                'rich-black': {
                    DEFAULT: '#0d1317',
                    100: '#030405',
                    200: '#050809',
                    300: '#080b0e',
                    400: '#0a0f12',
                    500: '#0d1317',
                    600: '#2f4554',
                    700: '#517790',
                    800: '#86a5bb',
                    900: '#c2d2dd'
                },

            },
        },
    },

    plugins: [forms, typography],
};
