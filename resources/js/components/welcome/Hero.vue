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
                <!-- hero container width below div -->
                <div class="max-w-5xl mx-auto text-center">
                    <!-- Main Headline -->
                    <div class="mb-8">
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-gray-900 dark:text-white mb-4 leading-tight">
                            Advanced Risk Management Through Interconnected Intelligence

                        </h1>
                        <h2 class=" subtitle bg-gradient-to-r from-green-400 via-green-600 to-green-800 bg-clip-text text-transparent text-2xl md:text-2xl lg:text-2xl font-bold text-gray-900 dark:text-white mb-4 leading-tight">
                                Uncover Hidden Risks • Map Critical Dependencies • Build Resilient Operations
                        </h2>

                    </div>

                    <div class="mb-15">
                        <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 font-medium max-w-6xl mx-auto leading-relaxed">
                            <spam class="font-bold">Revolutionize your risk management strategy with Invenode's cutting-edge platform.</spam><br>
                            Our intelligent dependency mapping exposes hidden vulnerabilities, operational blind spots, and supply chain weaknesses that traditional risk tools overlook. Proactively prevent cascading failures, strengthen resilience, and gain complete visibility across your business ecosystem.
                            <spam class="font-bold">Invenode — Transforming Risk Management for Modern Enterprises.</spam>
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                     <div class="hero-buttons flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="/contact"
                       class="primary-btn group relative px-8 py-4 bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold rounded-2xl text-lg transition-all duration-300 primary-btn-hover animate-glow animate-slide-left hover:from-green-400 hover:to-green-500 focus:outline-none focus:ring-4 focus:ring-green-500/50"
                       title="Start Risk Managment Trial">
                        <span class="relative z-10 flex items-center gap-3">
                            Start Now
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                        <!-- Shine effect -->
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-transparent via-white/20 to-transparent opacity-0 group-hover:opacity-100 group-hover:animate-pulse transition-opacity duration-500"></div>
                    </a>

                    <a
                       class="secondary-btn ring-2 group px-8 py-4 glass-effect text-white font-semibold rounded-2xl text-lg transition-all duration-300 secondary-btn-hover animate-slide-right hover:text-green-400 focus:outline-none focus:ring-5 focus:ring-white/20 light: ring-green-500/50"
                       title="Talk to Risk Managment Expert">
                        <span class="flex items-center gap-3 light: text-green-500">
                            <svg
                                class="w-5 h-5 group-hover:scale-110 transition-transform duration-300"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
                                focusable="false"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 5v14l11-7z"
                            />
                        </svg>

                            Watch Demo
                        </span>
                    </a>
                </div>
                </div>
            </div>
        </main>
</template>

<style scoped>
     @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes glow {
            0%, 100% { box-shadow: 0 0 20px rgba(34, 197, 94, 0.3); }
            50% { box-shadow: 0 0 30px rgba(34, 197, 94, 0.5); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-glow {
            animation: glow 3s ease-in-out infinite;
        }

        .animate-fade-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .animate-slide-left {
            animation: slideInLeft 0.8s ease-out 0.2s forwards;
            opacity: 0;
        }

        .animate-slide-right {
            animation: slideInRight 0.8s ease-out 0.4s forwards;
            opacity: 0;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #0f172a 0%, #101620  50%, #334155 100%);
        }



        .primary-btn-hover:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 20px 40px rgba(34, 197, 94, 0.3);
        }

        .secondary-btn-hover:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 20px 40px rgba(34, 197, 94, 0.3);
            background: transparent;
            cursor: pointer;
        }

        .text-gradient {
            background: linear-gradient(135deg, #ffffff 0%, #22c55e 50%, #16a34a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
</style>

