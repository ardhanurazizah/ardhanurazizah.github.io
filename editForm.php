<html>
    <head>
        <title> Edit Data </title>
    </head>
    <body>
        <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM product WHERE id = '$id'";
            $result = mysqli_query($connect, $query);
        ?>
        <table>
            <form enctype="multipart/form-data" method="POST" action="prosesEdit.php">
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> Id </td>
                    <td> <input type="number" name="id" value="<?php echo $row['id'];?>" readonly></td>
                </tr>
                <tr>
                    <td> Nama Produk </td>
                    <td><input type="text" name="name" value="<?php echo $row['product_name'];?>"></td>
                </tr>
                <tr>
                    <td> Harga </td>
                    <td><input type="number" name="harga" value="<?php echo $row['harga'];?>"></td>
                </tr>
                <tr>
                    <td> Foto </td>
                    <img src="foto/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                    <input type="file" name="foto" />
                </tr>
                <tr>
                    <td><input type="submit" name="edit" value="Edit Data"></td>
                </tr>
                <?php
                    }
                ?>
            </form>
        </table>
    </body>
</html>