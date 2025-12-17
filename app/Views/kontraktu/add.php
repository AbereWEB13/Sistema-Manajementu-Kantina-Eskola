<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div style="text-align: center;">
          <img src="<?= base_url(); ?>public/assets/images/logo/kantina.png" alt="Logo" height="100px" />
          <h6>Manajementu Kantina Eskola</h6>
        </div>
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Aumenta Kontraktu</h5>
        </div>
        <div class="card-body">
          <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger alert-dismissible show fade">
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>×</span>
                </button>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                  Error: <?= esc($error) ?>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
          <form action="<?= base_url('kontraktu/store') ?>" method="post">
            <?= csrf_field() ?>
            <div class="row">
              <div class="col-md-6"> <!-- Kolom pertama -->

                <div class="mb-3">
                  <label class="form-label" for="id_costumer">Naran Kontraktu</label>
                  <div class="select-style-1">
                    <div class="select-position">
                      <select class="form-control" name="id_costumer" id="id_costumer">
                        <?php foreach ($costumer as $key => $row): ?>
                          <option value="<?= $row['id_costumer']; ?>">
                            <?= $row['naran']; ?>
                          </option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Naran Fatin
                  </label>
                  <div class="select-style-1">
                    <div class="select-position">
                      <select class="form-control" name="id_fatin">
                        <?php foreach ($fatin as $key => $row): ?>
                          <option value="<?= $row['id_fatin']; ?>"><?= $row['naran_fatin']; ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Data Hahu</label>
                  <input type="date" class="form-control" id="basic-default-company" placeholder="dd/mm/yyyy" name="data_hahu">
                </div>
              </div>
              <!-- taka koluna primeriu -->

              <div class="col-md-6"> <!-- koluna segundu -->

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Data Remata</label>
                  <input type="date" class="form-control" id="basic-default-company" placeholder="dd/mm/yyyy" name="data_remata">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Total Osan $</label>
                  <input type="decimal" class="form-control" id="basic-default-company" placeholder="$" name="total_osan">
                </div>
              </div>
            </div>
            <!-- taka koluna kedua -->

            <button type="submit" class="btn btn-primary btn-icon-text">
              <i class="typcn typcn-document btn-icon-prepend"></i>
              Submit
            </button>
            <a href="<?= base_url('kontraktu') ?>" class="btn btn-secondary">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?= $this->endSection() ?>