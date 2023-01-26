<?php session_start(); ?>
<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
 </head>
 <body>
  <div class="container">
   <br>
   <CENTER> WEBSITE SEBARAN COVID JAWA TIMUR </CENTER>
   <a href="create.php" class="btn btn-success">Tambah Data</a>
   <?php
    if (isset($_SESSION['success'])) {
     echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
    }
   ?>
   <table class="table">
    <thead>
     <tr>
      <th scope="col">Daftar Kabupaten</th>
      <th style="background-color: #FF0000;" scope="col">Positif</th>
      <th style="background-color: #FFA500;" scope="col">PDP</th>
      <th style="background-color: #808080;"scope="col">ODP</th>
      <th style="background-color: green;" scope="col">Sembuh</th>
      <th style="background-color: #FFFF00;" scope="col">Meninggal</th>   
      <th style="background-color: blue" scope="col">AKSI</th>     
     </tr>
    </thead>
    <?php
     require 'config.php';
     $kabupaten = $collection->find();
     foreach ($kabupaten as $kt) {
      echo "<tr>";
      echo "<th scope='row'>".$kt->kabupaten."</th>";
      echo "<td>".$kt->positif."</td>";
      echo "<td>".$kt->pdp."</td>";
      echo "<td>".$kt->odp."</td>";
      echo "<td>".$kt->sembuh."</td>";
      echo "<td>".$kt->meninggal."</td>";
      echo "<td>";
      echo "<a href = 'edit.php?id=".$kt->_id."'class='btn btn-primary'>EDIT</a>";
      echo "<a href = 'hapus.php?id=".$kt->_id."'class='btn btn-danger'>HAPUS</a>";
      echo "</td>";
      echo "</tr>";
     }
    ?>
   </table>
  </div>
 </body>
</html>