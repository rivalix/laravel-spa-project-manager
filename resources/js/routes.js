import Dashboard from "./components/views/Dashboard.vue";
import Project from "./components/views/Project";

export default [
    {path: '/', component: Dashboard},
    {path: '/project/:id', component: Project}
];
