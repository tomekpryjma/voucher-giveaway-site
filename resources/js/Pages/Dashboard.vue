<template>
    <div class="container mx-auto">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayoutVue from '../Layouts/MainLayout.vue';

export default {
    layout: MainLayoutVue
}
</script>