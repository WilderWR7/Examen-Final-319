<?php
    session_start();
    include "conexion.inc.php";
    $ci=$_GET["ci"];
    $sigla=$_GET["sigla"];
    $nt1=$_GET["nt1"];
    $nt2=$_GET["nt2"];
    $nt3=$_GET["nt3"];

    $sql="UPDATE ssabd.nota  set nota1 = $nt1, nota2= $nt2, nota3=$nt3 where sigla ='$sigla' and ci = $ci";
    $resultado=mysqli_query($con, $sql);
   

?>

