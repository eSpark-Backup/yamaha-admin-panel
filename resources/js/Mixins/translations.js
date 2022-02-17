import Languages from '@/lang'

export default {
    methods: {
        /**
         * Translate the given key.
         */
        __(key, replace = {}) {

            let Language = Languages[this.$page.props.locale];


            if (this.$page.props.language) {
                Language = this.$page.props.language;
            }

            var translation = null;

            if (typeof key !== 'string') {
                throw 'Key should be a string in type. ' + typeof key + ' type given.';
            }

            if (Language[key]) {
                translation = Language[key];
            }

            if (Language[key.toLowerCase()] && translation === null) {
                translation = Language[key.toLowerCase()];
            }

            if (translation === null) {
                translation = key;
            }

            Object.keys(replace).forEach(function (key) {
                translation = translation.replace(':' + key, replace[key])
            });

            return translation
        },
    }
}
