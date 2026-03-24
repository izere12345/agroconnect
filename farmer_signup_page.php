<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/font-6/css/all.css">
	<link rel="stylesheet" type="text/css" href="../assets/boot-5/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<script src="../assets/boot-5/js/bootstrap.bundle.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <title>Create - Farmer</title>
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
       <li><a href="#course" class="nav-link px-3">Isoko</a></li>
        <li><a href="#about" class="nav-link px-3">Aboturibo</a></li>
      </ul>
      <!-- <div class="col-md-6 text-end">
        <button type="button" class="btn btn-primary w-25 rounded-5 p-2"><a href="">Injira</a></button>
      </div> -->

  </div>
</nav>

      <!-- ----------------------------navbar ends ------------------------ -->

    <div class="container-fluid">
<form method="POST" action="farmer_signup_check.php" class="row g-3 w-50 mx-auto mt-2 p-2 p-md-3 rounded-3 bg-body-tertiary needs-validation" novalidate>
 
      <?php if (isset($_GET['error'])) { ?>  
      <div class="col-md-12 alert alert-danger"> 
      <strong>Mwihangane, </strong><?php echo  $_GET['error']; ?>
      </div>
      <?php }?>
  
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" autocomplete="none" name="fname" required>
    <div class="invalid-feedback">
      please provide valid names
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" autocomplete="none" name="lname" required>
    <div class="invalid-feedback">
      please provide valid names
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Phone</label>
    <div class="input-group has-validation">
      <input type="number" class="form-control" id="validationCustomUsername" autocomplete="none" name="phone" required>
      <span id="message"></span>
      <div class="invalid-feedback">
        Please choose a phone.
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">Email</label>
    <input type="email" class="form-control" id="validationCustom03" autocomplete="none" name="email" required>
    <div class="invalid-feedback">
      Please provide a valid email.
    </div>
  </div>
  <div class="col-12">
    <label for="validationCustom04" class="form-label" autocomplete="none">Gender</label>
    <select class="form-select" id="validationCustom04" name="gender" required>
    <option value="" >...</option>
    <option >Female</option>
    <option >Male</option>
    <option >Better not Say</option>
      
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">password</label>
    <input type="password" class="form-control" id="validationCustom03" name="pswd" autocomplete="none" required>
    <div class="invalid-feedback">
      Please provide a valid password.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Emera amategeko na amabwirizwa <a href="#">terms&conditions.</a>
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Ohereza Ubusabe</button>
  </div>
</form>
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