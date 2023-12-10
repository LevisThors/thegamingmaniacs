@props(['title', 'image', 'short_desc', 'created_at', 'url'])

<a class="card border-fill card-review mb-3" href="/post/{{ $url }}">
    <div class="row g-0">
      
      <div class="col-md-2">
        <img src="{{ asset('storage/' . $image) }}" class="img-fluid rounded img-container" alt="{{$title}}" />
      </div>
      <div class="col-md-8">
        <div class="card-body card-body-review bg-transparent pb-1 d-flex flex-column">
          <h5 class="card-title underline">{{$title}}</h5>
          <p class="card-text">
            {{$short_desc}}
          </p>
          <p class="card-text mt-auto">
            <small class="text-muted">{{$created_at}}</small>
          </p>
        </div>
      </div>
    </div>
  </a>