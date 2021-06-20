import Vue from "vue";

Vue.prototype.$apiQueries = {
    dashboard: '{projects{id,title,description,manager{id,name}}}',
    singleProject: `query fetchSingleProject($projectId: Int){
                    projects(projectId:$projectId) {
                        id,
                        title,
                        description,
                        manager {
                            id,
                            name
                        },
                        tasks {
                            id,
                            title,
                            description,
                            statusCode,
                            user {
                                name
                            }
                        }
                    }
                }`
}
