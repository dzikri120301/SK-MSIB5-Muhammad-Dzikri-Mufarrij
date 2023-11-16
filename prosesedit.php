<?php 
include 'koneksi.php';

// get variable from form input
$id = isset($_POST["id"]) ? $_POST["id"] : '';
$nama_barang = isset($_POST["nama_barang"]) ? $_POST["nama_barang"] : '';
$harga = isset($_POST["harga"]) ? $_POST["harga"] : '';
$gambar = isset($_FILES["gambar"]) ? $_FILES["gambar"] : '';
$ukuran = isset($_POST["ukuran"]) ? $_POST["ukuran"] : '';
$kategori = isset($_POST["kategori"]) ? $_POST["kategori"] : '';
$updated_at = date('Y-m-d h:i:s');

$target_file = "";
// Upload Proses
$target_dir = "img/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["gambar"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file ". htmlspecialchars(basename($_FILES["gambar"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_real_escape_string($conn, "UPDATE `produk` (`id`, `nama_barang`, `harga`, `gambar`, `ukuran`, `kategori`, `updated_at`) VALUES ('$id', '$nama_barang', '$harga', '$gambar', '$ukuran', '$kategori', '$updated_at');");

header("Location:admin.php");
?>
