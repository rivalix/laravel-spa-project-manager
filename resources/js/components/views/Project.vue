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
            query: `{
                projects(projectId: ${this.$route.params.id})
                    {
                        id,
                        title,
                        description
                    }
                }`
        }).then(res => {
            this.project = res.data.data.projects[0];
        })
    }
}
</script>
