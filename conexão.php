<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco= "usuarios";

$conecta = mysqli_connect($localhost, $user, $passw, $banco);

$sql = mysqli_query($conecta,"SELECT * FROM usuario");

echo "Existem ".mysqli_num_rows($sql);

?>