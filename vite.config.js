// import { defineConfig } from "vite";
// import vue from "@vitejs/plugin-vue"; // Pastikan plugin Vue diimport

// // https://vitejs.dev/config/
// export default defineConfig({
//     plugins: [vue()], // Plugin Vue harus ada di sini
// });

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
