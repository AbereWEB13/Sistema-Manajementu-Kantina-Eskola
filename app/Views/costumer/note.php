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
                    <h4 class="text-primary mt-3">Detallu Kostumer</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>

                                <tr>
                                    <th width="20%" class="text-dark fw-bold">
                                        <i class="fas fa-user"></i> Naran Kostumer
                                    </th>
                                    <td><?= $costumer['naran'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-venus-mars"></i> Jéneru
                                    </th>
                                    <td><?= $costumer['seksu'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-phone"></i> Numeru Telemovel
                                    </th>
                                    <td><?= $costumer['numeru_telemovel'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-map-marker-alt"></i> Enderesu Kostumer
                                    </th>
                                    <td><?= $costumer['enderesu'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-envelope"></i> Email
                                    </th>
                                    <td><?= $costumer['email'] ?></td>
                                </tr>

                                <tr>
                                    <th class="text-dark fw-bold">
                                        <i class="fas fa-image"></i> Imajen Kostumer
                                    </th>
                                    <td>
                                        <?php if (!empty($costumer['image'])) : ?>
                                            <img src="<?= base_url('uploads/' . $costumer['image']) ?>"
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