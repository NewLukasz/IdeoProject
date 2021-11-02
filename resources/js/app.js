require('./bootstrap');

import Vue from 'vue';

import itemManagement from './vueItemManagement/app'

import { library } from '@fortawesome/fontawesome-svg-core'
import { faTrash, faPlusSquare, faArrowRight, faArrowDown} from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faTrash, faPlusSquare, faArrowRight, faArrowDown)

import VueSimpleAlert from "vue-simple-alert";

Vue.use(VueSimpleAlert);

Vue.component('font-awesome-icon', FontAwesomeIcon)

const app = new Vue({
    el:"#app",
    components: {itemManagement}
})
