
<?php
$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usia = (int) $_POST["usia"];

    switch (true) {
        case ($usia < 0):
            $hasil = "Usia tidak benar";
            break;

        case ($usia <= 12):
            $hasil = "Anak-anak";
            break;

        case ($usia <= 17):
            $hasil = "Remaja";
            break;

        case ($usia <= 59):
            $hasil = "Dewasa";
            break;

        default:
            $hasil = "Lansia";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Usia</title>
</head>
<body>

    <form method="post">
        <label>Masukkan Usia:</label>
        <input type="number" name="usia" min="0" required>
        <button type="submit">Cek</button>
    <?php if ($hasil != ""): ?>
        <p>Kategori <strong><?= $hasil ?></strong></p>
    <?php endif; ?>
    </form>
</body>
</html>
