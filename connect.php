<?php
$server= 'localhost';
$user= 'root';
$pass= '';
$bd= 'projeto';
$con = new mysqli($server,$user,$pass,$bd);
if(!$con){
	echo "Erro na conexão".$con->error;
}

function msg($texto){
    echo $texto;
}
?>