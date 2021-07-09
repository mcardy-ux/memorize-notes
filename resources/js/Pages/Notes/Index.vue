<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">

                <div class="md:col-span-1">
                    <div class="p3-4 sm:px0">
                        <h3 class="text-lg text-gray-900">Listado de Notas</h3>
                        <p class="text-sm text-gray-600">Toma el registro correcto y selecciona la funcion</p>

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

    export default {
        components: {
            AppLayout,
            Welcome,
        },
    }
</script>
