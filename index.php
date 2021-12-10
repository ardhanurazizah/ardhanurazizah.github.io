<html>
    <head>
        <title> Data Product</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <a href="insertForm.html"> Tambah Data</a>
        <table>
            <tr>
                <th> Id </th>
                <th> Nama Produk </th>
                <th> Harga </th>
                <th> Foto </th>
                <th> Aksi </th>
            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM product";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> <?php echo $row['id']?></td>
                <td> <?php echo $row['product_name']?></td>
                <td> <?php echo $row['harga']?></td>
                <td style="text-align: center;"><img src="<?php echo $row['Foto']; ?>" style="width: 120px;"></td>
                <td>
                    <a href="editForm.php?id=<?php echo $row['id'];?>"> Edit &nbsp; </a>
                    <a href="hapusCRUD.php?id=<?php echo $row['id'];?>"> Hapus </a>
                </td>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
        </table>
    </body>
</html>