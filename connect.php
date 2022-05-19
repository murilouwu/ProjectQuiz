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
    echo '<script>alert("'.$texto.'");</script>';
}
function vai($var)
{
    echo '<script> window.location = "'.$var.'" </script>';
}
?>