<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gallery | Mt Foodji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <div style="background-image: url(./img/img-fudji4.png); position: relative; background-attachment: fixed; background-size: cover; overflow:clip">


    <nav id="nav" class="navbar navbar-default navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand fs-2" href="./index.php">Mt Foodji
          <!-- <img src="" alt=""> -->
        </a>
        <button class="navbar-toggler custom-toggler flex-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <div class="navbar-nav ms-lg-auto text-center">
            <a class="nav-item nav-link active fs-3  pt-0 " href="about.php">About</a>
            <a class="nav-item nav-link active fs-3 pt-0 " href="menu.php">Menu</a>
            <a class="nav-item nav-link active fs-3 pt-0 " href="gallery.php">Gallery</a>
            <a class="nav-item nav-link active fs-3 pt-0 " href="contact.php">Contact</a>
          </div>
        </div>
      </div>
    </nav>




    <div class="container mt-5">
      <div class="row gallery-row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 pb-2 pt2">
          <img class="img-fluid" src="./img/img-ramen.jpg" alt="lantern">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 pb-2 pt2">
          <img class="img-fluid" src="./img/img-ramen.jpg" alt="restaurant">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 pb-2 pt2">
          <img class="img-fluid" src="./img/img-ramen.jpg" alt="sake">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 pb-2 pt2">
          <img class="img-fluid" src="./img/img-ramen.jpg" alt="ramen" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 pb-2 pt2">
          <img class="img-fluid" src="./img/img-ramen.jpg" alt="ramen" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 pb-2 pt2">
          <img class="img-fluid" src="./img/img-ramen.jpg" alt="ramen" class="img-fluid">
        </div>

      </div>


      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-5 mb-5">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="gallery.php">1</a></li>
          <li class="page-item"><a class="page-link" href="gallery2.php">2</a></li>
          <li class="page-item"><a class="page-link" href="gallery3.php">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

    </div>

    <footer class="footer">
      <div class="d-flex justify-content-center p-4 social-media">
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

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      var scroll_pos = 0;
      $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 80) {
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