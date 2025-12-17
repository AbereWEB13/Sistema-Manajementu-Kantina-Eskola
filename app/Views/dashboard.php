<?= $this->extend("layout\main") ?>
<?= $this->section("content") ?>

<div class="row">

    <!-- Card Produtu -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon purple">
                <i class="lni lni-package"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Produtu</h6>
                <h3 class="text-bold mb-10"><?= $total_produto ?></h3>
                <p class="text-sm text-success">
                    <i class="lni"></i>
                    <span class="text-gray"></span>
                </p>
            </div>
        </div>
    </div>

    <!-- Card Order -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon success">
                <i class="lni lni-cart-full"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Order</h6>
                <h3 class="text-bold mb-10"><?= $total_order ?></h3>
                <p class="text-sm text-success">
                    <i class="lni"></i>
                    <span class="text-gray"></span>
                </p>
            </div>
        </div>
    </div>

    <!-- Card Kontraktu -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon warning">
                <i class="lni lni-briefcase"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Kontraktu</h6>
                <h3 class="text-bold mb-10"><?= $total_kontraktu ?></h3>
                <p class="text-sm text-success">
                    <i class="lni"></i>
                    <span class="text-gray"></span>
                </p>
            </div>
        </div>
    </div>

    <!-- Card Pagamentu -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon danger">
                <i class="lni lni-coin"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Pagamentu</h6>
                <h3 class="text-bold mb-10"><?= $total_pagamentu ?></h3>
                <p class="text-sm text-success">
                    <i class="lni"></i>
                    <span class="text-gray"></span>
                </p>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>