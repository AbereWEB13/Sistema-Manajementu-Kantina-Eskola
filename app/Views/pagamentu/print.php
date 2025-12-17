<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pagamentu</title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
    <link rel="shortcut icon" href="<?= base_url(); ?>public/assets/images/logo/kantina.png" type="image/x-icon" />
</head>

<body>

    <div class="card-header">
        <h3>Nota Pagamentu</h3>
        <img src="<?= base_url(); ?>public/assets/images/logo/kantina.png" alt="Logo" />
        <h6>Manajementu Kantina Eskola</h6>
    </div>

    <table>
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Naran Pagamentu</th>
                <th>Osan $</th>
                <th>Data Pagamentu</th>
                <th>Estatutu</th>
                <th>Data Atualiza</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pagamentu as $key => $row) : ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row['naran'] ?></td>
                    <td><?= number_format($row['osan'], 2, '.', ',') ?></td>
                    <td><?= $row['data_pagamentu'] ?></td>
                    <td><?= $row['estatutu'] ?></td>
                    <td><?= $row['data_atualiza'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <div class="signature-section">
        <center>
            <h4>(..............................)</h4>
            <h6>Signature</h6>
        </center>
    </div>

    <div>
        <h4>(..............................)</h4>
        <h5>Salvador Erto Marcal Gomes</h5>
    </div>

    <script>
        window.onload = function() {
            window.print();
        };

        window.onafterprint = function() {
            // Redirect ke halaman CRUD pagamentu
            window.location.href = "<?= base_url('pagamentu') ?>";
        };
    </script>

</body>

</html>