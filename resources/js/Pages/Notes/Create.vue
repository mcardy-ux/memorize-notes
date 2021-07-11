<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Crear nueva Nota 
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                <!-- Columna de la izquierda -->
                <div class="md:col-span-1">
                    <div class="p3-4 sm:px0">
                        <h3 class="text-lg text-gray-900">Crear una Nota</h3>
                        <p class="text-sm text-gray-600"> Debes diligenciar todos los campos</p>
                    </div>
                </div>
                <div class="md:col-span-2 mt-5 md:mt-0">
                    <div class="shadow bg-white md:rounded-md p-4">
                        <form @submit.prevent="submit">
                            <label class="block font-medium text-sm text-gray-700">
                                Resumen
                            </label>
                            <textarea 
                            class="form-input w-full rounded-md shadow-sm"
                            v-model="form.excerpt">
                            </textarea>
                             <label class="block font-medium text-sm text-gray-700">
                                Contenido
                            </label>
                            <textarea 
                            class="form-input w-full rounded-md shadow-sm "
                            v-model="form.content"
                            rows="8">
                            </textarea>
                            <hr>
                            <br>
                            <div class="flex flex-wrap">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 border-2 rounded">Crear</button>
                                <inertia-link :href="route('notes.index')" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-3 px-4 border-2 rounded">
                                    Volver
                                </inertia-link>
                            </div>
                        </form>


                    </div>
                </div>


                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
import Label from '../../Jetstream/Label.vue'

    export default {
        components: {
            AppLayout,
            Welcome,
            Label,
        },
        
        data() {
            return {
                form: {
                    excerpt: '',
                    content: '',
                }
            }
        },
        methods:{
            submit() {
                this.$inertia.post(this.route('notes.store'),this.form)
            }
        }
    }
</script>
