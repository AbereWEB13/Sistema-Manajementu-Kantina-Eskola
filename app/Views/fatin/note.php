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
                    <h4 class="text-primary mt-3">View Fatin</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>

                                <tr>
                                    <th width="20%" class="text-dark fw-bold">
                                        <i class="fas fa-user"></i> Kode Fatin
                                    </th>
                                    <td><?= $fatin['kode_fatin'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-store"></i> Naran Fatin
                                    </th>
                                    <td><?= $fatin['naran_fatin'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-calendar-plus"></i> Oras Loke
                                    </th>
                                    <td><?= $fatin['oras_loke'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-calendar-check"></i> Oras Taka
                                    </th>
                                    <td><?= $fatin['oras_taka'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-image"></i> Lokasaun
                                    </th>
                                    <td>
                                        <?php if (!empty($fatin['image'])) : ?>
                                            <img src="<?= base_url('uploads/' . $fatin['image']) ?>"
                                                alt="Kostumer Photo" width="120"
                                                style="border-radius: 8px; border: 1px solid #ddd;">
                                        <?php else : ?>
                                            <span class="text-muted">Imajen la iha</span>
                                        <?php endif; ?>
                                    </td>
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