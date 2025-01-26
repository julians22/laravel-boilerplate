import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import path from 'path'

export default defineConfig({
    plugins: [
        laravel([
            'resources/sass/frontend/app.scss',
            'resources/sass/backend/app.scss',
            'resources/js/frontend/app.js',
            'resources/js/backend/app.js',
            'resources/js/plugins.js',
        ]),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~@fortawesome/fontawesome-free/scss/fontawesome': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss'),
            '~@fortawesome/fontawesome-free/scss/regular': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free/scss/regular.scss'),
            '~@fortawesome/fontawesome-free/scss/solid': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free/scss/solid.scss'),
            '~@fortawesome/fontawesome-free/scss/brands': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free/scss/brands.scss'),
            '~@fortawesome/fontawesome-free/webfonts': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free/webfonts'),
            '~@coreui/coreui/scss/coreui': path.resolve(__dirname, 'node_modules/@coreui/coreui/scss/coreui.scss'),
            '~@coreui/icons/css/free.min.css': path.resolve(__dirname, 'node_modules/@coreui/icons/css/free.min.css'),
            'sweetalert2': path.resolve(__dirname, 'node_modules/sweetalert2'),
        }
    },
})
