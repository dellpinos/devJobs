<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>

    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full " type="text" wire:model.live="titulo" :value="old('titulo')"
            placeholder="Titulo Vacante" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
            {{-- @error('titulo')
                <livewire:mostrar-alerta :message="$message" />
            @enderror --}}
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />

        <select wire:model.live="salario" id="salario" class="my-1 rounded-md shadow-sm border-gray-300 focus:border-blue-600 w-full dark:text-gray-300 dark:bg-gray-900">

            <option selected >-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select wire:model.live="categoria" id="categoria" class="my-1 rounded-md shadow-sm border-gray-300 focus:border-blue-600 w-full dark:text-gray-300 dark:bg-gray-900">

            <option selected >-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model.live="empresa" :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify" />

        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model.live="ultimo_dia" :value="old('ultimo_dia')"
             />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea class="my-1 rounded-md shadow-sm border-gray-300 focus:border-blue-600 w-full dark:text-gray-300 dark:bg-gray-900 h-52 " wire:model.live="descripcion" id="descripcion" placeholder="Descripción general del puesto y experiencia"></textarea>

        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model.live="imagen" />

        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>


</form>
