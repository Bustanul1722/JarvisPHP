<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container my-5">
        <h1>Form Produk</h1>
        <form action="Daftar_Produk.php" method="post">
            <div class="form-group">
                <label for="namabarang">Nama Barang:</label> 
                <input id="namabarang" name="namabarang" placeholder="Masukkan nama barang" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label> 
                <input id="harga" name="harga" placeholder="Masukkan harga barang" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label> 
                <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi barang" cols="40" rows="3" class="form-control" required="required"></textarea>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label> 
                <input id="stok" name="stok" placeholder="Masukkan stok barang" type="text" required="required" class="form-control">
            </div> 
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>