<script setup lang="ts">
import NavFooter from '@/components/NavFooter.vue';
import NavMain from '@/components/NavMain.vue';
import NavUser from '@/components/NavUser.vue';
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/vue3';
import { Binoculars, Pencil, Apple, BookOpen, Folder, LayoutGrid } from 'lucide-vue-next';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import AppLogo from '@/components/AppLogo.vue';

</script>

<template>
  <Head title="Edit Pages" />

  <AppLayout>
    <div class="flex h-full flex-col items-center justify-center">
      <h1 class="text-2xl font-bold mb-4">CRM</h1>
      <p class="text-gray-600 mb-8">This is your CRM content.</p>
      <div class="w-64 h-64 bg-gray-200 rounded-lg flex items-center justify-center">
        <span class="text-gray-500">CRM UI Goes Here</span>
      </div>
    </div>
  </AppLayout>
</template>
