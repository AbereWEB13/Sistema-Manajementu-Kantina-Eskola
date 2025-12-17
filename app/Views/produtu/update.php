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
                    <h5 class="mb-0">Update Produtu</h5>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <p>Error: <?= esc($error) ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('produtu/update') ?>" method="post">


                        <input type="hidden" name="id_produtu" value="<?= $produtu['id_produtu'] ?>">



                        <div class="row">
                            <div class="col-md-6"> <!-- Kolom pertama -->

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Naran Produtu</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="naran_produtu" value="<?= $produtu['naran_produtu'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Naran Kategoria</label>
                                    <div class="select-style-1">
                                        <div class="select-position">
                                            <select class="form-control" name="id_kategoria">
                                                <?php foreach ($kategoria as $row): ?>
                                                    <option value="<?= $row['id_kategoria']; ?>" <?= $row['id_kategoria'] == $produtu['id_kategoria'] ? 'selected' : '' ?>><?= $row['naran_kategoria']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6"> <!-- Kolom Kedua-->
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Presu $</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="presu" value="<?= $produtu['presu'] ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-icon-text">
                            Edit
                            <i class="typcn typcn-document btn-icon-append"></i>
                        </button>
                        <a href="<?= base_url('produtu') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>