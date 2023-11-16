<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
<?php
include 'koneksi.php';
$produk = mysqli_query($conn,"SELECT * from produk where id='$_GET[id]'");

    while($b = mysqli_fetch_array($prosuk)){
        $id = $b["id"];
        $nama_barang = $b["nama_barang"];
        $harga = $b["harga"];
        $gambar = $b["gambar"];
        $ukuran = $b["ukuran"];
        $kategori = $b["kategori"];
    }
?>
ADD PAGE
<form action="prosesedit.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>No</td>
        <td>:</td>
        <td><input type="text" name="id"></td>
    </tr>
    <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="nama_barang"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td><input type="number" name="harga"></td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input type="file" name="gambar" id="gambar"></td>
    </tr>
    <tr>
        <td>Ukuran</td>
        <td>:</td>
        <td>
            <select name="ukuran" id="ukuran">
                <?php
                // Fetch data from the "items" table
                $query = mysqli_query($con, "SELECT * FROM produk");
                if(mysqli_num_rows($query)>0){
                    while($data = mysqli_fetch_array($query)){
                        echo "<option value='" . $data["id"] . "'>" . $data["ukuran"] . "</option>";
                    }
                } else {
                    echo "<option value=''>No items available</option>";
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td>:</td>
        <td><input type="text" name="kategori"></td>
    </tr>
</table>
<input type="submit" name="Submit" value="Simpan">
</form>
</body>
</html>