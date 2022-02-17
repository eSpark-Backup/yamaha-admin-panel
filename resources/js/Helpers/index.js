export function getWindowWidth() {
    return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
}


export function getCurrentYear() {
    return new Date().getFullYear()
}



export function resolveComponents(components, instance) {

    components.keys().map(key => {

        let componentName = key.split('/').pop().split('.')[0];

        instance.component(componentName, components(key).default)

    })

}


export function BootstrapModal(identifier, options = {}) {
    return Bootstrap.Modal.getOrCreateInstance(document.getElementById(identifier), { ...options })
}


export function Currency(options = {}) {
    let config = { style: 'currency', currency: 'JPY' };

    config = Object.assign(config, options);
    return new Intl.NumberFormat('ja-JP', config)
}

export { default as Laravel } from './Laravel'
