<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
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
                    <div class="p-6 text-gray-900">Jesteś zalogowany!</div>
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="text-center">
                                        <h2>Baza danych klientów</h2>
                                    </div>
                                    <div class="pull-right mb-2">
                                        <a class="btn btn-success" href="/clients/create">Dodaj klienta</a>
                                    </div>
                                </div>
                            </div>
                        <table id="tableComponent" class="table table-bordered">
                        <thead>
                                <tr>
                                    <th>Nr klienta</th>
                                    <th>Imię</th>
                                    <th>Nazwisko</th>
                                    <th>Email</th>
                                    <th>Akcje</th>
                                </tr>
                        </thead>
                        <tbody>
                            <tr v-for="client in clients" :key='client.id'>
                                <td>{{client.id}}</td>
                                <td>{{client.firstname}}</td>
                                <td>{{client.lastname}}</td>
                                <td>{{client.email}}</td>
                                <td>
                                    <a class="btn btn-warning" :href="/clients/ + client.id" >Szczegóły</a>
                                </td>
                            </tr>
                        </tbody>
                        </table> 

                    </div>
                </div>
            </div>

    </AuthenticatedLayout>
</template>
