<template>
    <div>
        子: 
        <input v-model="localName">
        <input v-model.number="localHp">
    </div>
</template>

<script>
    export default {
        props: {
            name: String,
            hp: Number,
        },
        computed: {
            localName: {
                get() { return this.name },
                set(val) { return this.$emit('update:name', val) },
            },
            localHp: {
                get() { return this.hp },
                set(val) { return this.$emit('update:hp', val) },
            }
        }
    }
</script>
