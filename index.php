<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mt Foodji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body
  style="background-image: url(img/img-fudji4.png); position: relative; background-attachment: fixed; background-size: cover;">





  <nav id="nav" class="navbar navbar-default navbar-expand-md sticky-top">
    <div class="container">
      <a class="navbar-brand fs-2" href="#">Mt Foodji
        <!-- <img src="" alt=""> -->
      </a>
      <button class="navbar-toggler custom-toggler flex-end" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <div class="navbar-nav ms-md-auto text-center">
          <a class="nav-item nav-link active fs-3  pt-0 " href="html/about.html">About</a>
          <a class="nav-item nav-link active fs-3 pt-0 " href="html/menu.html">Menu</a>
          <a class="nav-item nav-link active fs-3 pt-0 " href="html/gallery.html">Gallery</a>
          <a class="nav-item nav-link active fs-3 pt-0 " href="html/contact.html">Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="hero jumbotron text-center">
    <div class="container">
      <div class="display-5">/\</div>
      <div class="display-5 mb-5">Mt <br> Foodji</div>
      <div class="fs-2">Some cool text here</div>
    </div>
  </header>



  <div class="jumbotron bg-dark text-center d-flex align-items-center img-fluid"
    style="background-image: url(img/img-chef.jpg); background-size: cover; object-fit: cover; height:100vh; width: 100vw;">
    <!-- align-item-center to center row on y axis -->


    <div class="row w-100 justify-content-center">
      <!-- w-100 to make row full width | justify-content-center to center col on x axis -->

      <!-- Press Panel -->
      <div class="col col-card d-flex justify-content-center mb-5" style="overflow-y: auto; ">
        <div class="card card-panel" style="width: 20rem; box-sizing: border-box;">
          <img src="/img/img-ramen-resize.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-subtitle mb-2">News</h5>
            <p class="card-text text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto optio ipsum
              libero
              vitae</p>
            <a class="card-link btn btn-dark mb-5" href="#" role="button">More Info</a>
          </div>
        </div>

      </div>
      <!-- News Panel -->
      <div class="col d-flex justify-content-center mb-5" style="overflow-y: auto; ">
        <div class="card col-card card-panel" style="width: 20rem; box-sizing: border-box;">
          <img src="/img/img-ramen-resize.png" class="card-img-top " alt="">
          <div class="card-body">
            <h5 class="card-subtitle mb-2">Event</h5>
            <p class="card-text text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto optio ipsum
              libero
              vitae</p>
            <a class="card-link btn btn-dark mb-5" href="#" role="button">More Info</a>

          </div>
        </div>

      </div>

    </div>
  </div>


  <footer class="footer">
    <div
      class="d-flex justify-content-center p-4 social-media"
    >
      <div>
        <a target="_blank" href="https://www.facebook.com/" class="btn btn-outline-primary rounded-3 me-4">
          <i class="fa fa-facebook-f"></i>
        </a>
        <a target="_blank" href="https://twitter.com/" class="btn btn-outline-primary rounded-3 me-4">
          <i class="fa fa-twitter"></i>
        </a>
        <a target="_blank" href="https://www.instagram.com" class="btn btn-outline-danger rounded-3 me-4">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

  <script>
    $(document).ready(function () {
      var scroll_pos = 0;
      $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 100) {
          $("#nav").css('background-color', 'rgba(0, 0, 0, 0.7)');
          $("#nav a").css('color', 'white');
        } else {
          $("#nav").css('background-color', 'transparent');
          $("#nav a").css('color', 'black');
        }
      });
    });
  </script>
</body>

</html>