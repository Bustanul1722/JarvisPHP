<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border-bottom: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
</body>
</html>

<?php
$products = [
    ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
    ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
    ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
    ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
    ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
];
if ($_SERVER['REQUEST_METHOD'] == "POST"){ ?>
    <table border="0">
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($products as $data) { ?>
            <tr>
                <td><?php echo $data['barang'] ?></td>
                <td><?= $data['Harga'] ?></td>
                <td><?= $data['Deskripsi'] ?></td>
                <td><?= $data['Stok'] ?></td>
            </tr>
        <?php } ?>
        <tr>
                <td><?php echo $_POST['namabarang'] ?></td>
                <td><?= $_POST['harga'] ?></td>
                <td><?= $_POST['deskripsi'] ?></td>
                <td><?= $_POST['stok'] ?></td>
        </tr>
    </table>
<?php
} else {
    header('location: Form_Produk.php');
}
?>