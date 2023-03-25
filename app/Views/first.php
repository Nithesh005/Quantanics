<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/form.css?version=<?php echo rand(); ?>">
</head>

<body>
  <!-- <button onclick="myFunction()" id="on"><i class='bx bxs-joystick-button'></i></button> -->
  <div class="container head">
    <div class="row">
      <div class="col-lg-4 col-md-3 col-sm-2">
        <!-- One of three columns -->
      </div>
      <div class="col-lg-4 col-md-6 col-sm-8">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Intern Login</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Admin Login</button>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-3 col-sm-2">
        <!-- One of three columns -->
      </div>
    </div>
  </div>

  <!-- Form -->
  <div id="myDIV" class="container">
    <div class="row">
      <div class="col-lg-4  col-md-2">
        <!-- One of three columns -->
      </div>
      <!-- second col -->
      <div class="col-lg-4 col-md-8 col-sm-12">
        <div class="tab-content form" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <form class="signin shadow p-3 mb-5 bg-white rounded">
              <!-- <p>Login Form</p> -->
              <h3>Login Form</h3> <br>
              <div class="form-outline mb-4 input-container">
                <input type="Text" id="form2Example11" class="input" placeholder=" " />
                <div class="cut"></div>
                <label for="form2Example11" class="placeholder label">Register No </label>
              </div>
              <div class="form-outline mb-4 input-container">
                <input type="date" id="form2Example22" class="input" placeholder=" " />
                <div class="cut"></div>
                <label for="form2Example11" class="placeholder">DOB</label>
              </div>
              <div class="same-line">
                <div class="left-paragraph"><a class="text-end blue" href="">Create New Account</a></div>
                <div class="right-paragraph"><a class="text-end blue" href="">Forgot password?</a></div>
              </div>
              <br> <br>
              <div class="pt-1 mb-5 pb-1">
                <button class="btn btn-outline-primary" type="button">Login</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade shadow p-3 mb-5 bg-white rounded" id="pills-profile" role="tabpanel"
            aria-labelledby="pills-profile-tab">
            <h2>Admin Login</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-2">
        <!-- One of three columns -->
      </div>
    </div>
  </div>
  </div>
</body>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script>
</script>

</html>