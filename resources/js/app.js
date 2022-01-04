require('./bootstrap');


import { createApp } from 'vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faTrashAlt, faUserEdit } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faTrashAlt, faUserEdit)
const app = createApp({});

app.component('font-awesome-icon', FontAwesomeIcon)

import Main from './components/employee/Main.vue';


app.component('employee-main', Main);


app.mount('#app');