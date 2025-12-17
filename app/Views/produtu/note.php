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
                    <h4 class="text-primary mt-3">Detallu Produtu</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>

                                <tr>
                                    <th width="10%">Naran Produtu</th>
                                    <td><?= $produtu['naran_produtu'] ?></td>
                                </tr>
                                <tr>
                                    <th>Kategoria</th>
                                    <td><?= $produtu['naran_kategoria'] ?></td>
                                </tr>
                                <tr>
                                    <th>Presu ($)</th>
                                    <td><?= $produtu['presu'] ?></td>
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