<template>
    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
          :class="classObj">
        {{ getStatusText() }}
    </span>
</template>

<script>
export default {
    props: ['status'],
    data() {
        return {
            classObj: {
                'bg-green-100 text-green-800': this.status === 'COMP',
                'bg-yellow-100 text-yellow-800': this.status === 'OPEN',
                'bg-red-100 text-red-800': this.status === 'HOLD'
            }
        }
    },
    methods: {
        getStatusText() {
            let status = this.status.toUpperCase();
            if (status === 'COMP') {
                return 'Complete'
            } else if (status === 'OPEN') {
                return 'Open'
            }
            return 'Hold'
        }
    }
}
</script>
