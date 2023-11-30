<form action="" class="md:w-1/2 space-y-5">

    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
            placeholder="Titulo Vacante" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />

        <select name="salario" id="salario" class="my-1 rounded-md shadow-sm border-gray-300 focus:border-blue-600 w-full dark:text-gray-300 dark:bg-gray-900">

            <!-- Los option se leen desde la DB -->
            <option disabled selected>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select name="categoria" id="categoria" class="my-1 rounded-md shadow-sm border-gray-300 focus:border-blue-600 w-full dark:text-gray-300 dark:bg-gray-900">

            <!-- Los option se leen desde la DB -->
        </select>

        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify" />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')"
             />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea class="my-1 rounded-md shadow-sm border-gray-300 focus:border-blue-600 w-full dark:text-gray-300 dark:bg-gray-900 h-72" name="descripcion" id="descripcion" placeholder="Descripción general del puesto y experiencia"></textarea>

        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" />

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>


</form>
