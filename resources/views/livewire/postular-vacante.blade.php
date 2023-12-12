<div class=" bg-gray-100 dark:bg-gray-700 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class=" text-center text-2xl font-bold my-4 dark:text-gray-200">Aplicar a esta vacante</h3>
    @if (session()->has('mensaje'))
        <p
            class="uppercase border border-green-600 bg-green-100 text-green-600 dark:bg-gray-700 text-sm font-bold p-2 my-5 rounded-lg">
            {{ session('mensaje') }}
        </p>
    @else
        <form wire:submit.prevents='postularme' class="w-96 mt-5">
            <div class=" mb-4 ">
                <x-input-label for="cv" :value="__('Curriculum (PDF)')" />
                <x-text-input id="cv" type="file" accept=".pdf" class="block mt-1 w-full"
                    wire:model.live="cv" />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>

            <div class=" flex justify-center">
                <x-primary-button class="my-5">
                    Aplicar
                </x-primary-button>

            </div>
        </form>
    @endif

</div>
