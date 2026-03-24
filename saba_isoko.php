<?php
include_once '../config/conn.php';

session_start();
if (isset($_SESSION['phone'])) {
  $phone = $_SESSION['phone'];
  $sql = "SELECT * FROM users WHERE phone ='$phone'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
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
  <link rel="stylesheet" type="text/css" href="try.css">
  <script src="../assets/boot-5/js/bootstrap.bundle.js"></script>
  <script src="../assets/jquery/jquery.min.js"></script>
  <title>fill - profile</title>
</head>
<body>
      <!-- ----------------------- navbar start ------------------------ -->
<main class="row">
  <div class="col-3">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-primary" style="width: 280px; height: 98vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <img src="../assets/img/logo.jfif" class="rounded-5" alt="Logo" width="80" height="80" class="mr-3">
      <span class="fs-4 text-capitalize"><strong> Urakaza Neza</strong></span>
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
  <div class="col-8">
    <div class="container-fluid my-5">
<form method="POST" action="saba_isoko_check.php" class="row g-3 w-100 mx-auto mt-2 p-2 p-md-3 rounded-3 bg-body-tertiary needs-validation" novalidate>
 
      <?php if (isset($_GET['error'])) { ?>  
      <div class="col-md-12 alert alert-success"> 
      <strong>Murakoze, </strong><?php echo  $_GET['error']; ?>
      </div>
      <?php }?>
  
 <div class="col-12">
    <label for="validationCustom04" class="form-label" autocomplete="none">Gender</label>
    <select class="form-select" id="validationCustom04" name="igihingwa" required>
    <option value="">hitamo igihigwa</option>
    <option value="ibigori">ibigori</option>
    <option value="ibishyimbo">ibishyimbo</option>
    <option value="carrot">carrot</option>
    <option value="ibirayi">ibirayi</option>
    <option value="urusenda">urusenda</option>
    <option value="Ingano">ingano</option>
    <option value="ibijumba">ibijumba</option>
    <option value="ikawa">ikawa</option>
      
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Ingano</label>
    <div class="input-group has-validation">
      <input type="number" class="form-control" id="validationCustomUsername" name="ingano" required>
      <span id="message"></span>
      <div class="invalid-feedback">
        Please choose a phone.
      </div>
    </div>
  </div>
  <div class="col-12">
    <label for="validationCustom04" class="form-label">Aho Uherereye</label>
    <input type="text" class="form-control" id="validationCustom03" name="location" required>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">Igiciro ku kiro</label>
    <input type="email" class="form-control" id="validationCustom03" name="igiciro" required>
    <div class="invalid-feedback">
      Please provide a valid email.
    </div>
  </div>
  
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">Itariki</label>
    <input type="date" class="form-control" id="validationCustom03" name="date" required>
    <div class="invalid-feedback">
      Please provide a valid password.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Saba Isoko</button>
  </div>
</form>
    </div>
  </div>
</main>
</body>
</html>






<?php
}
?>