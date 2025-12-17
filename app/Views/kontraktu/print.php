<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Kontraktu</title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
    <link rel="shortcut icon" href="<?= base_url(); ?>public/assets/images/logo/kantina.png" type="image/x-icon" />
</head>

<body>

    <div class="card-header">
        <h3>Nota Kontraktu</h3>
        <img src="<?= base_url(); ?>public/assets/images/logo/kantina.png" alt="Logo" />
        <h6>Manajementu Kantina Eskola</h6>
    </div>

    <table>
        <tr>
            <th>NO</th>
            <th>Naran Kontraktu</th>
            <th>Nara Fatin</th>
            <th>Data Hahu</th>
            <th>Data Remata</th>
            <th>Total Osan $</th>
        </tr>

        <?php
        $no = 1;
        foreach ($kontraktu as $key => $row) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->naran ?></td>
                <td><?= $row->naran_fatin ?></td>
                <td><?= $row->data_hahu ?></td>
                <td><?= $row->data_remata ?></td>
                <td><?= number_format($row->total_osan, 2, '.', ','); ?></td>
            </tr>
        <?php endforeach; ?>
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
            // Redirect ke halaman CRUD
            window.location.href = "<?= base_url('kontraktu') ?>";
        };
    </script>

</body>

</html>