<template>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <router-link :to="`/project/${project.id}`">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ project.title }}
                </h3>
            </router-link>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                {{ project.manager.name }}
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="px-4 py-5">
                    <dt class="text-sm font-medium text-gray-500 mb-3">
                        {{ project.description }}
                    </dt>
                    <div class="shadow overflow-hidden border-b border-gray-100 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Description
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Assigned To
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="task in project.tasks">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ task.title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ task.description }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ task.user.name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <status-badge :status="task.statusCode"></status-badge>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </dl>
        </div>
    </div>
</template>

<script>
import StatusBadge from "./StatusBadge";

export default {
    components: {StatusBadge},
    props: ['project']
}
</script>
