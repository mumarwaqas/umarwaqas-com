@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'bg-red-100 text-red-700 p-4 rounded']) }}>
        <ul class="list-disc pl-5">
            @foreach ((array) $messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
