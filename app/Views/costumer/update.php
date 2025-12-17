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
          <h5 class="mb-0">Update Kostumer</h5>
        </div>
        <div class="card-body">
          <form action="<?= base_url('costumer/update') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id_costumer" value="<?= $costumer['id_costumer'] ?>">
            <div class="row">
              <div class="col-md-6"> <!-- Kolom pertama -->

                <div class="mb-3">
                  <label class="form-label" for="naran">Naran costumer</label>
                  <input type="text" class="form-control" id="naran" placeholder="Prene Naran" name="naran" value="<?= $costumer['naran'] ?>">
                </div>


                <div class="mb-3">
                  <label class="form-label" for="jenis_kelamin">Seksu</label>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="seksu" id="membershipRadios1" value="Mane" class="custom-switch-input" <?= $costumer['seksu'] == 'Mane' ? 'checked' : '' ?>>
                          Mane
                          <i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="seksu" id="membershipRadios2" value="Feto" class="custom-switch-input" <?= $costumer['seksu'] == 'Feto' ? 'checked' : '' ?>>
                          Feto
                          <i class="input-helper"></i></label>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="mb-3">
                  <label class="form-label" for="numeru_telemovel">Numeru Telemovel</label>
                  <input type="text" class="form-control" id="numeru_telemovel" placeholder="Prene Numeru Telemovel" name="numeru_telemovel" value="<?= $costumer['numeru_telemovel'] ?>">
                </div>
              </div>

              <!-- Kolom kedua -->
              <div class="col-md-6">

                <div class="mb-3">
                  <label class="form-label" for="enderesu">Enderesu</label>
                  <input type="text" class="form-control" id="enderesu" placeholder="Prense Enderesu" name="enderesu" value="<?= $costumer['enderesu'] ?>">
                </div>


                <div class="mb-3">
                  <label class="form-label" for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Prense Email" name="email" value="<?= $costumer['email'] ?>">
                </div>


                <div class="mb-3">
                  <label class="form-label" for="image">Imajen</label>
                  <div class="mb-3">
                    <?php if (!empty($costumer['image'])) : ?>
                      <img id="image-preview" src="<?= base_url('uploads/' . $costumer['image']) ?>" width="110" height=110" class="mb-2" />
                    <?php else : ?>
                      <img id="image-preview" src="<?= base_url('uploads/default.png') ?>" width="100" height="100" class="mb-2" />
                    <?php endif; ?>
                    <input type="file" name="image" id="image-upload" class="form-control">
                    <input type="hidden" name="old_image" value="<?= $costumer['image'] ?>">
                  </div>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-icon-text">
              Edit
              <i class="typcn typcn-document btn-icon-append"></i>
            </button>
            <a href="<?= base_url('costumer') ?>" class="btn btn-secondary">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>