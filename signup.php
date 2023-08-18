<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bag-Track Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>

.four{
  display:flex;

}
       .address
       {
        background-image: url('images/sky.png');
        width: 30%;
      height: 150px;
      margin: 0 auto;
      border: none; 
      border:solid 1px #ccc;
      border-radius: 10px;
       }
.first
{
    display:grid;
    place-items:center;
}
.add{
      width: 30%;
      height: 25px;
      margin: 0 auto;
      border: none; 
      border:solid 1px #ccc;
      border-radius: 10px;
     background-color:#A1CCD1;
    }
    .subAdd
    {
        width: 70px;
      height: 30px;
      margin: 0 auto;
      border: none; 
      border:solid 1px #ccc;
      border-radius: 10px;
      color: blue;
      background-color: #CBFFA9;
    }
    #nopic
    {
        width: 70px;
      height: 70px;
      margin: 0 auto;
      border: none; 
      border:solid 1px #ccc;
      border-radius: 10px;
    }
    .g
{
    color:#FF0060;
}
.inp
{
  display:flex;
  flex-direction:row;
  flex-basis:100px;
}
   
    </style>
</head>
<body>
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
      
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="postcode" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</nav>


    <form action="register.php" method="post" enctype="multipart/form-data">
<div class="first">
    <br>
    <h1><span class="g">L</span>et's Sign Up!</h1>
     
<img class="mb-4"src="images/SignupImage.jpg" width="300" height="300"alt="image"><br>

Enter Your School's Name:<input type="text" class="add" name="school" placeholder="School's Name"size="50"> 
<br>
Enter Your Full Name: <input type="text" class="add" name="name" placeholder="Full Name:" size="50">
<br>
Enter your Parent's email id<input type="email" name="mail" class="add"placeholder="Parent's email id">
<br>


Write your address:<textarea name="address"  class="address" cols="30" rows="10" placeholder="Your address"></textarea>
<br>
Write your school's address:<textarea name="schooladdress"  class="address" cols="30" rows="10" placeholder="School's address"></textarea>

  

  <br> 

  Enter Password:<input type="password" class="add" name="pass" placeholder="Enter Password:" size="50">
<br> Enter Your Standard:<input type="text" class="add" name="class" placeholder="Enter Your Standard(Class):" size="50">
<br> Enter Your Section:<input type="text" class="add" name="section" placeholder="Your Section:" size="50">
<br> Enter Your Phone Number:<input type="text" class="add" name="phone" placeholder="Your Phone Number:" size="50">
  
 
  <br>Enter Your Registration Number: <input type="text" class="add" name="regn" placeholder="Your Registration Number:" size="50">
<br>Enter date of birth <input type="date" name="date"class="add" ><br>

  


Upload Picture:<img src="images/nopic.png" id="nopic"alt="pic">
<br>
<input type="file" name="image" id="image" accept= ".jpg,.png,.jpeg" required>

<br> 
<button class="subAdd" type="submit" name="submit" >Register</button>
<br><br><br>
</div>
        
      </div>
    </div>

    </form>
    
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


 
</body>
</html>