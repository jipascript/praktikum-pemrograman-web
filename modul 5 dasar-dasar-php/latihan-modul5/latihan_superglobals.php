<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Superglobals - GET</title>
</head>
<body>

  <form method="get" action="">
    Nama: <input type="text" name="nama">
    <input type="submit" value="Kirim">
  </form>

  <br>

  <?php
  if (isset($_GET['nama'])) {
      $nama = htmlspecialchars($_GET['nama']);
      echo "Halo, " . $nama . "!";
  }
  ?>

</body>
</html>
