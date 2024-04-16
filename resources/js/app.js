import '../css/app.css';
import {createApp} from "vue";
import App from "@/App.vue";
import Router from "@/router/router.js";
import store from "@/store/index.js";


createApp(App)
    .use(Router)
    .use(store)
    .mount('#app');
