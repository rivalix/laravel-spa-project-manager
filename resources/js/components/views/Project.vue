<template>
    <div class="grid-cols-12 gap-4">
        <project-card :project="project"></project-card>
    </div>
</template>

<script>
import ProjectCard from "../ProjectCard";
import axios from "axios";

export default {
    components: {ProjectCard},
    data() {
        return {
            project: {}
        }
    },
    created() {
        axios.post('/graphql', {
            query: this.$apiQueries.singleProject,
            variables: {
                projectId: parseInt(this.$route.params.id)
            }
        }).then(res => {
            this.project = res.data.data.projects[0];
        })
    }
}
</script>
