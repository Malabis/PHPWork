<?php

include_once "mysql.php";

setcookie('name','');
echo "<script>location='login.html'</script>";

$con->close();
?>