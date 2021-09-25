import Vue from "vue";
import axios from "axios";

let queries = {
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
                }`,
    login: `mutation LoginUser($email:String, $password:String) {
        login(email: $email, password: $password)
    }`
}

Vue.prototype.$query = function (queryName, queryVariables) {
    let options = {
        url: '/graphql',
        method: 'POST',
        data: {
            query: queries[queryName]
        }
    }

    if (queryVariables) {
        options.data.variables = queryVariables
    }

    // TODO check-api-token

    return axios(options)
}
