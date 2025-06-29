<script setup lang="ts">


</script>

<template>

    <div class="bg-slate-50 dark:bg-gray-900 transition-colors duration-500">
         <section class="final-cta relative py-24 overflow-hidden gradient-bg">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Animated gradient orbs -->
            <div class="absolute top-20 left-20 w-72 h-72 bg-green-500/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-float" style="animation-delay: -2s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-purple-500/20 rounded-full blur-3xl animate-float" style="animation-delay: -4s;"></div>

            <!-- Grid pattern overlay -->
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>

        <!-- Top fade overlay -->
       
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Main heading -->
                <h2 class="text-5xl md:text-6xl font-bold mb-8 text-gradient animate-fade-up">
                    Ready to Transform Your Risk Management?
                </h2>

                <!-- Description -->
                <p class="text-xl md:text-2xl text-white/80 mb-12 max-w-3xl mx-auto leading-relaxed animate-fade-up" style="animation-delay: 0.2s;">
                    Join hundreds of organizations using <span class="text-green-400 font-semibold">Invenode</span> to build more resilient operations through interconnected risk intelligence. Start your free trial today.
                </p>

                <!-- CTA Buttons -->
                <div class="hero-buttons flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="/trial"
                       class="primary-btn group relative px-8 py-4 bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold rounded-2xl text-lg transition-all duration-300 primary-btn-hover animate-glow animate-slide-left hover:from-green-400 hover:to-green-500 focus:outline-none focus:ring-4 focus:ring-green-500/50"
                       title="Start Free 30-Day Trial">
                        <span class="relative z-10 flex items-center gap-3">
                            Start Free Trial
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                        <!-- Shine effect -->
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-transparent via-white/20 to-transparent opacity-0 group-hover:opacity-100 group-hover:animate-pulse transition-opacity duration-500"></div>
                    </a>

                    <a href="/contact"
                       class="secondary-btn group px-8 py-4 glass-effect text-white font-semibold rounded-2xl text-lg transition-all duration-300 secondary-btn-hover animate-slide-right hover:text-green-400 focus:outline-none focus:ring-4 focus:ring-white/20"
                       title="Talk to Risk Management Expert">
                        <span class="flex items-center gap-3">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            Talk to Expert
                        </span>
                    </a>
                </div>

                <!-- Trust indicators -->
                <div class="mt-16 animate-fade-up" style="animation-delay: 0.6s;">
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-8 text-white/60">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">30-day free trial</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">No credit card required</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">Setup in 5 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom fade overlay -->


    </section>
    </div>
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
            background: rgba(255, 255, 255, 0.15);
        }

        .text-gradient {
            background: linear-gradient(135deg, #ffffff 0%, #22c55e 50%, #16a34a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
</style>
