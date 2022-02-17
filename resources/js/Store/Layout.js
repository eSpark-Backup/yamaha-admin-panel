import { getWindowWidth } from "@/Helpers"
import Cookies from "js-cookie";

export default {
    namespaced: true,

    state: () => ({
        theme: {
            active: '',
            darkMode: Cookies.get('theme_dark_mode') ? true : false
        },

        page: {
            loader: false,
            overlay: false,
        },

        header: {
            enabled: true,
            search: false,
            loader: false
        },

        footer: {
            enabled: true
        },

        sidebar: {

            enabled: true,

            type: Cookies.get('isMiniSidebarEnabled') ? 'mini' : '',

            onDesktop: true,

            onMobile: false,

        },


        sideOverlay: {
            enabled: false
        },

    }),


    mutations: {

        sidebar(state, { mode }) {

            if (getWindowWidth() > 991) {
                switch (mode) {
                    case 'open':
                        state.sidebar.onDesktop = true;
                        break;
                    case 'close':
                        state.sidebar.onDesktop = false;
                        break;
                    default:
                        state.sidebar.onDesktop = !state.sidebar.onDesktop;
                }

            } else {
                switch (mode) {
                    case 'open':
                        state.sidebar.onMobile = true;
                        break;
                    case 'close':
                        state.sidebar.onMobile = false;
                        break;
                    default:
                        state.sidebar.onMobile = !state.sidebar.onMobile;
                }
            }
        },


        toggleMiniSidebar(state) {
            if (state.sidebar.type === 'mini') {
                Cookies.remove('isMiniSidebarEnabled')
                state.sidebar.type = '';
            } else {
                state.sidebar.type = 'mini';
                Cookies.set('isMiniSidebarEnabled', 1)
            }
        },


        search(state, { mode }) {
            switch (mode) {
                case 'on':
                    state.header.search = true;
                    break;

                case 'off':
                    state.header.search = false;
                    break;

                default:
                    state.header.search = !state.header.search;
                    break;
            }
        },


        headerLoader(state, { mode }) {
            switch (mode) {
                case 'on':
                    state.header.loader = true;
                    break;

                case 'off':
                    state.header.loader = false;
                    break;

                default:
                    state.header.loader = !state.header.loader;
                    break;
            }
        },


        pageLoader(state, { mode }) {
            switch (mode) {
                case 'on':
                    state.page.loader = true;
                    break;
                case 'off':
                    state.page.loader = false;
                    break;
                default:
                    state.page.loader = !state.page.loader;
                    break;
            }
        },


        toggleDarkMode(state) {
            if (state.theme.darkMode) {
                Cookies.remove('theme_dark_mode')
                state.theme.darkMode = false;
            } else {
                Cookies.set('theme_dark_mode', 1)
                state.theme.darkMode = true;
            }
        }
    },

    getters: {
        isHeaderEnabled(state) {
            return state.header.enabled;
        },

        isSidebarEnabled(state) {
            return state.sidebar.enabled;
        },

        isMiniSidebarEnabled(state) {
            return state.sidebar.type === 'mini';
        },

        isSidebarOpenOnDesktop(state) {
            return state.sidebar.onDesktop;
        },

        isSidebarOpenOnMobile(state) {
            return state.sidebar.onMobile;
        },

        isFooterEnabled(state) {
            return state.footer.enabled;
        },

        isSideOverlayEnabled(state) {
            return state.sideOverlay.enabled;
        },

        isPageOverlayEnabled(state) {
            return state.page.overlay;
        },

        isPageLoaderEnabled(state) {
            return state.page.loader;
        },

        isDarkModeEnabled(state) {
            return state.theme.darkMode;
        }
    }
}
