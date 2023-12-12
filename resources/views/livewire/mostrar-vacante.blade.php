<div class=" p-10">
    <div class=" mb-5">
        <h3 class=" font-bold text-3xl text-gray-800 dark:text-gray-200 my-3">{{ $vacante->titulo }}</h3>

        <div class=" md:grid md:grid-cols-2 bg-gray-50 dark:bg-gray-700 p-4 my-10">
            <p class=" font-bold text-sm uppercase text-gray-800 dark:text-gray-200 my-3">Empresa: <span
                    class=" normal-case font-normal">{{ $vacante->empresa }}</span></p>
            <p class=" font-bold text-sm uppercase text-gray-800 dark:text-gray-200 my-3">Último día para postularse:
                <span class=" normal-case font-normal">{{ $vacante->ultimo_dia->toFormattedDateString() }}</span>
            </p>
            <p class=" font-bold text-sm uppercase text-gray-800 dark:text-gray-200 my-3">Categoría: <span
                    class=" normal-case font-normal">{{ $vacante->categoria->categoria }}</span></p>
            <p class=" font-bold text-sm uppercase text-gray-800 dark:text-gray-200 my-3">Salario: <span
                    class=" normal-case font-normal">{{ $vacante->salario->salario }}</span></p>

        </div>

    </div>
    <div class=" md:grid md:grid-cols-6 gap-4">
        <div class=" md:col-span-2">
            <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}"
                alt="{{ 'Imagen Vacante ' . $vacante->titulo }}">
        </div>
        <div class=" md:col-span-4">
            <h2 class=" text-2xl font-bold mb-5 dark:text-gray-200">Decripción del puesto</h2>
            <p class=" dark:text-gray-200">{{ $vacante->descripcion }}</p>
        </div>
    </div>

    @guest
        <div
            class=" mt-5 bg-gray-50 dark:bg-gray-700 border border-dashed border-gray-600 dark:border-gray-300 p-5 text-center text-gray-800 dark:text-gray-200">
            <p>¿Deseas aplicar a esta vacante? <a href="{{ route('register') }}" class="font-bold text-blue-500">Crea una
                    cuenta y aplica a todas las vacantes que desees</a></p>
        </div>
    @endguest

    @cannot('create', App\Models\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante" />
    @endcannot

</div>
