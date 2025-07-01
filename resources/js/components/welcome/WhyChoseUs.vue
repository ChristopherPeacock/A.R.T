<script setup>
import { ref } from 'vue';

</script>
<template>
    <!-- Welcome Section -->
        <section id="features" class="relative py-20 bg-white/50 dark:bg-gray-900/50 backdrop-blur-sm">
            <div class="container mx-auto px-6 text-center mb-15">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Why Leading Organizations Choose Invenode for Operational Resilience
                </h2>
                <p  class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Go beyond traditional risk management with our interconnected approach to Operational Resilience and Supply Chain Resilience, revealing the true complexity of your business operations.
                </p>
            </div>
            <!-- Feature Cards -->
                    <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                        <div class="bg-white/100 dark:bg-gray-800/70 backdrop-blur-lg rounded-2xl p-6 shadow-lg hover:shadow-xxl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Interconnected Risk Mapping</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-center">Visualize how processes, technology, people, and suppliers connect with our <spam class="font-bold">advanced Dependency Mapping</spam> exposing critical relationships overlooked by conventional risk assessments.</p>
                        </div>

                        <div class="text-center bg-white/100 dark:bg-gray-800/70 backdrop-blur-lg rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Hidden Vulnerability Detection</h3>
                            <p class="text-gray-600 dark:text-gray-400">Uncover vulnerabilities from complex system interactions using AI-driven risk analysis, supporting stronger <spam class="font-bold">Supply Chain Resilience.</spam></p>
                        </div>

                        <div class="text-center bg-white/100 dark:bg-gray-800/70 backdrop-blur-lg rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-red-400 rounded-xl flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12l6-6" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v9h9" />
                                </svg>

                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Real-Time Risk Intelligence</h3>
                            <p class="text-gray-600 dark:text-gray-400">Continuously monitor your risk landscape with dynamic dashboards, ensuring your organization stays prepared with actionable <spam class="font-bold">Risk Management Tools.</spam></p>
                        </div>

                        <div class="text-center bg-white/100 dark:bg-gray-800/70 backdrop-blur-lg rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v5c0 5.25-3.5 10-7 11-3.5-1-7-5.75-7-11V6l7-4z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                                </svg>

                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Operational Resilience Planning</h3>
                            <p class="text-gray-600 dark:text-gray-400">Build robust business continuity strategies based on real-time insights and system dependencies to strengthen <spam class="font-bold">Operational Resilience.</spam> </p>
                        </div>

                        <div class="text-center bg-white/100 dark:bg-gray-800/70 backdrop-blur-lg rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-4 mx-auto">
                               <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.983 13.983a2 2 0 100-3.966 2 2 0 000 3.966z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.364 12.636a8.001 8.001 0 01-1.636 4.95l1.414 1.414a1 1 0 01-1.414 1.414l-1.414-1.414a8.001 8.001 0 01-4.95 1.636v2a1 1 0 11-2 0v-2a8.001 8.001 0 01-4.95-1.636L4.05 20.414a1 1 0 01-1.414-1.414l1.414-1.414A8.001 8.001 0 012.414 12h-2a1 1 0 110-2h2a8.001 8.001 0 011.636-4.95L2.636 3.636A1 1 0 014.05 2.222l1.414 1.414A8.001 8.001 0 0112 2.414v-2a1 1 0 112 0v2a8.001 8.001 0 014.95 1.636l1.414-1.414a1 1 0 011.414 1.414l-1.414 1.414A8.001 8.001 0 0121.586 12h2a1 1 0 110 2h-2z" />
                                </svg>

                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Automated Risk Assessment</h3>
                            <p class="text-gray-600 dark:text-gray-400">Streamline your <spam class="font-bold">Risk Management</spam>program with intelligent automation that continuously evaluates interconnected risks.</p>
                        </div>
                        <div class="text-center bg-white/100 dark:bg-gray-800/70 backdrop-blur-lg rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17l6-6 4 4 8-8" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Predictive Risk Analytics</h3>
                            <p class="text-gray-600 dark:text-gray-400">Forecast risk scenarios and their cascading effects using predictive analytics to enhance <spam class="font-bold">Resilience Software decision-making.</spam> </p>
                        </div>
                    </div>
        </section>
</template>
