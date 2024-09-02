@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'bg-green-100 text-green-700 p-4 rounded']) }}>
        <ul class="list-disc pl-5">
            @foreach ((array) $messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
