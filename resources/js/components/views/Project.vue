<template>
    <div class="grid-cols-12 gap-4">
        <single-project-card :project="project"></single-project-card>
    </div>
</template>

<script>
import SingleProjectCard from "../SingleProjectCard";

export default {
    components: {SingleProjectCard},
    data() {
        return {
            project: {}
        }
    },
    created() {
        this.$query('singleProject',{
                projectId: parseInt(this.$route.params.id)
        }).then(res => {
            this.project = res.data.data.projects[0];
        })
    }
}
</script>
