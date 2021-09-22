<template>
    <div class="grid grid-cols-3 gap-4">
        <project-card v-for="project in projects"
        :project="project"
        :key="project.id"></project-card>
    </div>
</template>

<script>
import ProjectCard from "../ProjectCard";
export default {
    components: {ProjectCard},
    data() {
        return {
            projects: []
        }
    },
    created() {
        this.$query('dashboard').then(res => {
           this.projects = res.data.data.projects;
       })
    }
}
</script>
