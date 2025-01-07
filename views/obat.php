<!DOCTYPE html>
<html>
<head>
    <title>Etalase Obat</title>
</head>
<body>
    <h2>Daftar Obat</h2>
    <ul>
        <?php foreach ($data as $obat) { ?>
            <li><?php echo $obat['nama_obat'] . ' - ' . $obat['harga']; ?></li>
        <?php } ?>
    </ul>
</body>
</html>