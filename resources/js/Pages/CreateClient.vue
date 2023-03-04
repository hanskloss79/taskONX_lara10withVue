<script setup>
import "bootstrap/dist/css/bootstrap.min.css";
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    firstname: '',
    lastname: '',
    email: '',
    phone: '',
    birth_date: ''
});

const submit = () => {
    form.post(route('clients.store'), );
};
</script>

<template>
    <GuestLayout>
        <Head title="Dodaj dane nowego klienta" />
                <div class="text-center mb-2">
                    <h4>Wprowadzanie danych klienta do bazy</h4>
                </div>
                
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="firstname" value="Imię" />

                <TextInput
                    id="firstname"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.firstname"
                    required
                    autofocus
                    autocomplete="firstname"
                />

                <InputError class="mt-2" :message="form.errors.firstname" />
            </div>

            <div class="mt-4">
                <InputLabel for="lastname" value="Nazwisko" />

                <TextInput
                    id="lastname"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.lastname"
                    required
                    autofocus
                    autocomplete="lastname"
                />

                <InputError class="mt-2" :message="form.errors.lastname" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email kontaktowy:" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="email"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="phone" value="Telefon" />

                <TextInput
                    id="phone"
                    type="number"
                    class="mt-1 block w-full"
                    v-model="form.phone"
                    required
                    autocomplete="phone"
                />

                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div class="mt-4">
                <InputLabel for="birth_date" value="Data urodzenia" />

                <TextInput
                    id="birth_date"
                    type="date"
                    class="mt-1 block w-full"
                    v-model="form.birth_date"
                    required
                    autocomplete="birth_date"
                />

                <InputError class="mt-2" :message="form.errors.birth_date" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <div class="pull-right">
                    <a class="btn btn-primary btn-sm" href="#clientsList">Powrót do listy klientów</a>
                </div>
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Dodaj dane klienta
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
