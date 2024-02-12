import { createStore } from "vuex";
import state from './state'
import * as actions from './action'
import * as mutations from './mutation'

const store = createStore({
    state: {
        user: {
            token: sessionStorage.getItem('TOKEN'),
            data: {}
        }
    },
    getters: {},
    actions,
    mutations,
})

export default store
