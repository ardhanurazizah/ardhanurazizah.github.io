<?php 
    include "koneksi.php";

    $target_path = "gambar/";
    $target_path = $target_path . basename(
        $_FILES['foto']['name']);

    move_uploaded_file($_FILES['foto']['tmp_name'],$target_path);

    $id = $_POST['id'];
    $nama = $_POST['name'];
    $harga = $_POST['harga'];

    $query = "UPDATE product SET product_name = '$nama', harga = '$harga', Foto = '$target_path'
            WHERE id = '$id'";
    $result = mysqli_query($connect,$query);

    if ($result) {
        echo "Berhasil update data ";
?>
<a href="index.php">Lihat Data</a>
<?php
    } else {
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }
?>