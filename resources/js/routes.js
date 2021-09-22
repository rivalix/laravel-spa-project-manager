import Dashboard from "./components/views/Dashboard.vue";
import Project from "./components/views/Project";
import Login from "./components/views/Login";

export default [
    {path: '/', component: Dashboard},
    {path: '/project/:id', component: Project},
    {path: '/login', component: Login},
];
