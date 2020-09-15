import Vue from 'vue';
import Vuex from 'vuex';



import about from './Modules/About';
import skill from './Modules/Skills';
import contact from './Modules/Contact';

Vue.use(Vuex);

export const store = new Vuex.Store({
    modules:{
        about,
        skill,
        contact
    }

});
