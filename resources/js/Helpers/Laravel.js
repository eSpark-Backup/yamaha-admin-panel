import LaravelRoutes from './LaravelRoutes.json';

export default {

    route(name, params = {}) {
        let Route = LaravelRoutes.find(r => r.name === name);

        if (typeof Route === 'object') {

            let URL = Route.uri;

            for (let key in params) {
                URL = URL.replace(`{${key}}`, params[key])
            }

            return URL;

        }

        return '';
    },

    handleValidationErrors(e) {
        let response = e?.response;

        let errors = response?.data?.errors;

        let share = {};

        if (typeof response === "object" && errors && typeof errors === "object") {
            for (let key in errors) {
                let message = "";

                if (typeof errors[key] === "object") {
                    message = errors[key][0];
                }

                if (errors.hasOwnProperty(key)) {
                    share[key] = message;
                }
            }
        }
        return share;
    }
}
