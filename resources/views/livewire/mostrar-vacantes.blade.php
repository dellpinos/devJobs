<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

    @forelse ($vacantes as $vacante)
        <div
            class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-600">
            <div class="space-y-3 ">
                <a href="#" class="text-xl font-bold ">
                    {{ $vacante->titulo }}
                </a>
                <p class=" text-sm text-gray-600 font-bold dark:text-gray-500">{{ $vacante->empresa }}</p>
                <p class=" text-sm text-gray-500 dark:text-gray-400">Último día:
                    {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>

            </div>
            <div class=" flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                <a href="#"
                    class=" bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center dark:bg-slate-600">Candidatos</a>
                <a href="{{ route('vacantes.edit', $vacante->id) }}"
                    class=" bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">Editar</a>
                <button wire:click="$dispatch('mostrarAlerta', {{ $vacante->id }})"
                    class=" bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center dark:bg-red-800">Eliminar</button>
            </div>
        </div>


    @empty
        <p
            class="p-3 text-center flex flex-col justify-between h-full items-center text-sm text-gray-600 dark:text-gray-400">
            No hay vacantes, deberias crear algunas.</p>
    @endforelse

    @if (count($vacantes) > 0)
        <div class=" my-6 mx-5">
            {{ $vacantes->links() }}
        </div>
    @endif


</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('livewire:init', () => {
            
            Livewire.on('mostrarAlerta', vacanteId => {

                Swal.fire({
                    title: "¿Estás Seguro?",
                    text: "No hay vuelta atrás",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, Eliminar"
                }).then((result) => {
                    if (result.isConfirmed) {

                        // Eliminar vacante
                        Livewire.dispatch('eliminarVacante', { vacante: vacanteId });

                        Swal.fire({
                            title: "Eliminada",
                            text: "La Vacante ha sido eliminada.",
                            icon: "success"
                        });
                    }
                });

            });
        });
    </script>
@endpush
