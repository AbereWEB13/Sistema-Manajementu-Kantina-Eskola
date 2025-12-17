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
                    <h5 class="mb-0">Aumenta Kostumer</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('costumer/store') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="row">
                            <div class="col-md-6"> <!-- Kolom pertama -->


                                <div class="mb-3">
                                    <label class="form-label" for="naran">Naran Kostumer</label>
                                    <input type="text" class="form-control" id="naran" placeholder="Naran Kostumer ..." name="naran" value="<?= old('naran') ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="jenis_kelamin">Seksu</label>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="seksu" id="membershipRadios1" value="Mane">
                                                    Mane
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </div>

                                        <div class="col-sm-5">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="seksu" id="membershipRadios2" value="Feto">
                                                    Feto
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- taka koluna primeriu -->

                                <div class="mb-3">
                                    <label class="form-label" for="numeru_telemovel">Numeru Telefone</label>
                                    <input type="text" class="form-control" id="numeru_telemovel" placeholder="Numeru Telefone ..." name="numeru_telemovel" value="<?= old('numeru_telemovel') ?>">
                                </div>
                            </div>

                            <div class="col-md-6"> <!-- Kolom kedua -->


                                <div class="mb-3">
                                    <label class="form-label" for="enderesu">Enderesu</label>
                                    <input type="text" class="form-control" id="enderesu" placeholder="Enderesu ..." name="enderesu" value="<?= old('enderesu') ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email ..." name="email" value="<?= old('email') ?>">
                                </div>


                                <label class="form-label" for="image">Imajen</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info" name="image" placeholder="Choose Image">
                                    <span class="input-group-append">
                                    </span>
                                </div>
                            </div>
                            <!-- taka koluna segundu -->
                        </div>
                        <button type="submit" class="btn btn-primary btn-icon-text">
                            <i class="typcn typcn-document btn-icon-prepend"></i>
                            Submit
                        </button>
                        <a href="<?= base_url('costumer') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>