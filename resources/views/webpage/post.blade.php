<div class="grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2">
    @foreach($posts as $post)
    <div>
        <div class="relative">
            <a href="{{ route('post', $post->slug) }}" class="group block aspect-6/4 overflow-hidden rounded-lg">
                <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105" lazy="loaded">
            </a>
            <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                @if($post->category)
                    <a href="{{ route('category', $post->category->slug) }}" class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">{{ $post->category->title }}</a>
                @endif
            </div>
        </div>
        <div class="mt-6">
            <h2 class="text-xl font-medium xl:text-2xl">
                <a href="{{ route('post', $post->slug) }}" class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">{{ $post->title }}</a>
            </h2>
            <ul class="mt-4 flex flex-wrap items-center gap-2">
                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">{{ $post->created_at->diffForHumans() }}</li>
                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">{{ $post->created_at->format('Y-m-d H:i:s') }}</li>
            </ul>
        </div>
    </div>
    @endforeach
</div>
{{ $posts->links('vendor.pagination.custom') }}
