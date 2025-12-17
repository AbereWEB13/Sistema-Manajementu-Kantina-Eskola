<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="section-body">
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center;">
                        <img src="<?= base_url(); ?>public/assets/images/logo/kantina.png" alt="Logo" height="100px" />
                        <h6 class="mt-2">Manajementu Kantina Eskola</h6>
                    </div>
                    <h4 class="text-primary mt-3">Detallu Pagamentu</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th width="20%" class="text-dark fw-bold">
                                        <i class="fas fa-user"></i> Naran Pagamentu
                                    </th>
                                    <td><?= $pagamentu['naran'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-money-bill-wave"></i>Osan ($)
                                    </th>
                                    <td><?= $pagamentu['osan'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-calendar-check"></i> Data Pagamentu
                                    </th>
                                    <td><?= $pagamentu['data_pagamentu'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-check-circle"></i> Estatutu Pagamentu
                                    </th>
                                    <td><?= $pagamentu['estatutu'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-sync"></i> Data Atualizasaun
                                    </th>
                                    <td><?= $pagamentu['data_atualiza'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>