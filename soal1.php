<?php
function penjumlahan($x, $y) {
    return $x + $y;
}

function pengurangan($x, $y) {
    return $x - $y;
}

function perkalian($x, $y) {
    return $x * $y;
}

function pembagian($x, $y) {
    if ($y == 0) {
        return "tidak bisa dibagi 0";
    }
    return $x / $y;
}

$hasil = "";

if (isset($_POST['hitung'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    if ($operator == "+") {
        $hasil = penjumlahan($angka1, $angka2);
    } elseif ($operator == "-") {
        $hasil = pengurangan($angka1, $angka2);
    } elseif ($operator == "x") {
        $hasil = perkalian($angka1, $angka2);
    } elseif ($operator == "/") {
        $hasil = pembagian($angka1, $angka2);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form method="post">
        <input type="number" name="angka1" placeholder="angka1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2" placeholder="angka2" required>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php if ($hasil !== "") { ?>
        <p>Hasil: <b><?php echo $hasil; ?></b></p>
    <?php 
    } ?>

</body>
</html>