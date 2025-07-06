<script setup>
import NavBar from '@/components/navBar/NavBar.vue';
import { Head, Link, } from '@inertiajs/vue3';
import CyberSecurity from '@/components/CyberSecurity/CyberSecurity.vue';

const props = defineProps({
    teamName: {
        type: String,
    },
});

</script>

<template>
    <Head title="Cyber Security">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class=" flex flex-col min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 dark:from-gray-900 dark:via-slate-900 dark:to-slate-900 transition-all duration-500">
        <NavBar :teamName="props.teamName" @toggleDarkMode="toggleDarkMode" :isDark="isDark" />
        <CyberSecurity />

    </div>

</template>

<style>

</style>
