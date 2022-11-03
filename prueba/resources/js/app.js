require('./bootstrap');

import { createApp } from 'vue';

createApp({})
    .component("welcome", require("./components/welcome.vue").default)
    .mount('#app');

