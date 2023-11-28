@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-gray-500 font-bold uppercase dark:text-gray-400']) }}>
    {{ $value ?? $slot }}
</label>
