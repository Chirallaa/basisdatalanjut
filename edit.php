<?php session_start();
   require 'config.php';
   if (isset($_GET['id'])) {
      $kt = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   if(isset($_POST['submit'])){
      $collection->updateOne(
          ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
          ['$set' => ['nama_kabupaten' => $_POST['nama_kabupaten'], 'positif' => $_POST['positif'], 
                      'pdp' => $_POST['pdp'],'odp' => $_POST['odp'],'sembuh' => $_POST['sembuh'],
        'meninggal' => $_POST['meninggal'],
          ]]
      );
      $_SESSION['success'] = "Data Kabupaten berhasil diubah";
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
  <legend>Edit Data</legend>
         <form method="POST">
            <div class="form-group">
                <label for="nama_kabupaten"><strong>Nama Kabupaten</strong></label>
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
                <button type="submit" name="submit" class="btn btn-success">Ubah</button>
                <a href="index.php" class="btn btn-primary">Kembali</a>
  </fieldset>
</form>
            </div>
         </form>
      </div>
   </body>
</html>