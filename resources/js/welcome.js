import './bootstrap';

import { createApp } from 'vue';
import App from './frontend/welcome.vue';

const app = createApp(App);

app.mount('#welcome')