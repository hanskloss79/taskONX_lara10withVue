<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CreateClient from '@/Pages/CreateClient.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
import { reactive, onMounted } from 'vue';
import "bootstrap/dist/css/bootstrap.min.css";
import * as bootstrap from 'bootstrap/dist/js/bootstrap';


defineProps({ clients: Array })


const state = reactive({
    modalClientShow: null,
})

onMounted(() => {
    state.modalClientShow = new bootstrap.Modal('#modalClientShow', {});
    modalClientShow.addEventListener('show.bs.modal', function (event) {
        console.log(event.relatedTarget);
        var detailsButton = event.relatedTarget;
        let actualClientNumber = detailsButton.getAttribute('clientNumber');
        let actualClientFirstname = detailsButton.getAttribute('clientFirstname');
        let actualClientLastname = detailsButton.getAttribute('clientLastname');
        let actualClientEmail = detailsButton.getAttribute('clientEmail');
        let actualClientPhone = detailsButton.getAttribute('clientPhone');
        let actualClientBirthdate = detailsButton.getAttribute('clientBirthdate');
        console.log(actualClientNumber);
        let modalHeader = document.getElementById('modalClientShowLabel');
        modalHeader.innerHTML = 'Dane klienta nr ' + actualClientNumber;
        let tableData = document.getElementById('clientDetailsTable');
        //let actualClient = clientsList;
        //console.log(actualClient);
        let clientFirstname = document.getElementById('clientFirstname');
        clientFirstname.innerHTML = actualClientFirstname;
        let clientLastname = document.getElementById('clientLastname');
        clientLastname.innerHTML = actualClientLastname;
        let clientEmail = document.getElementById('clientEmail');
        clientEmail.innerHTML = actualClientEmail;
        let clientPhone = document.getElementById('clientPhone');
        clientPhone.innerHTML = actualClientPhone;
        let clientBirthdate = document.getElementById('clientBirthdate');
        clientBirthdate.innerHTML = actualClientBirthdate;
    });

})


function openModal() {
    state.modalClientShow.show();


}

function closeModal() {
    state.modalClientShow.hide()
}

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout id="clientsList">

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <!-- modal to show or edit existing clients data -->
        <div class="modal fade" id="modalClientShow" tabindex="-1" aria-labelledby="modalClientShowLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalClientShowLabel">Dane klienta nr </h1>
                        <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table id="clientDetailsTable" class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Imię</th>
                                    <td id="clientFirstname"></td>
                                </tr>
                                <tr>
                                    <th>Nazwisko</th>
                                    <td id="clientLastname"></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td id="clientEmail"></td>
                                </tr>
                                <tr>
                                    <th>Telefon</th>
                                    <td id="clientPhone"></td>
                                </tr>
                                <tr>
                                    <th>Data urodzenia</th>
                                    <td id="clientBirthdate"></td>
                                </tr>
                            </tbody>
                                
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="closeModal">Zamknij</button>
                    </div>
                </div>
            </div>
        </div>

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
                                <a class="btn btn-success" href="#addClient">Dodaj klienta</a>
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
                                <td>{{ client.id }}</td>
                                <td>{{ client.firstname }}</td>
                                <td>{{ client.lastname }}</td>
                                <td>{{ client.email }}</td>
                                <td>
                                    <button id="detailsButton" type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        :clientNumber='client.id' :clientFirstname='client.firstname' 
                                        :clientLastname='client.lastname' :clientEmail='client.email'
                                        :clientPhone='client.phone' :clientBirthdate='client.birth_date'
                                        data-bs-target="#modalClientShow" @click="openModal">
                                        Szczegóły
                                    </button>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </AuthenticatedLayout>
    <CreateClient id="addClient">

    </CreateClient>
</template>
