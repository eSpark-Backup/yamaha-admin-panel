import './bootstrap';
import Store from './Store'
import { createApp, h } from 'vue'
import { Translations } from '@/Mixins';
import { resolveComponents } from '@/Helpers';
import { InertiaProgress } from '@inertiajs/progress'
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3'

InertiaProgress.init({ showSpinner: true, color: '#e60012', includeCSS: true, })

createInertiaApp({

    resolve: view => {

        const Page = require(`./Pages/${view}`).default

        if (Page.layout) {

            Page.layout = Page.layout;

        } else if (view.startsWith('Ecommerce')) {

            Page.layout = require('./Layouts/Variations/Frontend.vue').default

        } else if (view.startsWith('Superuser')) {

            Page.layout = require('./Layouts/Variations/Backend.vue').default

        }


        return Page
    },

    setup({ el, App, props, plugin }) {


        const instance = createApp({ render: () => h(App, props) })

        el.removeAttribute('data-page')

        /**
         * The following block of code may be used to automatically register your
         * Vue components. It will recursively scan this directory for the Vue
         * components and automatically register them with their "basename".
         *
         * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
         */

        resolveComponents(require.context('@/Components', true, /\.vue$/i), instance)



        instance
            .use(plugin)
            .use(Store)
            .mixin(Translations)
            .component('InertiaLink', Link)
            .component('InertiaHead', Head)
            .mount(el)
    },
})
