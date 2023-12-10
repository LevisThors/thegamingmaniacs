@props(['name'])

<!DOCTYPE html>
<html lang="en" class="w-100">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>{{ $name }}</title>
  </head>
  <body class="pt-3">
    <header>
      <div class="logo-container lg-view">
        <a class="logo my-auto" href="/">The Gaming Maniacs</a>
      </div>
      <hr class="mb-0">

      

      <nav class="navbar navbar-expand-lg navbar-light w-100" id="navbar">
        <div class="container-fluid">
          <div class="show-more-container">
            <a class="show-more-button" href="#">
              <img src="{{ asset('storage/images/show-more-button.png') }}" width="35px">
            </a>
          </div>
          <div class="logo-container sm-view position-absolute text-center w-100">
            <a class="logo my-auto" href="/">TGM</a>
          </div>
          <div class="collapse navbar-collapse w-100 mx-0" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item nav-item-modified px-2">
                <a class="nav-link active" aria-current="page" href="#">News</a>
              </li>
              <li class="nav-item nav-item-modified px-2">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown nav-item-modified px-2">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Gaming
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Reviews</a></li>
                  <li><a class="dropdown-item" href="#">Strategies</a></li>
                </ul>
              </li>
            </ul>
            <span class="w-100 position-absolute text-center logo my-auto hidden" id="logo-short">TGM</span>
          </div>
        
        </div>
        
      </nav>
    </header>
    <div id="dropdown-menu" class="hidden">
      <div class="small-nav">
        <a class="show-more-button" href="#">
          <img src="{{ asset('storage/images/show-more-button.png') }}" width="35px">
        </a>
        <span class="w-100 text-center logo my-auto" id="logo-short">TGM</span>
      </div>
      <ul> 
        <li>News</li>
        <li>Gaming</li>
      </ul>
    </div>
    <div id="background-overlay-mobile" class="hidden"></div>

  {{ $slot }}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-xxxxxxxxxxxxxx" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-xxxxxxxxxxxxxx" crossorigin="anonymous"></script>  
  <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
  </body>
</html>