<?php
/*
    $server= '11.94.0.25';
    $user= 'oylfqdum@localhost';
    $pass= '@russochacal';
    $bd= 'oylfqdum_projeto';
*/
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
function Proteger(){
    if(!$_SESSION['cd']){
        vai('index.php');
    }
}
function fun($var){
    if($var!=null){
        return $var;
    }else{
        return 0;
    }
}
function funa($var){
    if($var!=null){
        return true;
    }else{
        return false;
    }
}
?>