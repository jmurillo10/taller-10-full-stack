<?php
include "connection.php";

function getAllUsers() {
   return  mysqli_query(CONNECTION, "SELECT * FROM usuarios");  
}




?>
