require('./bootstrap');


import { createApp } from 'vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faTrashAlt, faUserEdit } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faTrashAlt, faUserEdit)
const app = createApp({});

app.component('font-awesome-icon', FontAwesomeIcon)

import Home from './components/Home.vue';


app.component('home', Home);


app.mount('#app');