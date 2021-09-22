<template>
    <div class="flex items-center justify-center">
        <div class="w-full max-w-xs">
            <form @submit.prevent="submitForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <!-- error messages-->
                <div v-if="errorMessages" class="bg-red-50 border-l-4 border-red-500 text-orange-700 p-4 mb-1" role="alert">
                    {{ errorMessages }}
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Username
                    </label>
                    <input v-model="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                    focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input v-model="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight
                    focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="************">
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none
                    focus:shadow-outline"
                        type="submit">
                    Login
                </button>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
                    &copy;2021 Wanna Code - Raúl Álvarez.
                    </p>
                </div>
        </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: '',
            errorMessages: ''
        };
    },
    methods: {
        submitForm() {
            this.$query('login', {
                email: this.email,
                password: this.password
            }).then(res => {
                
            })
        }
    }
}
</script>
