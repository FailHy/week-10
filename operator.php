<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Fail Hylmi Khalil">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Ini adalah proses operator matematika</h1>
    <?php
    function penjumlahan($a, $b): int
    {
        return $a + $b;
    }

    function pengurangan($a, $b): int
    {
        return $a - $b;
    }

    function perkalian($a, $b): int
    {
        return $a * $b;
    }

    function pembagian($a, $b): float
    {
        return $a / $b;
    }

    function modulus($a, $b): int
    {
        return $a % $b;
    }

    function perpangkatan($a, $b): int
    {
        return pow($a, $b);
    }

    echo "Hasil dari penjumlahan 2 dan 3 = " . penjumlahan(2, 3) . " <br> ";
    echo "Hasil dari pengurangan 2 dan 3 = "  .  pengurangan(2, 3) . "<br>";
    echo "Hasil perkalian 2 dan 3 = " . perkalian(2, 3) . "<br>";
    echo "Hasil pemabagian 6 dan 3 = " . pembagian(6, 3) . "<br>";
    echo "Hasil modulus 9 dan 3 = " . modulus(9, 3) . "<br>";
    echo "Hasil 2 pangkat 3 = " . perpangkatan(2, 3) . "<br>";
    ?>

</body>

</html>