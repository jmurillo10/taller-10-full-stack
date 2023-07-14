<?php
  $connection = new mysqli("localhost", "root", "", "mi_proyecto");

  $query = mysqli_query($connection, "SELECT * FROM usuarios");

  echo "<h1>Proyecto base de datos</h1>";
  print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>
