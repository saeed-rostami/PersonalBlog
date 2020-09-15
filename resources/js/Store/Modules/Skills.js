import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import response from "vue-resource/src/http/response";


const state = {
    abouts: [],
    skills: []
};


const getters = {
    getSkills(state){
        return state.skills;
    }
};


const mutations = {
    setSkills(state , skills){
        state.skills = skills;
    }
};


const actions = {
    getSkillsFromServer(context){
        axios.get("http://127.0.0.1:8000/api/skills" )
            .then(response => {
                return response.data;
            }).then(data=>{
            console.log(data);
            context.commit('setSkills' , data);
        })
    }
};


export default {
    state,
    getters,
    mutations,
    actions,
}
