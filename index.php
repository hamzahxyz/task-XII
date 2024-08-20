<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// ambil data sintesa dari data sintesa
$result = mysqli_query($conn, "SELECT * FROM sintesa");

// ambil data (fetch) sintesa dari objek result
// mysqli_fetch_row() //mengembalikan array nomer
// mysqli_fetch_assoc()mengembalikan array nama
// mysqli_fetch_array()mengembalikan array keduanya
// mysqli_fetch_object()

//while( $sts = mysqli_fetch_object($result) ) {
//var_dump($sts);

//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>Dartar sintesa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>

        <?php while ( $row = mysqli_fetch_assoc($result) ) :
        ?>
        <tr>
            <td><?= $row["id"]?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>