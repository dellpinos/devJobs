<div class="bg-gray-100 dark:bg-gray-800 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 dark:text-gray-100 text-center font-extrabold my-5">Buscar y Filtrar Vacantes</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="leerDatosFormulario">
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 dark:text-gray-300 uppercase font-bold "
                        for="termino">Buscador
                    </label>
                    <input 
                        id="termino"
                        type="text"
                        placeholder="Laravel, JavaScript, React, etc."
                        wire:model.live="termino"
                        class="rounded-md shadow-sm border-gray-300 dark:border-gray-600 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 dark:text-gray-300 uppercase font-bold">Categoría</label>
                    <select wire:model.live="categoria" class="border-gray-300 dark:border-gray-600 p-2 w-full">
                        <option>--Seleccione--</option>
            
                        @foreach ($categorias as $categoria )
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 dark:text-gray-300 uppercase font-bold">Salario Mensual</label>
                    <select wire:model.live="salario" class="border-gray-300 p-2 w-full">
                        <option>-- Seleccione --</option>
                        @foreach ($salarios as $salario)
                            <option value="{{ $salario->id }}">{{$salario->salario}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input 
                    type="submit"
                    class="bg-blue-800 hover:bg-blue-700 p-3 text-sm uppercase font-bold text-white rounded-lg block text-center w-32 cursor-pointer"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>