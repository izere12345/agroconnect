<?php
include_once '../config/conn.php';

session_start();
if (isset($_SESSION['phone'])) {
  $phone = $_SESSION['phone'];
  $sql = "SELECT * FROM users WHERE phone ='$phone'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  $id = $row['id'];
  $_SESSION['fname'] = $row['fname'];
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../assets/font-6/css/all.css">
  <link rel="stylesheet" type="text/css" href="../assets/boot-5/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <script src="../assets/boot-5/js/bootstrap.bundle.js"></script>
  <script src="../assets/jquery/jquery.min.js"></script>
  <title>Urakazaneza kuri agro connect</title>
</head>
<body style="overflow-x: hidden;">
      <!-- ----------------------- navbar start ------------------------ -->
<main class="row">
  <div class="col-3">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-primary" style="width: 280px; position: fixed; height: 100vh;">
    <a href="/" class="d-flex align-items-center  mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <ul class="container mx-4 list-unstyled">
        <li class="text-center"><img src="../assets/img/logo.jfif" class="rounded-5" alt="Logo" width="80" height="80" class="mx-auto"></li>
        <li class="text-center"> <span class="fs-4 text-capitalize"><strong> Urakaza Neza</strong></span></li>
      </ul>
      
     
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="farmer_dashboard.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="saba_isoko.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Saba isoko
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Raporo
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Konti yawe
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="../assets/img/userp.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong class="text-capitalize"><?php echo $_SESSION['fname'];?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
      </ul>
    </div>
  </div>
  </div>
      <!-- ----------------------------navbar ends ------------------------ -->
  <div class="col-8">
    <div class="row">
     <div class="container-fluid">
      <div class="row mt-2">
        <div class="col-md-4">
          <div class="card">
        <div class='card-body text-center'>
          <h2>13T</h2>
        </div>
        <div class="card-footer text-center">
          <p class="card-title">umusaruro</p>
          <button class="card-text btn btn-primary w-100">Genzura</button>
        </div>
      </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <?php
         

        $sql = "SELECT COUNT(farmer_id) AS total from farmer_product where farmer_id ='$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $count = $row['total'];
        ?>
        <div class='card-body text-center'>
          <h2><?php echo $count;?></h2>
        </div>
        <div class="card-footer text-center">
          <p class="card-title">amasoko</p>
          <button class="card-text btn btn-primary w-100">Genzura</button>
        </div>
      </div>
        </div>
        <div class="col-md-4">
            <div class="card">
              <?php
        $sql = "SELECT COUNT(buyer_id) AS total from buyer_request WHERE product_id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $count = $row['total'];
        ?>
        <div class='card-body text-center'>
          <h2><?php echo $count;?></h2>
        </div>
        <div class="card-footer text-center">
          <p class="card-title">ibyatumujwe</p>
          <button class="card-text btn btn-primary w-100">Genzura</button>
        </div>
      </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
        <h2 class="text-center text-capitalize">amakuru agezweho</h2>
      <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active h-100">
        <img src="../assets/img/nkongwa.png" class="bd-placeholder-img img-fluid" width="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="400" height="300" fill="var(--bs-secondary-color)"/>
        <div class="container">
          <div class="carousel-caption text-start">
            <h3 class="opacity-75">Agro connect.</h3>
            <h2>
              Byinshi utaruzi kundwara yibasira ibigori bita nkongwa
            </h2>
            <p><a class="btn btn-lg btn-primary" onclick="document.getElementById('id01').style.display='block'">Menya Byinshi</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item h-100">
        <img src="../assets/img/slige-2.jfif" class="bd-placeholder-img img-fluid" style="height: 550px;" width="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
        <div class="container">
          <div class="carousel-caption">
            <h3 class="opacity-75">Agro connect.</h3>
            <h2 class="text-capitalize">
              Menya amakuru k'ubuhinzi bw'icyayi nuko ibiciro bihagaze ku isoko
            <p><a class="btn btn-lg btn-primary mt-2" onclick="document.getElementById('id01').style.display='block'">Menya Byinshi</a></p> 
            </h2>
          </div>
        </div>
      </div>
      <div class="carousel-item h-100">
        <img src="../assets/img/kirabiranya.png" class="bd-placeholder-img img-fluid" style="height: 550px;" width="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
        <div class="container">
          <div class="carousel-caption text-center">
            <h3 class="opacity-75 text-dark">Agro connect.</h3>
            <h2>
              Indwara nshya yadukiriye igihingwa k'ibitoki nuko wayirinda
            </h2>
            <p><a class="btn btn-lg btn-primary" onclick="document.getElementById('id01').style.display='block'">Menya Byinshi</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="row">
    <div class="row mx-auto container-fluid my-5" id="course">
          <div class="col">
  <div class="card">
  <img src="../assets/img/card-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">IMBUTO NSHYASHYA</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">Menya byinshi</a>
  </div>
</div>
          </div>
          <div class="col">
<div class="card">
  <img src="../assets/img/card-3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">IBIGEZWEHO KWISOKO</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">Menya byinshi</a>
  </div>
</div><br>
<div class="card">
  <img src="../assets/img/bag.jfif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Akamaro kimbuto </h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">Menya byinshi</a>
  </div>
</div>
          </div>
          <div class="col">
<div class="card">
  <img src="../assets/img/card-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">AMAMENYESHA YA LETA</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">Menya byinshi</a>
  </div>
</div>
</div>
</div>
  </div>

    </div> 
    </div>
    
  </div>
</main>
</body>
</html>






<?php
}else{
  header("location:../index.php");
}
?>