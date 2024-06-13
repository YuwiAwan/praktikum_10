<?php
 if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];

    $penjumlahan = $angka1 + $angka2;
    $pengurangan = $angka1 - $angka2;
    $perkalian = $angka1 * $angka2;
    $pembagian = $angka1 / $angka2;
    $modulus = $angka1 % $angka2;

    echo "<h2>Perhitungan Aritmatika</h2>";
    echo "Nama: " . $nama . "<br>";
    echo $angka1 . " + " . $angka2 . " = " . $penjumlahan . "<br>";
    echo $angka1 . " - " . $angka2 . " = " . $pengurangan . "<br>";
    echo $angka1 . " * " . $angka2 . " = " . $perkalian . "<br>";
    echo $angka1 . " / " . $angka2 . " = " . $pembagian . "<br>";
    echo $angka1 . " % " . $angka2 . " = " . $modulus . "<br>";
 }
?>