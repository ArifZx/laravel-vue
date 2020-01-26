import Vue from 'vue';
import VueRouter from 'vue-router';
import AppComponent from './components/App';
import Appointment from './views/AppointmentCreate';

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {path: '/', component: AppComponent},
        {path: '/appointments/create', component: Appointment}
    ],
    mode: 'history',
});
