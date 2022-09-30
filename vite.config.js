import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { svelte } from '@sveltejs/vite-plugin-svelte'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        svelte({
            customElement: true,
            tag: null // to get rid of "no custom element tag name" warning because we are defining components tag name it in app.js file. otherwise you would have to put "<svelte:options tag={null} />" in all of your custom elements.
        }),
    ],
});
