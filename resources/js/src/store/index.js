import { createStore } from 'vuex';

export default createStore({
    state: {
        phoneNumber: ''
    },
    mutations: {
        setPhoneNumber(state, phoneNumber) {
            state.phoneNumber = phoneNumber;
        }
    }
});
