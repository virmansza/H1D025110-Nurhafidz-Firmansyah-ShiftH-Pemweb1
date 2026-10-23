<?php
$datadiri = [
    ['nama' => 'Romi', 'Asal' => 'Bogor', 'Umur' => 22],
    ['nama' => 'Anto', 'Asal' => 'Depok', 'Umur' => 23],
    ['nama' => 'Putri', 'Asal' => 'Bangka', 'Umur' => 21],
];
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
<?php foreach ($datadiri as $dd): ?>
    <?= $dd["nama"] ?><br>
    Asal: <?= $dd['Asal'] ?><br>
    Umur: <?= $dd['Umur'] ?><br><br>
<?php endforeach; ?>
</body>
</html>