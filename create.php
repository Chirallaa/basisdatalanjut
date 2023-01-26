<?php session_start();
   if(isset($_POST['submit'])){
      require 'config.php';
      $insertOneResult = $collection->insertOne([
          'nama_kabupaten' => $_POST['nama_kabupaten'],
          'positif' => $_POST['positif'],
          'pdp' => $_POST['pdp'],
          'odp' => $_POST['odp'],
          'sembuh' => $_POST['sembuh'],
          'meninggal' => $_POST['meninggal'],
      ]);
      $_SESSION['success'] = "Data Kota Berhasil di tambahkan";
      header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>WEBSITE SEBARAN COVID JAWA TIMUR</title>
      <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <br>
         <form method="POST">
         <style>
fieldset {
  background-color: whitesmoke;
}

legend {
  background-color: darkgray;
  text-align: center;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
</style>
 <fieldset>
  <legend>Tambah Data</legend>
            <div class="form-group">
                <label for="nama_kabupaten"><strong>Nama Wilayah</strong></label>
                <input type="text" class="form-control" name="nama_kabupaten" placeholder="">
                <label for="positif"><strong>Positif</strong></label>
                <input type="text" class="form-control" name="positif" placeholder="">
                <label for="pdp"><strong>PDP</strong></label>
                <input type="text" class="form-control" name="pdp" placeholder="">
                <label for="odp"><strong>ODP</strong></label>
                <input type="text" class="form-control" name="odp" placeholder="">
                <label for="sembuh"><strong>Sembuh</strong></label>
                <input type="text" class="form-control" name="sembuh" placeholder="">
                <label for="meninggal"><strong>Meninggal</strong></label>
                <input type="text" class="form-control" name="meninggal" placeholder="">                
                <br>
                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
 </fieldset>
</form>
            </div>
         </form>
      </div>
   </body>
</html>