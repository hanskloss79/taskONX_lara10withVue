<script setup>
import { Link, Head } from '@inertiajs/vue3'
import GuestLayout from '@/Layouts/GuestLayout.vue';
defineProps({ clients: Array })
</script>

<template>
  <GuestLayout>
    <Head title="Clients" />
    <div v-for="client in clients" :key="client.id">
      <Link :href="`/clients/${client.id}`">
        {{ client.firstname }}
        {{ client.lastname }}
        {{ client.phone }}
      </Link>
      <div>{{ client.email }}</div>
    </div>
  </GuestLayout>
</template>