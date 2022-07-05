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
        <form class=" rounded-3 p-5 w-75 needs-validation" novalidate>
          <h2 class="pb-3 border-bottom">Contact Us</h2>
          <div class="row mb-3 pt-4">
            <div class="col">
              <label for="firstName" class="form-label">First&nbsp;name</label>
              <input type="text" class="form-control" id="firstName" aria-describedby="firstNameHelp" required>
              <div class="invalid-feedback">
                Please provide your first name.
              </div>
            </div>
            <div class="col">
              <label for="lastName" class="form-label">Last&nbsp;name</label>
              <input type="text" class="form-control" id="lastName" aria-describedby="lastNameHelp" required>
              <div class="invalid-feedback">
                Please provide your last name.
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            <div class="invalid-feedback">
              Please provide your email.
            </div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Restaurant</label>
            <select class="form-select" id="selectRestaurant" aria-label="Default select example" required>
              <option selected disabled value="">Please select a restaurant</option>
              <option value="Brooklyn">Brooklyn</option>
              <option value="Brussels">Brussels</option>
              <option value="Berlin">Berlin</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Topic</label>
            <select class="form-select" id="selectTopic" aria-label="Default select example" required>
              <option selected disabled value="">Please select a topic</option>
              <option value="Reservation">Reservation</option>
              <option value="General">General information</option>
              <option value="Compliment">Compliment</option>
              <option value="Complaint">Complaint</option>
            </select>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" style="height: 8em;"></textarea required>
            <label for="floatingTextarea2">Write your message here.</label>
          </div>
          <button type="submit" class="btn btn-dark">Submit</button>
        </form>


      </div>
    </div>
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
  

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/main.js"></script>
  <!-- <script>
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
  </script> -->
</body>

</html>