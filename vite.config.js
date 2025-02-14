import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    // server: {
    //     host: '0.0.0.0',
    //     port: 8000,
    //     hmr: {
    //         host: '192.168.1.32', // Change this value for your local network ip address
    //         port: 8000, // Or your app's standard port
    //     }},
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        vue(),
    ],
});
