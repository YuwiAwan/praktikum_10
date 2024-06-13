<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Praktikum 9</title>
</head>
<body>
 <form method="POST" action="action.php">
 <label>Masukkan nama anda:</label>
        <input type="text" name="nama" required><br><br>
        <label>Masukkan angka pertama (1-10):</label>
        <input type="number" name="angka1" min="1" max="10" required><br><br>
        <label>Masukkan angka kedua (1-10):</label>
        <input type="number" name="angka2" min="1" max="10" required><br><br>
        <input type="submit" name="hitung" value="Hitung">
 </form>
</body>
</html>