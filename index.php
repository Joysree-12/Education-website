<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Education Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="page2.webp" class="d-block">
    </div>
    <div class="carousel-item">
      <img src="page3.webp"  class="d-block">
    </div>
    <div class="carousel-item">
      <img src="page5.webp" class="d-block">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<section class="my-5">
  <div class="py-4">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="page4.webp" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h3> Online Education Website</h3>
      <p>Our mission is to empower students with the skills and confidece they need to succeed in their academic and professional pursuits. We aim to provide high-quality online courses,resources, and guidance that cater to diverse learning styles and needs. If you have any questions or suggestions, please don't hesitate to reach out. We would love to hear from you and look forward to being a part of your learning journey</p>
      <a href="about.php" class="btn btn-success">Check more</a>
    </div>
    </div>
  </div>
</section>

<section class="my-5 ">
  <div class="py-4">
    <h2 class="text-center">Our Services</h2>
  </div>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card mb-4">
    <img class="card-img-top" src="english.webp">
    <div class="card-body">
      <h4 class="card-title">English</h4>
      <a href="a"class="btn btn-primary">see More</a>
    </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card mb-4">
    <img class="card-img-top" src="physics.webp">
    <div class="card-body">
      <h4 class="card-title">Physics</h4>
      <a href="a"class="btn btn-primary">see More</a>
    </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
    <img class="card-img-top" src="Computer.webp">
    <div class="card-body">
      <h4 class="card-title">Computer Science</h4>
      <a href="a"class="btn btn-primary">see More</a>
    </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
    <img class="card-img-top" src="java.webp">
    <div class="card-body">
      <h5 class="card-title">Java</h5>
      <a href="a"class="btn btn-primary">see More</a>
    </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
    <img class="card-img-top" src="globe.jpg">
    <div class="card-body">
      <h4 class="card-title">Geography</h4>
      <a href="a"class="btn btn-primary">see More</a>
    </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
    <img class="card-img-top" src="python.jpg">
    <div class="card-body">
      <h3 class="card-title">Python</h3>
      <p>     </p>
      <a href="a"class="btn btn-primary">see More</a>
    </div>
</div>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-4">
    <h2 class="text-center">More Courses</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="javascript.jpg" class="img-fluid pb-3 mb-3" style= "width: 300px; height: 200px;">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="html.webp" class="img-fluid pb-3 mb-3" style= "width: 300px; height: 200px;">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="css.webp" class="img-fluid pb-3 mb-3" style= "width: 300px; height: 200px;">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="php.webp" class="img-fluid pb-3 mb-2" style= "width: 300px; height: 200px;">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="hindi.webp" class="img-fluid pb-3 mb-2" style= "width: 300px; height: 200px;">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="math.jpg" class="img-fluid pb-3 mb-2" style= "width: 300px; height: 200px;">
      </div>
    </div>
  </div>
</section>

<section class="my-4">
  <div class="py-5">
    <h2 class="text-center">Contact</h2>
  </div>
    <div class="w-50 m-auto">
    <form action="connect.php" method="post">
      <div class="form-group py-2">
        <label>Name</label>
        <input type="text" name="name" class="form-control">  
      </div>
      <div class="form-group py-2">
        <label>Email Id</label>
        <input type="text" name="email" class="form-control">  
      </div>
      <div class="form-group py-2">
        <label>Mobile No</label>
        <input type="text" name="mobile" class="form-control">  
      </div>
      <div class="form-group py-2">
        <label>Comment</label>
        <textarea class="form-control" name="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
  </div>
</section>

<footer>
  <p class="mt-5 p-3 bg-dark text-white text-center">@joysreeonlinewebsite</>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>