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
            keyframes: {
                slideDownUp: {
                    '0%': { transform: 'translateY(-100%)', opacity: '0' }, // Mulai di luar layar atas
                    '100%': { transform: 'translateY(0)', opacity: '1' },    // Muncul di posisi normal
                },
            },
            animation: {
                slideDownUp: 'slideDownUp 2s ease-out', // Durasi animasi 2 detik, sekali
            },
        },
    },
    plugins: [
        require('flowbite/plugin')({
            datatables: true,
        }),
    ],
};
