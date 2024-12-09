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
            },
        },
    },
    plugins: [],
    
};
module.exports = {
    theme: {
      extend: {
        keyframes: {
          colorCycle: {
            '0%': { backgroundColor: '#FF5733' }, // Warna 1
            '25%': { backgroundColor: '#33FF57' }, // Warna 2
            '50%': { backgroundColor: '#3357FF' }, // Warna 3
            '75%': { backgroundColor: '#FF33A1' }, // Warna 4
            '100%': { backgroundColor: '#FF5733' }, // Kembali ke Warna 1
          },
        },
        animation: {
          colorCycle: 'colorCycle 5s infinite', // Atur durasi dan pengulangan
        },
      },
    },
    plugins: [],
  };
  