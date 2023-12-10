<x-header name="{{ $post->title }}">
    <div class="main-container">
        <div class="responsive-body">
            <div class="post-head-container">
                <div class="content">
                    <h1>{{ $post->title }}</h1>
                    {!! $post->body !!}
                </div>
                <div class="thumbnail-container">
                    <img src="{{ asset('storage/' . $post->image) }}" height="350px" class="post-image">
                </div>
            </div>
          
        </div>
    </div>
    <x-footer></x-footer>
</x-header>