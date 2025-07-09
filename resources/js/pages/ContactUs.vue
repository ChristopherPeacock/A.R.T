<script setup>
import { Head, Link, } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import NavBar from '@/components/navBar/NavBar.vue';
import { reactive } from 'vue';
import axios from 'axios';

const props = defineProps({
    teamName: {
        type: String
    },
});

const form = reactive({
  name: '',
  email: '',
  companyName: '',
  message: ''
});

function submitForm() {
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  fetch('/contact', {

    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    'X-CSRF-TOKEN': csrfToken,
      'Accept': 'application/json'
    },
    body: JSON.stringify({
      name: form.name,
      email: form.email,
      companyName: form.companyName,
      message: form.message
    })
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json(); // assuming you're returning JSON
  })
  .then(data => {
    console.log('Success:', data);
    // Optionally reset form or show success message
  })
  .catch((error) => {
    console.error('Error:', error);
  });
}



</script>
<template>
    <Head title="Contact us">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class=" flex flex-col min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 dark:from-gray-900 dark:via-slate-900 dark:to-slate-900 transition-all duration-500">
        <NavBar :teamName="props.teamName" @toggleDarkMode="toggleDarkMode" :isDark="isDark" />
       <div class="container mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 gap-12">

  <!-- Contact Form -->
    <div>
            <h3 class="text-xl font-semibold mb-6 text-gray-900 dark:text-white">Send Us Your Details</h3>
        <form @submit.prevent="submitForm" class="space-y-4">
            <div>
                <label for="name" class="block text-gray-700 mb-2 dark:text-gray-300">Name</label>
                <input type="text" id="name" name="name" v-model="form.name" required
                class="w-full p-3 rounded bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-800 dark:text-white" />
            </div>

            <div>
                <label for="email" class="block text-gray-700 mb-2 dark:text-gray-300">Email</label>
                <input type="email" id="email" name="email" v-model="form.email" required
                class="w-full p-3 rounded bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-800 dark:text-white" />
            </div>

            <div>
                <label for="company" class="block text-gray-700 mb-2 dark:text-gray-300">Company Name</label>
                <input type="text" id="company" name="company" v-model="form.companyName" required
                class="w-full p-3 rounded bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-800 dark:text-white" />
            </div>

            <div>
                <label for="message" class="block text-gray-700 mb-2 dark:text-gray-300">Message</label>
                <textarea id="message" name="message" rows="4" v-model="form.message" required
                class="w-full p-3 rounded bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-800 dark:text-white"></textarea>
            </div>

            <button type="submit" @click="submitForm"
                class="bg-green-600 hover:bg-green-400 text-white px-6 py-3 rounded-lg transition-all">
                Send Message
            </button>
        </form>
    </div>

  <!-- Contact Details & Map -->
  <div class="space-y-8">

    <!-- Contact Details -->
    <div>
      <h3 class="text-xl font-semibold mb-6 text-gray-900, dark:text-white">Contact Details</h3>
      <div class="space-y-4 text-gray-900 text-sm dark:text-gray-300" >
        <p><strong>Address:</strong><br>Alacrity House, Moderator Wharf, Kingsway, Newport, NP20 1HG, United Kingdom</p>
        <p><strong>Phone:</strong><br>+44 (0) 1633 123456</p>
        <p><strong>Email:</strong><br>info@company.com</p>
        <p><strong>Hours:</strong><br>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat - Sun: Closed</p>
      </div>
    </div>

    <!-- Map -->
    <div>
      <h3 class="text-xl font-semibold mb-6 text-white">Find Us</h3>
      <div class="rounded-lg overflow-hidden shadow-lg">
        <iframe
          src="https://maps.google.com/maps?q=Alacrity+House,+Moderator+Wharf,+Kingsway,+Newport,+NP20+1HG,+UK&t=&z=15&ie=UTF8&iwloc=&output=embed"
          width="100%" height="300" style="border:0;" allowfullscreen loading="lazy" title="Office Location Map">
        </iframe>
      </div>
    </div>
  </div>

</div>

    </div>

</template>
