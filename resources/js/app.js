import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import ModalWindow from "./components/ModalWindow.vue"

import axios from 'axios'
import VueAxios from 'vue-axios'

import { VMaskDirective } from 'v-slim-mask'

const global_app = createApp({
    components:{
        ModalWindow,
    }
})

global_app.use(VueAxios, axios)
global_app.directive('mask', VMaskDirective)
global_app.mount("#global_app");
