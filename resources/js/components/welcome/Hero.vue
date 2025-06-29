<script setup lang="js">
import { ref } from 'vue';

</script>

<template>
    <!-- Hero Section -->
        <main class="relative overflow-hidden">
            <!-- Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute -top-40 -right-40 w-80 h-80 rounded-full opacity-20 dark:opacity-10 blur-3xl"></div>
                <div class="absolute -bottom-40 -left-40 w-80 h-80  rounded-full opacity-20 dark:opacity-10 blur-3xl"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full opacity-10 dark:opacity-5 blur-3xl"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 container mx-auto px-6 py-20 lg:py-32">
                <div class="max-w-4xl mx-auto text-center">
                    <!-- Main Headline -->
                    <div class="mb-8">
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-gray-900 dark:text-white mb-4 leading-tight">
                            Advanced Risk Management Through Interconnected Intelligence

                        </h1>
                        <h2 class=" subtitle bg-gradient-to-r from-green-400 via-green-600 to-green-800 bg-clip-text text-transparent text-2xl md:text-2xl lg:text-2xl font-bold text-gray-900 dark:text-white mb-4 leading-tight">
                                Discover Hidden Vulnerabilities, Map Dependencies, Build Resilient Operations
                        </h2>

                    </div>

                    <div class="mb-15">
                        <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 font-medium max-w-3xl mx-auto leading-relaxed">
                           Transform your risk management approach with Invenode's revolutionary platform. Our advanced dependency mapping reveals critical interconnections that traditional risk management tools miss, helping you build true operational resilience and prevent cascading failures before they happen.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                        <button class="px-8 py-4 bg-gradient-to-r from-green-600 to-green-800 text-white font-semibold rounded-full hover:from-green-700 hover:to-green-900 transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Get Started
                        </button>
                        <button class="px-8 py-4 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-semibold rounded-full hover:border-green-500 hover:text-green-600 dark:hover:text-green-400 transition-all duration-200">
                            Watch Demo
                        </button>
                    </div>
                </div>
            </div>
        </main>
</template>

<style scoped>

</style>
