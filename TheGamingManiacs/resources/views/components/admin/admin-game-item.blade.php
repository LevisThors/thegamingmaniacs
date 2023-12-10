@props(['image', 'name', 'date', 'id', 'description']) 
<li class="list-group-item">
    <div class="d-flex flex-row">
        <div class="game-image-container">
            <img src="{{ asset('storage/' . $image) }}" height="100px"/>
        </div>
        <div>
        <a class="post-link" href="/admin/post/{{ $id }}">{{ $name }}</a>
        <p class="text-sm">{{ $description }}</p>
        <p class="text-sm mt-1 mb-0">
            <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
            {{ $date }}
        </p>
        </div>
        <i class="fa fa-ellipsis-h ms-auto align-self-center show-more-button" aria-hidden="true">
        <div class="show-more-dropdown hidden">
            <ul>
            <li><a href="#">Edit</a></li>
            <li><button type="submit" form="delete-post-form-{{ $id }}">Delete</button></li>
            <form id="delete-post-form-{{ $id }}" method="POST" action="/admin/post/delete/{{ $id }}" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
            </ul>
        </div>
        </i>
        
  </div>
  </li>