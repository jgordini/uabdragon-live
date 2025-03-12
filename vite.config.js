import { defineConfig } from 'vite';
import postcss from '@tailwindcss/postcss';

export default defineConfig({
    plugins: [],
    css: {
        postcss: {
            plugins: [
                postcss(),
            ],
        },
    },
    build: {
        outDir: '.',
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                'css/app': 'resources/css/app.css',
                'css/editor-style': 'resources/css/editor-style.css'
            },
            output: {
                entryFileNames: 'js/[name].js',
                assetFileNames: '[name][extname]'
            }
        }
    }
});