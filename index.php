<?php 
error_reporting(0);
$username = $_POST['username'];
$tombol = $_POST['tombol'];
if (isset($tombol)) {
 $info = "
    <div class='alert'> Hello $username </div>
  ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan</title>
  <link rel="stylesheet" href="bahan/bootstrap.min.css">
  <link rel="stylesheet" href="bahan/style.css">
</head>

<body>
  <?= $info; ?>
  <div class="container">

    <div class="row justify-content-center mt-5">
      <div class="col-5">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="" autocomplete="off">
              <div class="form-group">
                <label for="username">Username </label> 
                <input type="text" name="username" id="username" class="form-control" value="<?= $username; ?>">
              </div>
              <button type="submit" name='tombol' class='btn btn-primary'>Simpan</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="bahan/jquery-3.4.1.min.js"></script>
  <script src="bahan/script.js"></script>
</body>

</html>