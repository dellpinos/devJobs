@php
    $classes = " text-sm text-gray-600 dark:text-gray-400 hover:text-blue-700 dark:hover:text-blue-400 rounded-md dark:focus:ring-offset-gray-800"
@endphp

<div>
    <a {{ $attributes->merge(['class' => $classes]) }} >
        {{ $slot }}
    </a>
</div>