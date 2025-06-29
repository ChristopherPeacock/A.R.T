<script setup lang="ts">
import { Head, Link, } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import NavBar from '@/Components/navBar/NavBar.vue';
import Hero from '@/Components/welcome/Hero.vue';
import WhyChoseUs from '@/Components/welcome/WhyChoseUs.vue';
import Benefits from '@/Components/welcome/Benefits.vue';
import FinalCallToAction from '@/Components/welcome/FinalCallToAction.vue';

const props = defineProps({
    teamName: {
        type: String,
    },
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

    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 dark:from-gray-900 dark:via-slate-900 dark:to-slate-900 transition-all duration-500">
         <NavBar :teamName="props.teamName" @toggleDarkMode="toggleDarkMode" :isDark="isDark" />
         <Hero />
         <Benefits />
         <WhyChoseUs />
         <FinalCallToAction />
    </div>
</template>
