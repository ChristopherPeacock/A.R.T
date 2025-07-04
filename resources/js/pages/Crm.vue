<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const jsondata = ref([
  { user: 'hc', name: 'Harry Cole', phone: '1-415-2345678', gender: 'M', age: 25, birth: '1997-07-01' },
  { user: 'sm', name: 'Simon Minolta', phone: '1-123-7675682', gender: 'M', age: 20, birth: '1999-11-12' },
  { user: 'ra', name: 'Raymond Atom', phone: '1-456-9981212', gender: 'M', age: 19, birth: '2000-06-11' },
  { user: 'ag', name: 'Mary George', phone: '1-556-1245684', gender: 'F', age: 22, birth: '2002-08-01' },
  { user: 'kl', name: 'Kenny Linus', phone: '1-891-2345685', gender: 'M', age: 29, birth: '1990-09-01' }
]);
</script>

<template>
  <Head title="Edit Pages" />

  <AppLayout>
    <div class="excel-wrapper">
      <vue-excel-editor v-model="jsondata">
        <vue-excel-column field="user" label="User ID" type="string" width="120px" />
        <vue-excel-column field="name" label="Name" type="string" width="200px" />
        <vue-excel-column field="phone" label="Contact" type="string" width="180px" />
        <vue-excel-column field="gender" label="Gender" type="select" width="80px" :options="['F', 'M', 'U']" />
        <vue-excel-column field="age" label="Age" type="number" width="100px" />
        <vue-excel-column field="birth" label="Date Of Birth" type="date" width="120px" />
      </vue-excel-editor>
    </div>
  </AppLayout>
</template>

<style scoped>
.excel-wrapper {
  padding: 1rem;
}

.vue-excel-editor {
  font-size: 1.25rem; /* Make text bigger */
  width: 100%;
  width: auto;
}

.vue-excel-editor .excel-table {
  width: 100%;
  border-collapse: collapse;
}

.vue-excel-editor .excel-table th,
.vue-excel-editor .excel-table td {
  padding: 1rem;
  font-size: 1.25rem;
  height: rem;
}

/* Optional: Dark mode support */
.dark .vue-excel-editor {
  background-color: #1f2937; /* Tailwind's gray-800 */
  color: #000000; /* Light text */
}

.dark .vue-excel-editor .excel-table th,
.dark .vue-excel-editor .excel-table td {
  background-color: #374151; /* Tailwind's gray-700 */
  color: #08233f;
  border-color: #030005; /* Tailwind's gray-600 */
}


</style>
