<?php
include "koneksi.php";
$sql="DELETE FROM user where id_user= '$_GET[id]'";
mysqli_query($con, $sql);
 mysqli_close($con);
header('location:tampil_user.php');
?>