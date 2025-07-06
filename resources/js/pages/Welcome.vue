<script setup lang="ts">
import { Head, Link, } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import NavBar from '@/components/navBar/NavBar.vue';
import Hero from '@/components/welcome/Hero.vue';
import WhyChoseUs from '@/components/welcome/WhyChoseUs.vue';
import Benefits from '@/components/welcome/Benefits.vue';
import FinalCallToAction from '@/components/welcome/FinalCallToAction.vue';
import Support from '@/components/welcome/Support.vue';
import HowItWorks from '@/components/welcome/HowItWorks.vue';

const props = defineProps({
    teamName: {
        type: String,
    },
    maps: {
        type: String,
    }
});

const isDark = ref(false);

onMounted(() => {
    isDark.value = document.documentElement.classList.contains('dark') ||
                   localStorage.getItem('theme') === 'dark'

    if (isDark.value) {
        document.documentElement.classList.add('dark')
    }
})

function toggleDarkMode() {
    isDark.value = !isDark.value
    document.documentElement.classList.toggle('dark', isDark.value)
    localStorage.setItem('theme', isDark.value ? 'dark' : 'light')
}

</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class=" flex flex-col min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 dark:from-gray-900 dark:via-slate-900 dark:to-slate-900 transition-all duration-500">
         <NavBar :teamName="props.teamName" @toggleDarkMode="toggleDarkMode" :isDark="isDark" />
         <Hero />
         <HowItWorks />
         <Benefits />
         <WhyChoseUs />
         <FinalCallToAction  />
         <Support />
    </div>
</template>

