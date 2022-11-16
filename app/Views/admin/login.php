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

<?= $this->include("admin/partials/header_scripts") ?>

<body>

<!------------------------------------------------------->

<section class="vh-100" style="background-color: #1E1E2A;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-4">Yotpo Commerce</h3>
            <h5 class="mb-4 text-secondary">Admin Login</h5>
            <?php
            if(isset($login_status)):
              if(!$login_status):
            ?>
            <div class="alert alert-danger mb-4" role="alert">
              Incorrect email address or password. Please try again.
            </div>
            <?php
              endif;
            endif;
            ?>
            <?= form_open(base_url() . "/admin"); ?>
            <div class="form-outline mb-4">
              <input name="email" type="email" id="typeEmailX-2" class="form-control form-control-lg" value="<?= set_value("email") ?>" required/>
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" required/>
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox 
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>
            -->

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <?= form_close(); ?>

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

<?= $this->include("admin/partials/footer_scripts") ?>

</body>

</html>