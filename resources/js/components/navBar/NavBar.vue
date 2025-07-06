<script setup>
import { Head, Link, } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';

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
    <header class="relative z-50 w-full">
            <div class="container mx-auto px-6 py-4">
                <nav class="flex items-center justify-between">
                    <!-- Logo/Brand -->
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-to-r from-green-600 to-green-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-sm">I</span>
                        </div>
                        <span class="text-xl font-bold text-gray-800 dark:text-white">{{ props.teamName }} </span>
                    </div>

                    <div class="mx-auto flex flex-row gap-6">
                        <div>
                            <Link href="/" class="flex items-center gap-1 text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 font-medium">Welcome</Link>
                        </div>
                        <div class="relative group">
                            <button class="flex items-center gap-1 text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 font-medium">
                                Industries
                                <svg class="w-4 h-4 transform group-hover:rotate-180 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transform scale-95 group-hover:scale-100 transition-all z-10">
                                <Link href="/industries/cybersecurity" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Cyber Security</Link>
                                <Link href="/industries/operational-resilience-utilities" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Utilities & OES</Link>
                                <Link href="/industries/financial-services" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Financial Services</Link>
                            </div>
                        </div>
                        <div class="relative group">
                            <button class="flex items-center gap-1 text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 font-medium">
                                Insights
                                <svg class="w-4 h-4 transform group-hover:rotate-180 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transform scale-95 group-hover:scale-100 transition-all z-10">
                                <Link href="/industries/blog" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Blogs</Link>
                                <Link href="/industries/whitepaper" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">White Paper</Link>
                            </div>
                        </div>
                    </div>




                    <!-- Navigation -->
                    <div class="flex items-center space-x-4">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="px-6 py-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition-colors duration-200 font-medium"
                        >
                            Dashboard
                        </Link>
                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="px-6 py-2 text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-500 transition-colors duration-200 font-medium"
                            >
                                Log in
                            </Link>
                        </template>
                        <button
                            @click="toggleDarkMode"
                            class="p-2 rounded-full bg-gray-200 dark:bg-gray-800 hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors duration-200"
                        >
                            <svg v-if="isDark" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
                            </svg>
                            <svg v-else class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                            </svg>
                        </button>
                    </div>
                </nav>
            </div>
        </header>
</template>
