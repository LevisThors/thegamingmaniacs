@props(['title', 'image', 'url'])

<div class="card feature-card bg-dark text-white mt-4">
    <img
      src="{{ asset('storage/' . $image) }}"
      class="card-img feature-post"
      height="450px"
      alt="..."
    />
    <div
      class="feature-text text-center position-absolute bottom-0 w-100 feature-post-bg py-3"
    >
      <h5 class="card-title mb-3">{{$title}}</h5>

      <a href="/post/{{$url}}" class="card-text btn btn-success">Read Review</a>
    </div>
  </div>