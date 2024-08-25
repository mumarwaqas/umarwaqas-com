@if (!empty($services))
    @foreach ($services as $service)
    <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
        <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
            <img src="{{ asset('assets/images/services/' . $service['image']) }}" alt="{{ $service['name'] }}" width="" height="" class="h-12 w-12 text-primary lg:h-16 lg:w-16" lazy="loaded">
        </div>
        <p class="mt-3 text-base font-medium text-dark dark:text-light/70">{{ $service['name'] }}</p>
    </div>
    @endforeach
@else
    <p>No project available.</p>
@endif
