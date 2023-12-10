<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/admin-panel.css') }}" />
    <link
    href="https://cdn.quilljs.com/1.3.7/quill.snow.css"
    rel="stylesheet"
  />
    <title>Document</title>
</head>
    <div class="h-100 d-flex flex-row">
        <div class="h-100 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px">
            <div class="d-flex justify-content-center">
                <a href="/" class="d-flex logo align-items-center text-white text-decoration-none">
                    TGM
                </a>
            </div>
            <hr />
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/posts" class="nav-link" id="show-posts-button" aria-current="page">
                        <i class="fa fa-clipboard" aria-hidden="true"></i> Posts
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/games" class="nav-link" aria-current="page">
                        <i class="fa fa-gamepad" aria-hidden="true"></i> Games
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <button class="nav-item nav-link w-100 text-start dropdown-toggle" data-bs-toggle="collapse"
                        data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <i class="fa fa-bars" aria-hidden="true"></i> Categories
                    </button>
                </li>
            </ul>
            <hr />
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="..." alt="" width="32" height="32" class="rounded-circle me-2" />
                    <strong>User</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        {{$slot}}
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/admin.js') }}"></script>
 
        </body>

</html>
