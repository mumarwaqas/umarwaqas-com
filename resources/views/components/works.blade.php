@php
// Decode the JSON data
$work = json_decode($works, true);
@endphp
@if (!empty($work))
    @foreach($work as $entry)
    <div class="flex flex-col md:flex-row md:gap-5">
        <p class="mt-1 text-sm font-medium text-muted dark:text-light/70">
            {{ \Carbon\Carbon::parse($entry['startDate'])->format('m,Y') }} - {{ \Carbon\Carbon::parse($entry['endDate'])->format('m,Y') }}
        </p>
        <div class="flex items-center gap-3">
            <div class="grid h-12 w-12 shrink-0 place-content-center rounded-lg bg-light dark:bg-dark-2">
                <img src="{{ $entry['logo'] }}" alt="{{ $entry['company'] }}" class="h-9 w-9" />
            </div>
            <div class="">
                <h6 class="text-base font-semibold text-dark dark:text-light/70">
                    {{ $entry['company'] }}
                </h6>
                <p class="text-sm text-muted">
                    {{ $entry['position'] }}
                </p>
                {{-- @if (!empty($entry['summary']))
                    <p class="text-sm text-muted">
                        {{ $entry['summary'] }}
                    </p>
                @endif --}}
            </div>
        </div>
    </div>
    @endforeach
@else
    <p>No work available.</p>
@endif
