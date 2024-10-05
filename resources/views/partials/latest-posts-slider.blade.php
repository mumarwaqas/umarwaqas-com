<div class="latest-posts-slider">
    <div class="latest-posts-header">
        <div class="title">
            <h3>latest post</h3>
        </div>
    </div>
    <div class="latest-posts-body">
        <div class="latest-posts-carousel owl-carousel">
            @foreach ($posts->chunk(2) as $key => $chunk)
            <div class="item" data-dot="{{ $key + 1}}">
                @foreach ($chunk as $post)
                <div class="post-card">
                    <div class="post-header">
                        <div class="post-tumb">
                            <img src="{{ asset($post->image) }}" width="514px" height="340px" class="img-fluid" loading="lazy" alt="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="post-details">
                            <div class="post-author">
                                <img src="{{ asset('assets/images/post-author.webp') }}" width="12.967px" height="14.264px" class="img-fluid" loading="lazy" alt="{{ $post->user->name }}">
                                <span>Post By</span>
                                <a href="{{ route('author', $post->user->id) }}">{{ $post->user->name }}</a>
                            </div>
                            <div class="post-views">
                                <img src="{{ asset('assets/images/post-view.webp') }}" class="img-fluid" loading="lazy" width="19.12px" height="11.638px" alt="Views">
                                <span>{{ $post->views ?? '2568' }}</span>
                            </div>
                            <div class="post-category">
                                <img src="{{ asset('assets/images/post-file-manager.webp') }}" width="15.56px" height="12.967px" class="img-fluid" loading="lazy" alt="{{ Str::limit($post->category->title, 20) }}">
                                <a href="{{ route('category', $post->category->slug) }}">{{ Str::limit($post->category->title, 20) }}</a>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="{{ route('post', $post->slug) }}"><h4>{{ Str::limit($post->title, 25) }}</h4></a>
                        </div>
                    </div>
                </div>                    
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
