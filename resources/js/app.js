import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import '../css/app.css';


createInertiaApp({
  // resolve: name => import(`./Pages/${name}.vue`),
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue');

    return pages[`./Pages/${name}.vue`]();
},
  setup({ el, App, props }) {
    createApp({ render: () => h(App, props) }).mount(el)
  },
})