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
    <Head title="Operational Resilience for Cyber Security | Invenode">
        <meta name="description" content="Proactively protect your organization from cyber disruptions. Invenode empowers cyber security teams with complete visibility, critical dependency mapping, and advanced risk modeling to build true operational resilience and reduce downtime." />
        <meta name="keywords" content="Operational Resilience, Cyber Security Resilience, Cyber Risk Management, Business Continuity, Critical Dependency Mapping, Risk Modeling, Downtime Prevention, Invenode, Cybersecurity Disruption Protection" />
        <meta property="og:title" content="Operational Resilience for Cyber Security | Invenode" />
        <meta property="og:description" content="See how Invenode helps cyber security leaders strengthen operations, map vulnerabilities, and prevent cyber-related disruptions." />
        <meta property="og:image" content="/images/invenode-cyber-resilience.jpg" />
        <meta property="og:type" content="website" />
        <link rel="canonical" href="https://yourdomain.com/industries/cyber-security" />

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
