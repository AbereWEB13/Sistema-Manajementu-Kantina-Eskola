<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Order</title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
    <link rel="shortcut icon" href="<?= base_url(); ?>public/assets/images/logo/kantina.png" type="image/x-icon" />
</head>

<body>
    <div class="card-header">
        <h3>Nota Order</h3>
        <img src="<?= base_url(); ?>public/assets/images/logo/kantina.png" alt="Logo" />
        <h6>Manajementu Kantina Eskola</h6>
    </div>
    <table>
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Naran Kostumer</th>
                <th>Produtu</th>
                <th>Presu $</th>
                <th>Kuantidade</th>
                <th>Total Presu $</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order as $key => $row) : ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row['naran'] ?></td>
                    <td><?= $row['naran_produtu'] ?></td>
                    <td><?= number_format($row['presu'], 2, '.', ',') ?></td>
                    <td><?= $row['kuantidade'] ?></td>
                    <td><?= number_format($row['presu'] * $row['kuantidade'], 2, '.', ',') ?></td>
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
            // Redirect ke halaman CRUD produk/order
            window.location.href = "<?= base_url('order') ?>";
        };
    </script>
</body>

</html>
