// Tidak perlu impor defaultTheme kecuali Anda menggunakannya
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                serif: ["Roboto Serif", "serif"],
            },
        },
        optimizeDeps: {
            include: [
                "swiper", // Misalnya, tambahkan swiper jika digunakan
            ],
        },
    },
    plugins: [],
};
