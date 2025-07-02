<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="masukan" method="POST">
    <label for="nama">Nama :</label>
    <input type="text">
    <label for="angka">umur :</label>
    <input type="number">
</form>
</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $nama = $_POST['nama'];
    $umur = $_POST['angka'];

    echo "Nama: $nama <br>";
    echo "Umur: $umur <br>";
}

?>