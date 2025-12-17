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
                    <h5 class="mb-0">Update Order</h5>
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

                    <form action="<?= base_url('order/update') ?>" method="post">
                        <input type="hidden" name="id_order" value="<?= $order['id_order'] ?>">
                        <div class="row">
                            <div class="col-md-6"> <!-- Kolom pertama -->

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Naran Kostumer</label>
                                    <div class="select-style-1">
                                        <div class="select-position">
                                            <select class="form-control" name="id_costumer">
                                                <?php foreach ($costumer as $row): ?>
                                                    <option value="<?= $row['id_costumer']; ?>" <?= $row['id_costumer'] == $order['id_costumer'] ? 'selected' : '' ?>><?= $row['naran']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Produtu</label>
                                    <div class="select-style-1">
                                        <div class="select-position">
                                            <select class="form-control" name="id_produtu">
                                                <?php foreach ($produtu as $row): ?>
                                                    <option value="<?= $row['id_produtu']; ?>" <?= $row['id_produtu'] == $order['id_produtu'] ? 'selected' : '' ?>><?= $row['naran_produtu']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6"> <!-- Kolom Kedua-->
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Presu $</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="presu" value="<?= $order['presu'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="kuantidade">Kuantidade</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="kuantidade"
                                        name="kuantidade"
                                        value="<?= $order['kuantidade'] ?>"
                                        min="0"
                                        step="1">
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-icon-text">
                            Edit
                            <i class="typcn typcn-document btn-icon-append"></i>
                        </button>
                        <a href="<?= base_url('order') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>