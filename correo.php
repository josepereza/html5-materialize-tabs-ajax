<?php 
$nombre = $_POST['nombre'];
echo $nombre . "<br>";
$email = 'josepereza66@gmail.com';
$suemail = $_POST['email'];
$telefono=$_POST['telefono'];
$texto=$_POST['texto'];
$text = $nombre . " ".$suemail." ".$telefono ." texto : " .$texto;

mail($email, $nombre, $text);
header('location:index.html');
?>   
