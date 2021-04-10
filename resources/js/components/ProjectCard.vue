<template>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ project.title }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Manager Name.
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5">
                    <dt class="text-sm font-medium text-gray-500">
                        {{ project.description }}
                    </dt>
                </div>
            </dl>
        </div>
    </div>
</template>

<script>
export default {
    props: ['project']
}
</script>
