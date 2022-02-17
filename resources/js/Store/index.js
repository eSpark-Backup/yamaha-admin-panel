import { createStore } from 'vuex'
import { getCurrentYear } from '@/Helpers'

export default createStore({
    state: () => ({
        app: {
            name: 'Yamaha Motor Co. Ltd.',
            copyright: getCurrentYear()
        },

        settings: {
            colorTheme: ""
        }

    }),

    getters: {
        // Get App name
        appName: (state) => {
            return state.app.name
        },
        // Get App version
        appVersion: (state) => {
            return state.app.version
        },
        // Get App copyright year
        appCopyright: (state) => {
            return state.app.copyright
        },
        // Get app color theme
        appColorTheme: (state) => {
            return state.settings.colorTheme
        }
    },

    modules: {

        layout: require('./Layout').default,

    }
})
