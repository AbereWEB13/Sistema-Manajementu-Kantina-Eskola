<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= base_url(); ?>public/assets/images/logo/kantina.png" type="image/x-icon" />
    <title>Sign Up</title>

    <!-- ========== All CSS files linkup ========= -->
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
                        <h1 class="text-primary mb-10">Hahu Ona</h1>
                        <p class="text-medium">
                            Komesa hahu kria esperiénsia neebé diak liu tebes
                            <br class="d-sm-block" />
                            ba kostumer sira.
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
            <div class="signup-wrapper">
                <div class="form-wrapper">
                    <h6 class="mb-10">Sign Up Form</h6>
                    <p class="text-sm mb-10">
                        Hahu kria esperiensia neebé diak liu tebes ba kostumer sira.
                    </p>
                    <form method="POST" action="<?= base_url('/auth/register') ?>" class="pt-3">
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
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" autofocus />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" autofocus />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-12">
                                <div class="form-check checkbox-style mb-30">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox-not-robot" />
                                    <label class="form-check-label" for="checkbox-not-robot">
                                        Hau laos Robot</label>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-12">
                                <div class="button-group d-flex justify-content-center flex-wrap">
                                    <button class="main-btn primary-btn btn-hover w-100 text-center">
                                        Sign Up
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                    <div class="singup-option pt-40">
                        <p class="text-sm text-medium text-center text-gray">
                            Sign Up Fasil Ho
                        </p>

                        <p class="text-sm text-medium text-dark text-center">
                            Ita nia iha akun? <a href="<?= base_url('/auth/login'); ?>">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
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