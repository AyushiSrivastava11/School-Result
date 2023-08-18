<!DOCTYPE html>
<html lang="en" data-bs-theme="btn-primary">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Bag-Track</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <style>
   
.feature-icon
{
  width: 4rem;
  height: 4rem;
  border-radius: 0.75rem;
}
.g
{
    color:#FF0060;
}
/* Custom CSS to change the color of carousel control arrows */
.carousel-control-prev,
.carousel-control-next {
  color: #F3BCC8; /* Change to your desired color */
}

/* Optional: To change the background color of the carousel control arrows */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: #F3BCC8; /* Change to your desired color */
}


  </style> 
</head>
<body>
    <form action="" method="post">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/Bag.png" height="45px"> <strong>Ba<span class="g">g</span>-Track</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><span class="g">H</span>ome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Aboutus.php"><span class="g">A</span>bout us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="g">C</span>onnect
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="signup.php"><span class="g">S</span>ign Up</a></li>
              <li><a class="dropdown-item" href="signin.php"><span class="g">L</span>og in</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search for a query" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>



  <div class="px-4 pt-5 my-5 text-center border-bottom">
 
 
      <!-- <img class="mb-4" src="images/news.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Sign up to my newsletter</h1>

        
        <input type="text" class="form-control top"   name ="first" placeholder="First Name" required autofocus>

        <input type="text" class="form-control middle"  name ="last" placeholder="Last Name" required >        
        
        <input type="email" class="form-control bottom"  name="email" placeholder="Email" required>
        
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-muted">&copy; SKF Login</p> -->
<img src="images/schoolicon.jpg" alt="school" height="100px" width="100px">



    <h1 class="display-4 fw-bold text-body-emphasis">Ba<span class="g">g</span> to the Track</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4"><span class="g"><strong>W</strong></span>elcome to our website, where we are on a mission to provide exceptional convenience to non-board appearing students and the teachers to get and post the result of their respective schools. We believe that since almost everything in this century has turned into remote mode, then students and teachers who are not the part of normal board exams for instance CBSE, ISC, ICSE, etc., must also be convenienced with this facility.
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Get a Quote</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Contact Us</button>
      </div>
    </div>
    <!-- <form action="/" method="post">-->
      
  <!-- </form> -->
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="images/School.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="School image" width="300" height="300" loading="lazy">
      </div>
    </div>
  </div>
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Why move with us</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img src="images/books.png" alt="briefcase" height="50px">
        </div>
        <h3 class="fs-2 text-body-emphasis">Education</h3>
        <p>Education purpose is very clear as there will be resources to get hand on many softcopies of academic studies. Notes might be released by the Admin to be accessed by students, and notices will be notified as well. </p>
       
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img src="images/pencil.jpg" alt="bus-front" height="50px">
        </div>
        <h3 class="fs-2 text-body-emphasis">Personal Touch</h3>
        <p>Students will be able to interact with their teachers for the queries which can be helpful for the peers and sumptuously enlighten the students to go to the right path.
        </p>
       
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img src="images/schoolbag.png" alt="chat-square-heart"height="50px">
        </div>
        <h3 class="fs-2 text-body-emphasis">Automacity</h3>
<p>The students will be convenienced with their own little school level projects which can automate their future towards a better goal.</p>       
      </div>
    </div>
  </div>

  <div class="container">
  <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"  aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"  aria-label="Slide 3"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
</div>


    <div class="carousel-inner">
      
    <div class="carousel-item active">
        <img src="images/methodist.jpg" class="d-block mx-auto " alt="couple" height="500px" width="375">
      </div>

      <div class="carousel-item">
        <img src="images/suman.jpg" class="d-block mx-auto " height="500px" width="500px"  alt="dgy">
      </div>

      <div class="carousel-item">
        <img src="images/dream.jpg" class="d-block mx-auto" height="500px" width="500px"alt="family">
      </div>

      <div class="carousel-item">
        <img src="images/don.jpg" class="d-block mx-auto" height="500px" width="500px" alt="dosagh">
      </div>

      <div class="carousel-item">
        <img src="images/dps.jpg" class="d-block mx-auto"  height="500px" width="500px"alt="ddshg">
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>© 2023 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
  </footer>
</div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>