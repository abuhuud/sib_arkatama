<?php
$name = $_POST['name'];
$place = $_POST['place'];
$age = $_POST['age'];

if ($age >= 18 && $age <= 22) {
  $description = "Dewasa";
} elseif ($age >= 15 && $age <= 17) {
  $description = "Remaja";
} else {
  $description = "Usia tidak dikategorikan";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Studi Kasus - Pertemuan 2</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <form>
      <h1>Data berhasil disimpan !</h1>
      <div class="container-box">
        <div class="field">
          <?php echo "Nama Lengkap : " . $name ?>
        </div>
        <div class="field">
          <?php echo "Tempat Lahir : " . $place ?>
        </div>
        <div class="field">
          <?php echo "Usia : " . $age . " Tahun" ?>
        </div>
        <div class="field">
          <?php echo "Keterangan : " . $description ?>
        </div>
        <button type="button" class="button back" onclick="location.href='index.php';">Kembali</button>
      </div>
    </form>
  </div>
</body>

</html>