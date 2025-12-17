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
                    <h5 class="mb-0">Update Pagamentu</h5>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-bs-dismiss
                                    <span>×</span>
                                </button>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <p>Error: <?= esc($error) ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('pagamentu/update') ?>" method="post">
                        <input type="hidden" name="id_pagamentu" value="<?= $pagamentu['id_pagamentu'] ?>">
                        <div class="row">
                            <div class="col-md-6"> <!-- Kolom pertama -->

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Naran </label>
                                    <select class="form-control" name="id_costumer">
                                        <?php foreach ($costumer as $row): ?>
                                            <option value="<?= $row['id_costumer']; ?>" <?= $row['id_costumer'] == $pagamentu['id_costumer'] ? 'selected' : '' ?>><?= $row['naran']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Osan $</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="osan" value="<?= $pagamentu['osan'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Data Pagamentu</label>
                                    <input type="date" class="form-control" id="basic-default-company" name="data_pagamentu" value="<?= $pagamentu['data_pagamentu'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6"> <!-- Kolom kedua -->


                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Status</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="estatutu" value="<?= $pagamentu['estatutu'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Data Atualiza</label>
                                    <input type="date" class="form-control" id="basic-default-company" name="data_atualiza" value="<?= $pagamentu['data_atualiza'] ?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-icon-text">
                            Edit
                            <i class="typcn typcn-document btn-icon-append"></i>
                        </button>
                        <a href="<?= base_url('pagamentu') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>