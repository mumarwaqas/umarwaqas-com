@if (!empty($projects))
    @foreach ($projects as $project)
        <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-4 dark:bg-dark-2 md:p-6 md:pb-4">
            <div class="relative aspect-4/4 overflow-hidden rounded-t-lg">
                <img alt="{{ $project['name'] }}" width="400" height="400" class="h-full w-full rounded-t-lg object-cover object-top transition" src="{{ asset('assets/images/projects/' . $project['image_thumbnail']) }}" lazy="loaded">
                    <a href="{{ asset('assets/images/projects/' . $project['image_full']) }}"  data-gall="project-gallry-1" class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100 vbox-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                        <path d="M10 4.167v11.666M4.167 10h11.666"></path>
                    </svg>
                </a>
            </div>
            <div class="absolute inset-x-0 bottom-0 flex flex-wrap gap-2 bg-gradient-to-t from-black/20 p-4">
                <span class="rounded bg-white px-2 py-1 text-xs font-medium text-primary shadow">{{ $project['name'] }}</span>
            </div>
        </div>
    @endforeach
@else
    <p>No project available.</p>
@endif
