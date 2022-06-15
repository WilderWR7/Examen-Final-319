<?php
    session_start();
    include "conexion.inc.php";
    $nombre=$_SESSION['nombre'];
    $ci=$_SESSION['ci'];
    $semestre=$_SESSION['semestre'];
    $name = $_GET['materia'];
foreach ($name as $materia){ 
    $sql="insert into ssabd.Inscrito values($ci,'$nombre','$materia',$semestre);";
    $resultado1=mysqli_query($con, $sql);
}

?>   