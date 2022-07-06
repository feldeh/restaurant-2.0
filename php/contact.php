<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact | Mt Foodji</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body
  style="background-image: url(../img/img-fudji4.png); position: relative; background-attachment: fixed; background-size: cover;">


  <nav id="nav" class="navbar navbar-default navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand fs-2" href="../index.php">Mt Foodji
        <!-- <img src="" alt=""> -->
      </a>
      <button class="navbar-toggler custom-toggler flex-end" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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



  <div class="container" style="height: 100vh;">

    <div class="row ">
      <div class="col text-center">
        <h1></h1>
      </div>
    </div>


    <div class="row mt-5 mb-5">
      <div class="col d-flex justify-content-center">

      
        <form class="rounded-3 p-5 w-75 needs-validation" action="contactform.php" method="post" novalidate>
          <h2 class="pb-2 border-bottom border-3 border-dark">Contact Us</h2>
          <div class="row mb-2 pt-4">
            <div class="col mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" required>
              <div class="invalid-feedback">
                  Please provide your name.
              </div>
            </div>
            <div class="col mb-3">
            <label for="mail" class="form-label">Email</label>
            <input type="mail" name="mail" class="form-control" id="mail" aria-describedby="mailHelp" required>
            <div class="invalid-feedback">
                Please provide your email.
            </div>
          </div>

          </div>
          <div class="mb-3">
            <label for="restaurant" class="form-label">Restaurant</label>
            <select class="form-select" name="restaurant" id="restaurant" aria-label="Default select example" required>
                <option selected disabled value="">Select restaurant</option>
                <option value="brooklyn">Brooklyn</option>
                <option value="brussels">Brussels</option>
                <option value="berlin">Berlin</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <select class="form-select" name="subject" id="subject" aria-label="Default select example" required>
                <option selected disabled value="">Select subject</option>
                <option value="reservation">Reservation</option>
                <option value="general">General information</option>
                <option value="compliment">Compliment</option>
                <option value="complaint">Complaint</option>
            </select>
          </div>
          <div class="form-floating mb-3">
              <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" placeholder="Message" style="max-height: 8em;height: 8em;"></textarea required>
              <label for="floatingTextarea2">Message</label>
          </div>
          <button type="submit" name="submit" class="btn btn-dark">Submit</button>
        </form>

      </div>
    </div>
  </div>

  
  <div class="site-container">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      var scroll_pos = 0;
      $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 100) {
          $("#nav").css('background-color', 'rgba(0, 0, 0, 0.8)');
          $("#nav a").css('color', 'white');
        } else {
          $("#nav").css('background-color', 'transparent');
          $("#nav a").css('color', 'black');
        }
      });
    });
  </script>
  <script src="../js/main.js"></script>
</body>

</html>