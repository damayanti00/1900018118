<?php
    if(isset($_POST['submit_data'])){
        $nama = $_POST['Nama'];
        $nim = $_POST['Nim'];
        $alamat = $_POST['Alamat'];
        $telepon_email = $_POST['Telepon/E-mail'];
        $jenis_kelamin = $_POST['Jenis_Kelamin'];
        $agama = $_POST['Agama'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>Nim</td>
            <td>Alamat</td>
            <td>Telepon/E-mail</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
        </tr>
        <tr>
            <td><?= $nama; ?></td>
            <td><?= $nim; ?></td>
            <td><?= $alamat; ?></td>
            <td><?= $telepon_email; ?></td>
            <td><?= $jenis_kelamin; ?></td>
            <td><?= $agama; ?></td>
        </tr>
    </table>
</body>
</html>