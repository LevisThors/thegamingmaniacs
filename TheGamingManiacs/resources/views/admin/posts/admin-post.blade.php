<x-admin.admin-layout>
    <!-- POST CONTAINER -->
    <div class="w-50 mx-auto mt-4">
        <div>
            <div class="d-flex flex-row">
                <h1>Posts</h1>
                <div class="my-auto ms-auto me-3">
                    <a href="/admin/add-post" class="new-btn px-2 py-2 rounded">Add New</a>
                </div>
            </div>
            <hr />
        </div>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                            <li>
                                <a class="post-control-nav" aria-current="page" href="#">Published</a>
                            </li>
                            <li>
                                <a class="post-control-nav" aria-current="page" href="#">Scheduled</a>
                            </li>
                            <li>
                                <a class="post-control-nav" aria-current="page" href="#">Drafts</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <ul class="admin-post-container">
                @foreach($posts as $post)
                    <x-admin.admin-post-item title='{{ $post->title }}' date='{{ $post->created_at }}' id='{{ $post->id }}'></x-admin.admin-post-item>
                @endforeach
            </ul>
        </div>
    </div>
    </div>

    <script src="{{ asset('js/admin-post.js') }}"></script>
</x-admin.admin-layout>
