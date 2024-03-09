import './bootstrap';

import { createApp } from 'vue';
import App from './frontend/login.vue';

const app = createApp(App);

app.mount('#login')