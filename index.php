<!DOCTYPE html>
<html>
    <head>
        <title>Photo Gallery</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Photo Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#Nature">Nature</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#Vibe">Vibe</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#Photography">Photography</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Contact Us">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#About">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/first.jpg" class="d-block w-100" alt="First">
      <div class="carousel-caption d-none d-md-block">
        <h3>Nature</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/second.jpg" class="d-block w-100" alt="Second">
      <div class="carousel-caption d-none d-md-block">
        <h3>Vibe</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/third.jpg" class="d-block w-100" alt="Third">
      <div class="carousel-caption d-none d-md-block">
        <h3>Photography</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<a id="Nature">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Nature</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature3.jpg" class="img-fluid pb-3">
    </div>
        </div>

    </div>
</section>
</a>

<a id="Vibe">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Vibe</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/vibe1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/vibe2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/vibe3.jpg" class="img-fluid pb-3">
    </div>
        </div>

    </div>
</section>
</a>

<a id="Photography">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Photography</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/photography1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/photography2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/photography3.jpg" class="img-fluid pb-3">
    </div>
        </div>

    </div>
</section>
</a>

<a id="Contact Us">
<section class="my-4">
  <div class="py-4">
      <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">
      <form action="about.php" method="post">
          <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
              <label>Email:</label>
              <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
              <label>Number:</label>
              <input type="text" name="number" class="form-control">
          </div>
            <button type="submit" class="btn btn-success">Submit</button>
      </form>
  </div>
</section>
</a>

<a id="About">
<section class="my-4">
  <div class="py-4">
      <h2 class="text-center">About</h2>
  </div>
  <div class="container-fluid">
      <h3 class="text-center">Mac</h3> <br>
      <p class="text-center"><b>I am a passionate photographer interested in working in Architecture, Nature and Travel Photography.
        I am full time freelancer with an experience of 5 years. 
      </b></p>
  </div>
</section>
</a>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>