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
  <title>fill - profile</title>
</head>
<body>
      <!-- ----------------------- navbar start ------------------------ -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
  <img src="../assets/img/logo.jfif" alt="Logo" width="80" height="80" class="mr-3">
  Agro Connect.
</a>
<ul class="nav col-12 col-md-auto mb-2 text-center mb-md-0">
        <li><a href="../index.php" class="nav-link px-2 link-secondary active">Ahabanza</a></li>
        <li><a href="#course" class="nav-link px-2">Isoko</a></li>
        <li><a href="#about" class="nav-link px-2">Aboturibo</a></li>
      </ul>
      <div class="col-md-6 text-end">
        <button type="button" class="btn btn-primary w-25 rounded-5 p-2"><a href="farmer_signup_page.php" class="text-white">Injira</a></button>
      </div>

  </div>
</nav>

      <!-- ----------------------------navbar ends ------------------------ -->

<div class="row container-fluid align-items-center">

    
          <div class="col-6 mb-5 text-center" data-aos="fade-up" data-aos-delay="100">
            <img src="../assets/img/dodo.jfif" alt="Image" class="img-fluid h-75 w-75 rounded-3">
          </div>
          <div class="col-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <form method="POST" action="./buyer_request_insert.php" class="row g-3 w-100 mx-auto mt-3 p-md-5 rounded-3 needs-validation" novalidate>
                <?php if (isset($_GET['success'])) { ?>  
      <div class="col-md-12 alert alert-success"> 
      <strong>Tukumenyeshako </strong><?php echo  $_GET['success']; ?>
      </div>
      <?php }?>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Izina Rya mbere</label>
    <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First Name" required>
    <div class="invalid-feedback">
      please provide valid names
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Izina Rya kabiri</label>
    <input type="text" class="form-control" id="validationCustom02" name="lname" placeholder="Last Name" required>
    <div class="invalid-feedback">
      please provide valid names
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">telefone</label>
    <div class="input-group">
  <div class="input-group-prepend">
    <button class="btn btn-secondary rounded-0" type="button">+250</button>
  </div>
  <input type="number" class="form-control" placeholder="784..." name="phone" aria-label="" aria-describedby="" required>
</div>

    <div class="invalid-feedback">
      Please provide a valid email.
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">Amerecyezo:</label>
    <input type="text" class="form-control" id="validationCustom03" name="location" placeholder="aho uherereye" required>
    <div class="invalid-feedback">
      Please provide a valid location.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ingano:</label>
    <input type="number" class="form-control" id="validationCustom03" name="product" placeholder="10kg cyangwa 10t" required>
    <div class="invalid-feedback">
      Please provide a valid password.
    </div>
  </div>
  <div class="col-md-6">
    <label class="form-label">.</label>
    <select class="form-control" name="quantity">
      <option selected>Ikiro</option>
      <option>tone</option>
    </select>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" name="submit">saba kugura</button>
  </div>
</form>
          </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)

    })
  })()
</script>
</body>
</html>

<?php
if (isset($_GET['id'])) {

  $p_id = $_GET['id'];


include '../config/conn.php';
  function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {
  

  $fname = validate($_POST['fname']);
  $lname = validate($_POST['lname']);
  $phone = validate($_POST['phone']);
  $location = validate($_POST['location']);
  $quality = validate($_POST['product']);
  
  $sql = "INSERT INTO buyer_request VALUES('','$fname','$lname','$phone','$location','$quality','$p_id')";
  $result = mysqli_query($conn,$sql);
  if ($result == true) {
   echo"<script>
   window.location.href ='farmer_dashbaord.php'</script>";
  }
}
}



?>