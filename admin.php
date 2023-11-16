<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tambah Sepatu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM produk AS pd JOIN transaksi AS t ON t.id_produk = pd.id JOIN pembeli AS pb ON pb.id = t.id_pembeli JOIN pembayaran AS pn ON pn.id = t.id_pembayaran ORDER BY updated_at DESC;");
                ?>
               <center><h1>DATA PENJUALAN SEPATU:</h1> </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php?nama_halaman=NAMA HALAMAN NYA"> Tambah </a> 
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            NO
                        </th>
                        <th>
                            Nama Barang
                        </th>
                        <th>
                            Harga
                        </th>
                        <th>
                            Gambar
                        </th>
                        <th>
                            Ukuran
                        </th>
                        <th>
                            Kategori
                        </th>
                        <th>
                            Di Tambah
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                        <?php 
                        if(mysqli_num_rows($query)>0){ 
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td> <?php echo $data["id"] ?></td>
                            <td> <?php echo $data["nama_barang"] ?> </td>
                            <td> <?php echo $data["harga"] ?> </td>
                            <td> <img src="<?php echo $data["gambar"] ?>" width="100"> </td>
                            <td> <?php echo $data["ukuran"] ?></td>
                            <td> <?php echo $data["kategori"] ?></td>
                            <td> <?php echo $data["updated_at"] ?></td>
                            <td> <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="label label-danger"> Delete </a> &nbsp; <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning"> Edit </a></td>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>