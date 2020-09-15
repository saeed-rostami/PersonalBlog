import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import response from "vue-resource/src/http/response";


const state = {
    abouts: [],
    skills: [],
    contacts: []
};


const getters = {
    getContacts(state){
        return state.contacts;
    }
};


const mutations = {
    setContacts(state , contacts){
        state.contacts = contacts;
    }
};


const actions = {
    getContactsFromServer(context){
        axios.get("http://127.0.0.1:8000/api/contacts" )
            .then(response => {
                return response.data;
            }).then(data=>{
            console.log(data)
            context.commit('setContacts' , data);
        })
    }
};


export default {
    state,
    getters,
    mutations,
    actions,
}
