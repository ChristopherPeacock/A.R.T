<script setup lang="ts">
import { ref } from 'vue'

const communityMembers = ref([
  { id: 1, name: 'Mastra', role: 'Core Support', image: '/images/mastra.png' },
  { id: 2, name: 'CyberSafe', role: 'Customer', image: '/images/cybersafe.png' },
  { id: 3, name: 'FireComp', role: 'Customer', image: '/images/firecomp.png' },
  { id: 4, name: 'DevHub', role: 'Support Partner', image: '/images/devhub.png' }
])

let currentIndex = ref(0)

const next = () => {
  currentIndex.value = (currentIndex.value + 1) % communityMembers.value.length
}

const prev = () => {
  currentIndex.value =
    (currentIndex.value - 1 + communityMembers.value.length) %
    communityMembers.value.length
}
</script>

<template>
  <div class="flex flex-col items-center justify-center min-h-screen p-8 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-all duration-500">
    <h1 class="text-4xl font-bold mb-8">Invenode's Community</h1>

    <div class="relative w-full max-w-xl">
      <!-- Carousel Item -->
      <div class="flex flex-col items-center p-6 border rounded-2xl shadow-lg bg-white dark:bg-gray-800 transition-all duration-500">
        <img
          :src="communityMembers[currentIndex].image" 
          :alt="communityMembers[currentIndex].name"
          class="w-32 h-32 object-cover rounded-full mb-4"
        />
        <h2 class="text-2xl font-semibold">{{ communityMembers[currentIndex].name }}</h2>
        <p class="text-gray-600 dark:text-gray-300">{{ communityMembers[currentIndex].role }}</p>
      </div>

      <!-- Controls -->
      <div class="flex justify-between mt-6">
        <button
          @click="prev"
          class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded hover:bg-gray-300 dark:hover:bg-gray-600 transition"
        >
          Previous
        </button>
        <button
          @click="next"
          class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded hover:bg-gray-300 dark:hover:bg-gray-600 transition"
        >
          Next
        </button>
      </div>
    </div>
  </div>
</template>
