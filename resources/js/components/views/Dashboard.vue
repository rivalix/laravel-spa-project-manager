<template>
    <div class="grid grid-cols-3 gap-4">
        <project-card v-for="project in projects"
        :project="project"
        :key="project.id"></project-card>
    </div>
</template>

<script>
import axios from 'axios';
import ProjectCard from "../ProjectCard";
export default {
    components: {ProjectCard},
    data() {
        return {
            projects: []
        }
    },
    created() {
       axios.post('/graphql', {
           query: '{projects{id,title,description}}'
       }).then(res => {
           this.projects = res.data.data.projects;
       })
    }
}
</script>
