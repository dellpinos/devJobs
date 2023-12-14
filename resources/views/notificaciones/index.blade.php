<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <h2 class="text-2xl font-bold text-center sm:my-10">Nuevas Notificaciones</h2>

                    @forelse ( $notificaciones as $notificacion)
                        <div class=" p-5 border border-gray-200 dark:border-gray-700 lg:flex lg:justify-between lg:items-center mb-2">
                            <div>
                                <p>Tienes un nuevo candidato en: <span class=" font-bold">{{$notificacion->data['nombre_vacante']}}</span></p>
                                <p><span class=" font-bold">{{$notificacion->created_at->diffForHumans()}}</span></p>
                            </div>
                            <div class=" mt-5 lg:mt-0 flex justify-center">
                                <a href="#" class=" bg-blue-800 hover:bg-blue-700 p-3 text-sm uppercase font-bold text-white rounded-lg ">Ver Candidatos</a>
                            </div>
                        </div>

                    @empty
                        <p class=" text-center text-gray-600">No hay nuevas notificaciones.</p>
                    @endforelse

                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <h2 class="text-2xl font-bold text-center sm:my-10">Historial de Notificaciones</h2>

                    @forelse ( $antiguas_notificaciones as $antigua_notificacion)
                        <div class="text-gray-300 dark:text-gray-600 p-5 border border-gray-200 dark:border-gray-700 lg:flex lg:justify-between lg:items-center mb-2">
                            <div>
                                <p>Tienes un nuevo candidato en: <span class=" font-bold">{{$antigua_notificacion->data['nombre_vacante']}}</span></p>
                                <p><span class=" font-bold">{{$antigua_notificacion->created_at->diffForHumans()}}</span></p>
                            </div>
                        </div>

                    @empty
                        <p class=" text-center text-gray-600">No hay notificaciones.</p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
