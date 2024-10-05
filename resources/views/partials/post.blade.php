<div class="row">
    @foreach($posts as $post)
    <div class="col-md-6">
        <div class="post-card">
            <div class="post-header">
                <div class="post-tumb">
                    <img src="{{ asset($post->image ?? '') }}" width="514px" height="340px" class="img-fluid" loading="lazy" alt="{{ $post->title }}">
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
                        <img src="{{ asset('assets/images/post-file-manager.webp') }}" width="15.56px" height="12.967px" class="img-fluid" loading="lazy" alt="Category">
                        <a href="{{ route('category', $post->category->slug) }}">{{ Str::limit($post->category->title, 20) }}</a>
                    </div>
                </div>
                <div class="post-title">
                    <a href="{{ route('post', $post->slug) }}"><h4>{{ $post->title }}</h4></a>
                </div>
                <div class="post-content">
                    <a href="{{ route('post', $post->slug) }}">{{ Str::limit($post->content, 100) }}</a>
                </div>
            </div>
            <div class="post-footer">
                <a href="{{ route('post', $post->slug) }}">Read More <img src="{{ asset('assets/images/post-arrow.webp') }}" class="img-fluid" loading="lazy" width="13px" height="9.614px" alt="Read More"></a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Custom Pagination Links -->
<div class="pagination">
    @if ($posts->onFirstPage())
        <span class="prev"><img src="{{ asset('assets/images/angle-left-black.webp') }}" alt="angle-left-black" width="17" height="28"></span>
    @else
        <a href="{{ $posts->previousPageUrl() }}" class="prev" rel="prev"><img src="{{ asset('assets/images/angle-left-black.webp') }}" alt="angle-left-black" width="17" height="28"></a>
    @endif
    <div class="pages-number">
    @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
        @if ($page == $posts->currentPage())
            <span class="active">{{ $page }}</span>
        @else
            <a href="{{ $url }}">{{ $page }}</a>
        @endif
    @endforeach
    </div>
    @if ($posts->hasMorePages())
        <a href="{{ $posts->nextPageUrl() }}" class="next" rel="next"><img src="{{ asset('assets/images/angle-right-black.webp') }}" alt="angle-right-black" width="17" height="28"></a>
    @else
        <span class="next"><img src="{{ asset('assets/images/angle-right-black.webp') }}" alt="angle-right-black" width="17" height="28"></span>
    @endif
</div>
