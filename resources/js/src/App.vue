<template>
    <div id="app">
        <router-view />
    </div>
</template>

<script lang="ts">
import {defineComponent} from 'vue';
import PageLayout from './components/layout/PageLayout.vue';

export default defineComponent({
    components: {
        PageLayout,
    },
});
</script>

<style lang="less" scoped>

</style>
