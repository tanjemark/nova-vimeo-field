Nova.booting((Vue, router) => {
    Vue.component('index-vimeo', require('./components/IndexField'));
    Vue.component('detail-vimeo', require('./components/DetailField'));
    Vue.component('form-vimeo', require('./components/FormField'));
})
