<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import "bootstrap/dist/css/bootstrap.min.css";
defineProps({ clients: Array })
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                        <table id="tableComponent" class="table table-bordered">
                        <thead>
                                <tr>
                                    <th>Nr klienta</th>
                                    <th>Imię</th>
                                    <th>Nazwisko</th>
                                    <th>Email</th>
                                </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through the list get the each student data -->
                            <tr v-for="client in clients" :key='client.id'>
                                <td>{{client.id}}</td>
                                <td>{{client.firstname}}</td>
                                <td>{{client.lastname}}</td>
                                <td>{{client.email}}</td>
                                <td>{{client.phone}}</td>
                            </tr>
                        </tbody>
                        </table> 

                    </div>
                </div>
            </div>

    </AuthenticatedLayout>
</template>
