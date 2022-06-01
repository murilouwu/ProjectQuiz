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
    if(!$_SESSION['name']){
        vai('index.php');
    }
}
function poss(){
    /*$sql = 'SELECT * FROM user';
    $res = $con->query($sql);
    $sql2 = 'SELECT cd, Student_name, GREATEST(Subject1, Subject2, Subject3, Subject4) AS Greatest_Mark FROM Student;'
    if($res->num_rows > 0){
       
    }*/
}
?>