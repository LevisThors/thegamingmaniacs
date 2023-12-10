@props(['image', 'title', 'slug', 'short_desc'])
<a href="/post/{{$slug}}" class="col-md-3 col-sm-6 mb-4 link-card">

    <div class="card " id='trending-card'>
        <x-badge-layout category='trending'></x-badge-layout>
        
        <img src="{{ asset('storage/' . $image) }}" class="card-img-top trending-img" alt="{{ $title }}" />
        <div class="trending-overlay"></div>
        <div class="trending-hover">
            <div class="trending-card-title card-bottom-text">
                <h5 class="card-title custom-card-title px-3 w-100">{{ $title }}</h5>
            </div>
            <div class="trending-card-desc mt-2 px-1">
                <p>{{$short_desc}}</p>
            </div>
        </div>
    </div>
</a>
</a>
