<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>

<section class="section">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
        <div class="row flex-grow">
          <div class="col-lg-7 mx-auto text-white">
            <div class="row align-items-center d-flex flex-row">
              <div class="col-lg-6 text-lg-right pr-lg-4">
                <h4 class="display-1 mb-0">404</h4>
              </div>
              <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                <h5>DESKULPA!</h5>
                <h5 class="font-weight-light">Pájina nebe ita buka la hetan.</h5>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-center mt-xl-2">
                <a class="text-white font-weight-medium" href="<?= base_url('home') ?>">Back to home</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</section>
<?= $this->endSection() ?>