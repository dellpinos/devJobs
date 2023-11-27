@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="p-2 bg-gray-700 border-l-4 border-red-600">{{ $message }}</li>
        @endforeach
    </ul>
@endif
