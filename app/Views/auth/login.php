<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <!-- ========== All CSS files linkup ========= -->
  <link rel="shortcut icon" href="<?= base_url(); ?>public/assets/images/logo/kantina.png" type="image/x-icon" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/lineicons.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/main.css" />
</head>

<body>
  <div class="row g-0 auth-row">
    <div class="col-lg-6">
      <div class="auth-cover-wrapper bg-primary-100">
        <div class="auth-cover">
          <div class="title text-center">
            <h1 class="text-primary mb-10">Bemvidu Kantina Eskola</h1>
            <p class="text-medium">
              Sign in ba Ita nia Akun neebé iha ona atu kontinua
            </p>
          </div>
          <div class="cover-image">
            <img src="<?= base_url(); ?>public/assets/images/auth/signin-image.svg" alt="" />
          </div>
          <div class="shape-image">
            <img src="<?= base_url(); ?>public/assets/images/auth/shape.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- end col -->
    <div class="col-lg-6">
      <div class="signin-wrapper">
        <div class="form-wrapper">
          <h6 class="mb-10">Sign In Form</h6>
          <p class="text-sm mb-10">
            Hahu kria esperiénsia uza diak liu ba ita nia kostumer sira.
          </p>
          <form method="POST" action="<?= base_url("/auth/login",) ?>" class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-12">
                <div class="input-style-1">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus />
                </div>
              </div>
              <!-- end col -->
              <div class="col-12">
                <div class="input-style-1">
                  <label>Password</label>
                  <input type="password" placeholder="Password" />
                </div>
              </div>
              <!-- end col -->
              <div class="col-xxl-6 col-lg-12 col-md-6">
                <div class="form-check checkbox-style mb-30">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox-remember" />
                  <label class="form-check-label" for="checkbox-remember">
                    Hare Hau iha tempu oin</label>
                </div>
              </div>
              <!-- end col -->
              <!-- end col -->
              <div class="col-12">
                <div class="button-group d-flex justify-content-center flex-wrap">
                  <button class="main-btn primary-btn btn-hover w-100 text-center">
                    Sign In
                  </button>
                </div>
              </div>
            </div>
            <!-- end row -->
          </form>
          <div class="singin-option pt-40">
            <p class="text-sm text-medium text-center text-gray">
              Tama Sign In ho fasilidade
            </p>
            <p class="text-sm text-medium text-dark text-center">
              Seidauk iha Akun?
              <a href="<?= base_url('/auth/register'); ?>"> Kria Akun Foun</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- end col -->
  </div>
  <!-- end row -->
  <script src="<?= base_url(); ?>public/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>public/assets/js/Chart.min.js"></script>
  <script src="<?= base_url(); ?>public/assets/js/dynamic-pie-chart.js"></script>
  <script src="<?= base_url(); ?>public/assets/js/moment.min.js"></script>
  <script src="<?= base_url(); ?>public/assets/js/fullcalendar.js"></script>
  <script src="<?= base_url(); ?>public/assets/js/jvectormap.min.js"></script>
  <script src="<?= base_url(); ?>public/assets/js/world-merc.js"></script>
  <script src="<?= base_url(); ?>public/assets/js/polyfill.js"></script>
  <script src="<?= base_url(); ?>public/assets/js/main.js"></script>
</body>

</html>