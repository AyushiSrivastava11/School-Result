<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Welcome</title>
    <style>
      .logout-button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
      .g
{
    color:#FF0060;
}
.first
{
    display:grid;
    place-items:center;
}

.center-container {
    display: grid;
  place-items: center;
  height: 100vh;
}
.logout-button:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    
    <?php
     ob_start();
     session_start();
     include_once("dbconnect.php");
  
     $mail="";
     $sql="";
     $res="";
  
     if(isset($_SESSION['userid']))
     {
      $mail=$_SESSION['userid'];
     }
     $sql="select name from `bagtrack` where mail='".$mail."'";
     $inter_res=mysqli_query($dbcon, $sql);
     $res=mysqli_fetch_array($inter_res);
     ?>
    <!-- (echo "<h1>Welcome Back $res[0]</h1>";
    // echo "<a href='logout.php'><button type="button">button</button>"</a>
    // ;
    echo "<a href='index.php'>
    <button>Log out</button>
  </a>";) -->
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
          <input class="form-control me-2" type="search" placeholder="postcode" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="center-container">
<div class="first">
<h1 class="some"><strong><span class="g">W</span>elcome back <?php echo ucfirst($res[0]);?></strong></h1>
<img src="images/Enjoy.png" alt="image" height="250px" width="250px">
<a href='index.php'>
    <button class="logout-button">Continue</button>
  </a>
  <br>
<a href='index.php'>
    <button class="logout-button">Log out</button>
  </a>
<br>
</div></div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>