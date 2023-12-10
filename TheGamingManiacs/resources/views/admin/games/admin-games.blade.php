<x-admin.admin-layout>
    <div class="w-50 mx-auto mt-4">
        <div>
            <div class="d-flex flex-row">
                <h1>Games</h1>
                <div class="my-auto ms-auto me-3">
                    <a href="/admin/add-game" class="new-btn px-2 py-2 rounded">Add New</a>
                </div>
            </div>
            <hr />
        </div>
        <div>
            <ul class="admin-post-container">
                @foreach($games as $game)
                    <x-admin.admin-game-item image='{{ $game->image }}' name='{{ $game->name }}' 
                        date='{{ $game->created_at }}' id='{{ $game->id }}' description='{{ $game->description }}'></x-admin.admin-game-item>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
</x-admin.admin-layout>