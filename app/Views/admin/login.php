<?php
/**
 * Yotpo Commerce
 * Path: app/Views/admin/login.php
 * Author: eleazer.ababa181@gmail.com
 * Description: This is the admin login page
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $pageTitle ?> - Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?= base_url(); ?>/public/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/public/assets/img/favicon.ico">

    <!-- BOOTSTRAP 5 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/bootstrap.min.css">

    <!-- MBD CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/fontawesome.min.css">

    <style>
    </style>
</head>
<body>

<!------------------------------------------------------->

<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-4">Yotpo Commerce</h3>
            <h5 class="mb-4 text-secondary">Admin Login</h5>

            <form method="post">
            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox 
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>
            -->

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>

            <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------------------------------------------------->

<!-- Start Script -->
<script src="<?= base_url(); ?>/public/assets/js/jquery-1.11.0.min.js"></script>
<script src="<?= base_url(); ?>/public/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= base_url(); ?>/public/assets/js/bootstrap.bundle.min.js"></script>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
<!-- End Script -->
</body>

</html>