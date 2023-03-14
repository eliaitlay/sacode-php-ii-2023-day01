<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body{
            background:#16a058;
        }
    </style>

</head>
<body>

<!-- Heading dengan tag html -->

<h1>Profile Page</h1>

<!-- Paragraph dengan syntax PHP -->
<?php 
//menampilkan string ke layar
    echo "<p>Hello PHP!</p>";
    /*
    Syntax PHP bisa dijalankan hanya di dalam dokumen dengan extensi *.php
    */

    #membuat variabel PHP
    $angka1=10;
    $angka2=5;

    #penjumlahan

    $jumlah =$angka1 + $angka2;

    echo $jumlah;


    #pengurangan
    $pengurangan =$angka1 - $angka2;
    echo $pengurangan;
?>

<h3>Hasil Penjumlahan</h3>
<p>
    <?php echo $jumlah;?>
</p>

<h3>Hasil Pengurangan</h3>
<p>
    <?php echo $pengurangan;?>
</p>
    
</body>
</html>