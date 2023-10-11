<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
// import {Head, Link, useForm} from '@inertiajs/vue3';
import {ref} from 'vue'
import {useField, useForm} from 'vee-validate'

const {handleSubmit, handleReset} = useForm({
    validationSchema: {
        name(value) {
            if (value?.length >= 2) return true

            return 'Name needs to be at least 2 characters.'
        },
        phone(value) {
            if (value?.length > 9 && /[0-9-]+/.test(value)) return true

            return 'Phone number needs to be at least 9 digits.'
        },
        email(value) {
            if (/^[a-z.-]+@[a-z.-]+\.[a-z]+$/i.test(value)) return true

            return 'Must be a valid e-mail.'
        },
        select(value) {
            if (value) return true

            return 'Select an item.'
        },
        checkbox(value) {
            if (value === '1') return true

            return 'Must be checked.'
        },
    },
})
const name = useField('name')
const phone = useField('phone')
const email = useField('email')
const select = useField('select')
const checkbox = useField('checkbox')

const items = ref([
    'Item 1',
    'Item 2',
    'Item 3',
    'Item 4',
])

const submit = handleSubmit(values => {
    alert(JSON.stringify(values, null, 2))
})
// const submit = () => {
//     form.post(route('login'), {
//         onFinish: () => form.reset('password'),
//     });
// };
</script>

<template>
    <GuestLayout>
        <!--        <Head title="Log in"/>-->
        <!--        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">-->
        <!--            {{ status }}-->
        <!--        </div>-->

        <v-alert
            v-model="alert"
            border="start"
            variant="tonal"
            closable
            close-label="Close Alert"
            color="deep-purple-accent-4"
            title="Closable Alert"
        >hi
        </v-alert>
        <v-text-field label="Label"></v-text-field>
    </GuestLayout>
</template>

<script>
export default {
    data: () => ({
      alert: true,
    }),
  }
</script>
