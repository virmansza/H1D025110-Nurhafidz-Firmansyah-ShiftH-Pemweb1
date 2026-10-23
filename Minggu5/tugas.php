<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="angka1" placeholder="masukkan angka" required>

        <select name="tanda">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>

        <input type="number" name="angka2" placeholder="masukkan angka" required>
        <button type="submit" name="hasil">Hasil</button>
    </form>

    <?php 
    if(isset($_POST['hasil'])){
        $a = $_POST['angka1'];
        $b = $_POST['angka2'];
        $tanda = $_POST['tanda'];

        if($tanda == '+') $hasil = $a + $b;
        if($tanda == '-') $hasil = $a - $b;
        if($tanda == 'x') $hasil = $a * $b;
        if($tanda == '/') $hasil = ($b != 0 ) ? $a / $b : "Tidak bisa dibagi 0!";

        echo "<h3>Hasil: $hasil </h3>";
    }
    ?>
</body>
</html>