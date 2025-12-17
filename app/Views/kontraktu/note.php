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
                    <h4 class="text-primary mt-3">View Kontraktu</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>

                                <tr>
                                    <th width="20%" class="text-dark fw-bold">
                                        <i class="fas fa-user"></i> Naran
                                    </th>
                                    <td><?= $kontraktu['naran'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-store"></i> Naran Fatin
                                    </th>
                                    <td><?= $kontraktu['naran_fatin'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-calendar-plus"></i> Data Hahu
                                    </th>
                                    <td><?= $kontraktu['data_hahu'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-calendar-check"></i> Data Remata
                                    </th>
                                    <td><?= $kontraktu['data_remata'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-money-bill-wave"></i> Total Osan $
                                    </th>
                                    <td><?= $kontraktu['total_osan'] ?></td>
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