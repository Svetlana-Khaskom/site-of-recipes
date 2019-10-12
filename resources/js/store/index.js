import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        listUserRecipes: {},
    },

    actions: {
        setListUserRecipes({commit}, {status}) {
            commit('SET_STATUS_DROPDOWN', status);
        },
    },
    mutations: {
        SET_STATUS_DROPDOWN(state, status) {
            state.listUserRecipes = status;
        },
    },
    getters: {
        getListUserRecipes(state) {
            return state.listUserRecipes;
        },
    },
    modules: {}
});
