@php
// Decode the JSON data
$skills = json_decode($skills, true);
@endphp

@if (!empty($skills))
    @foreach($skills as $skill)
        <div class="text-center">
            <div class="grid place-content-center rounded-lg bg-light p-3 dark:bg-dark-2">
                <img data-src="{{ asset('assets/images/skills/' . $skill['logo']) }}" alt="{{ $skill['name'] }}" width="8" height="8" class="h-12 w-12" src="{{ asset('assets/images/skills/' . $skill['logo']) }}" lazy="loaded">
            </div>
            <p class="mt-1 text-base font-medium text-dark dark:text-light/70">{{ $skill['name'] }}</p>
        </div>
    @endforeach
@else
    <p>No skills available.</p>
@endif
