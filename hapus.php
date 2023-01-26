<?php session_start();
   require 'config.php';
   if (isset($_GET['id'])) {
      $kt = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   if(isset($_POST['submit'])){
         require 'config.php';
   $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   $_SESSION['success'] = "Data Kota Berhasil dihapus";
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
         <h3> Hapus Data Kabupaten <?php echo "$kt->nama_kabupaten"; ?> ? </h3>
         <form method="POST">
            <div class="form-group">
               <input type="hidden" value="<?php echo "$kt->nama_kabupaten"; ?>" class="form-control" name="Kabupaten">
               <a href="index.php" class="btn btn-primary">Kembali</a>
               <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
            </div>
         </form>
      </div>
   </body>
</html>