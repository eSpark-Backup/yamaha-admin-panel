<template>
    <div v-if="message" class="invalid-feedback animated fadeIn">{{ message }}</div>
</template>
<script>
export default {
    props: ['message']
}
</script>
