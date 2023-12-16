<div>

    <div class="py-12">

        <livewire:filtrar-vacantes />
        <div class=" max-w-7xl mx-auto ">
            <h3 class=" font-extrabold text-4xl text-gray-700 mb-12 mt-12 dark:text-gray-300">Nuestras Vacantes Disponibles</h3>

            <div class=" bg-white dark:bg-gray-800 rounded-ls p-6 divide-y divide-gray-200 dark:divide-gray-600">
                @forelse ( $vacantes as $vacante )
                    <div class=" md:flex md:justify-between md:items-center py-5">
                        <div class=" md:flex-1">
                            <a href="{{ route('vacantes.show', $vacante->id)}}" class=" text-3xl font-extrabold text-gray-600 dark:text-gray-100">{{ $vacante->titulo }}</a>
                            <p class="text-base text-gray-600 mb-1 dark:text-gray-100">{{ $vacante->empresa }}</p>
                            <p class="text-xs font-bold text-gray-600 mb-1 dark:text-gray-100">{{ $vacante->categoria->categoria }}</p>
                            <p class="text-base text-gray-600 mb-1 dark:text-gray-100">{{ $vacante->salario->salario }}</p>
                            <p class="font-bold text-xs text-gray-600 mb-3 dark:text-gray-100">Último día para postularse: <span class=" font-normal">{{$vacante->ultimo_dia->format('d/m/Y')}}</span></p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a href="{{ route('vacantes.show', $vacante->id)}}" class="bg-blue-800 hover:bg-blue-700 p-3 text-sm uppercase font-bold text-white rounded-lg block text-center">Ver Vacante</a>
                        </div>
                    </div>
                @empty
                    <p class=" p-3 text-center text-sm text-gray-600 dark:text-gray-200">Aún no hay vacantes.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
