<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/all.css">
  @yield('css')
  <title>
    @yield('title')
  </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/bootstrap"><img src="./img/logo1.svg" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-center" href="#">Blog</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-center" href="#">Portfolio</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-center" href="#">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-center" href="#">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link mr-4" href="./shopping1"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mr-4" href="./login"><i class="fa-solid fa-user"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('main')


  <footer class="bg-white d-flex flex-column justify-content-center">
    <div class="d-flex flex-column flex-md-row  justify-content-center my-5 my-md-5">
      <div class="d-flex flex-column justify-content-md-center align-items-center col-lg-2 ">
        <div class="companyTitle w-lg-100">
          <img src="./img/logo.svg" alt="" class="bg-dark mr-1">
          數位方塊
        </div>
        <div class="companyContent text-lg-left w-lg-100">
          Air plant banjo lyft occupy retro adaptogen indego
        </div>
      </div>
      <div class="d-flex flex-column flex-md-row flex-md-wrap flex-lg-nowrap align-items-center col-lg-7 relatedWork">
        <ul class="list-group col-md-6 col-lg-3 pr-lg-0">
          <li class="list-group-item border-0">CATEGORIES</li>
          <li class="list-group-item border-0 p-0">First Link</li>
          <li class="list-group-item border-0 p-0">Second Link</li>
          <li class="list-group-item border-0 p-0">Third Link</li>
          <li class="list-group-item border-0 p-0">Fourth Link</li>
        </ul>
        <ul class="list-group col-md-6 col-lg-3 pr-lg-0">
          <li class="list-group-item border-0">CATEGORIES</li>
          <li class="list-group-item border-0 p-0">First Link</li>
          <li class="list-group-item border-0 p-0">Second Link</li>
          <li class="list-group-item border-0 p-0">Third Link</li>
          <li class="list-group-item border-0 p-0">Fourth Link</li>
        </ul>
        <ul class="list-group col-md-6 col-lg-3 pr-lg-0">
          <li class="list-group-item border-0">CATEGORIES</li>
          <li class="list-group-item border-0 p-0">First Link</li>
          <li class="list-group-item border-0 p-0">Second Link</li>
          <li class="list-group-item border-0 p-0">Third Link</li>
          <li class="list-group-item border-0 p-0">Fourth Link</li>
        </ul>
        <ul class="list-group col-md-6 col-lg-3 pr-lg-0">
          <li class="list-group-item border-0">CATEGORIES</li>
          <li class="list-group-item border-0 p-0">First Link</li>
          <li class="list-group-item border-0 p-0">Second Link</li>
          <li class="list-group-item border-0 p-0">Third Link</li>
          <li class="list-group-item border-0 p-0">Fourth Link</li>
        </ul>
      </div>
    </div>
    <div class="grayFooter text-center py-3 d-flex flex-column flex-sm-row justify-content-sm-around">
      © 2020 Tailblocks — @knyttneve
      <div class="relatedLink text-center">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin-in"></i>
      </div>
    </div>
  </footer>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
</body>

</html>
