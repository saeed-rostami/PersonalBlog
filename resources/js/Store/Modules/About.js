import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import response from "vue-resource/src/http/response";


const state = {
  abouts: []
};


const getters = {
    getAbouts(state){
       return state.abouts;
    }
};


const mutations = {
    setAbouts(state , abouts){
        state.abouts = abouts;
    }
};


const actions = {
    getAboutsFromServer(context){
        axios.get("http://127.0.0.1:8000/api/abouts" )
            .then(response => {
              return response.data;
            }).then(data=>{
            console.log(data);
            context.commit('setAbouts' , data);
        })
    }
};


export default {
    state,
    getters,
    mutations,
    actions,
}
