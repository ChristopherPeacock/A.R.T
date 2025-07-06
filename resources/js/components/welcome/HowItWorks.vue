<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

import ContentOne from '@/assets/content-1-picture.png'
import RecoverPlan from '@/assets/recoveryPlan.png'
import Simulate from '@/assets/simulate.png'
import Imact from '@/assets/Impact.png'

const currentSlide = ref(0)
const isAutoPlay = ref(true)
const autoPlayInterval = ref(null)


const features = [
  {
    id: 'dependencies',
    title: 'Map Critical Dependencies for True Operational Resilience',
    subtitle: 'Uncover hidden risks, single points of failure, and supply chain vulnerabilities within your organization.',
    description:
      "With Invenode's Operational Resilience Planner, gain complete visibility into how your business processes, technologies, suppliers, and teams are interconnected. By identifying critical dependencies and system weaknesses often missed by outdated risk management tools, you can proactively prevent disruptions, minimize downtime, and build a more resilient, future-proof operation.",
    icon: ContentOne,
    benefits: [
      'Complete dependency visibility - Get a clear, interactive view of how your processes, technologies, suppliers, and teams are interconnected—eliminating blind spots across your organisation.',
      'Risk cascade analysis - Identify how failures in one area can ripple through your operations, helping you predict and prevent cascading disruptions before they occur',
      'Critical path identification - Pinpoint the most essential systems and processes your operations rely on, enabling smarter investment in protection and contingency planning',
    ],
  },
  {
    id: 'impact',
    title: 'Quantify the True Business Impact of Disruptions',
    subtitle: 'Stop guessing, start making data-driven decisions',
    description:
      'Invenode’s Operational Resilience Planner moves beyond outdated qualitative risk assessments by providing precise, data-backed calculations of how disruptions ripple through your critical services, supply chains, and operations. Understand the real financial, operational, and reputational cost of downtime or system failure. With clear visibility into the impact of disruptions, you can confidently prioritise vulnerabilities, strengthen weak points, and invest resources where they deliver the greatest resilience and ROI.',
    icon: Imact,
    benefits: [
      'Financial Impact Modeling - Accurately calculate the potential financial losses associated with system failures, service disruptions, or supply chain breakdowns.',
      'Operational Disruption Metrics - Gain measurable insights into how disruptions affect your critical operations, allowing for targeted mitigation and contingency planning.',
      'Recovery Time Estimation - Understand realistic recovery timelines for different types of disruptions, so you can reduce downtime and strengthen your overall resilience posture.',
    ],
  },
  {
    id: 'scenarios',
    title: 'Simulate Scenarios',
    subtitle: 'Test Your Resilience',
    description:
      'Run comprehensive what-if scenarios to understand how different disruptions could affect your operations. Prepare for the unexpected with confidence.',
    icon: Simulate,
    benefits: [
      'Multi-variable scenario testing - Simulate complex, real-world disruptions across your operations, including supplier failures, cyber incidents, and system outages—all in one platform.',
      'Predictive risk modeling - Visualise the potential ripple effects of different disruption scenarios, so you can identify weak points and hidden vulnerabilities before they impact your business.',
      'Response strategy validation - Stress-test your recovery plans and incident response strategies to ensure they hold up under realistic conditions, empowering your teams to respond faster and more effectively.',
    ],
  },
  {
    id: 'plans',
    title: 'Create Resilience Plans',
    subtitle: 'Actionable Response Strategies',
    description:
      'Generate comprehensive resilience plans based on your unique risk profile. From prevention to recovery, ensure your organization is prepared for any disruption.',
    icon: RecoverPlan,
    benefits: [
      "Automated plan generation - Instantly create tailored resilience and recovery plans based on your organisation's specific risks, critical dependencies, and operational structure.",
      "Stakeholder communication templates - Templates to streamline communication with key stakeholders during incidents.",
      "Continuous improvement tracking - Track plan performance, identify gaps, and evolve your resilience strategies over time to keep pace with changing risks and business needs.",
    ],
  },
]

const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % features.length
}

const prevSlide = () => {
  currentSlide.value = currentSlide.value === 0 ? features.length - 1 : currentSlide.value - 1
}

const goToSlide = (index) => {
  currentSlide.value = index
}

const startAutoPlay = () => {
  if (autoPlayInterval.value) clearInterval(autoPlayInterval.value)
  autoPlayInterval.value = setInterval(nextSlide, 5000)
}

const stopAutoPlay = () => {
  if (autoPlayInterval.value) {
    clearInterval(autoPlayInterval.value)
    autoPlayInterval.value = null
  }
}

const toggleAutoPlay = () => {
  isAutoPlay.value = !isAutoPlay.value
  if (isAutoPlay.value) {
    startAutoPlay()
  } else {
    stopAutoPlay()
  }
}

onMounted(() => {
  startAutoPlay()
})

onUnmounted(() => {
  stopAutoPlay()
})
</script>

<template>
  <section id="features" class="relative py-20 dark:bg-gray-900/50 backdrop-blur-sm">
    <div class="container mx-auto px-6">
      <!-- Header -->
      <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
          Strengthen Your Operational Resilience with Invenode
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
          Discover how our advanced
          <strong class="text-green-600 dark:text-green-400">Operational Resilience Planner</strong> helps
          organizations identify hidden risks, improve supply chain resilience, and build business continuity into every
          layer of your operations.
        </p>
      </div>

      <!-- Feature Slideshow -->
      <div class="relative mx-auto my-auto">
        <div class="relative bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden min-h-[600px] lg:min-h-[700px]">
          <!-- Slides Wrapper -->
          <div class="relative my-75">
            <div
              v-for="(feature, index) in features"
              :key="feature.id"
              class="absolute inset-0 transition-all duration-700 ease-in-out"
              :class="index === currentSlide ? 'opacity-100 translate-x-0 z-10' : 'opacity-0 translate-x-full z-0'"
            >
              <!-- Slide Content -->
              <div class="flex flex-col lg:flex-row h-full">
                <!-- Content Side -->
                <div class="flex-1 p-8 lg:p-12 flex flex-col justify-center pl-12 lg:pl-24">
                  <div class="mb-6">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">{{ feature.title }}</h2>
                    <h3 class="text-xl text-green-600 dark:text-green-400 font-semibold mb-4">{{ feature.subtitle }}</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-6">{{ feature.description }}</p>
                  </div>

                  <!-- Benefits -->
                  <div class="space-y-3">
                    <h4 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wide">Key Benefits</h4>
                    <div class="grid gap-2">
                      <div
                        v-for="benefit in feature.benefits"
                        :key="benefit"
                        class="flex items-center text-gray-700 dark:text-gray-300"
                      >
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                        {{ benefit }}
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Visual Side -->
               <div class="flex-1 bg-gradient-to-br from-green-50 to-blue-50 dark:from-green-900/20 dark:to-blue-900/20 flex items-center justify-center p-8">
                    <div class="text-center">
                        <img :src="feature.icon" alt="Feature Image" class="w-[1500px] h-96 mx-auto mb-4 opacity-80" />
                        <div class="text-2xl font-bold text-gray-600 dark:text-gray-400">{{ feature.title }}</div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide Indicators -->
        <div class="flex justify-center mt-8 gap-3">
          <button
            v-for="(feature, index) in features"
            :key="feature.id"
            @click="goToSlide(index)"
            :class="[
              'px-4 py-2 rounded-full text-sm font-medium transition-all duration-200',
              index === currentSlide
                ? 'bg-green-600 text-white shadow-lg transform scale-105'
                : 'bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600',
            ]"
          >
            {{ feature.title }}
          </button>
        </div>

        <!-- Auto-play Control -->
        <div class="flex justify-center mt-6">
          <button
            @click="toggleAutoPlay"
            :class="[
              'flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200',
              isAutoPlay
                ? 'bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400'
                : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300',
            ]"
          >
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path v-if="isAutoPlay" d="M6 4h4v16H6V4zm8 0h4v16h-4V4z" />
              <path v-else d="M8 5v14l11-7z" />
            </svg>
            {{ isAutoPlay ? 'Pause' : 'Play' }} Auto-advance
          </button>
        </div>
      </div>
    </div>
  </section>
</template>
