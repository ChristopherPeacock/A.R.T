<script setup lang="ts">
import { Head, Link, } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import NavBar from '@/Components/navBar/NavBar.vue';
import Hero from '@/Components/welcome/Hero.vue';
import WhyChoseUs from '@/Components/welcome/WhyChoseUs.vue';
import Benefits from '@/Components/welcome/Benefits.vue';

const props = defineProps({
    teamName: {
        type: String,
    },
});

const isDark = ref(false);

onMounted(() => {
    isDark.value = document.documentElement.classList.contains('light') ||
                   localStorage.getItem('theme') === 'light'

    if (isDark.value) {
        document.documentElement.classList.add('dark')
    }
})

function toggleDarkMode() {
    isDark.value = !isDark.value
    document.documentElement.classList.toggle('light', isDark.value)
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
    </div>
</template>
