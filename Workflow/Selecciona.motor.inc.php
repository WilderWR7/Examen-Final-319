<?php
    session_start();
    include "conexion.inc.php";
    $tipo=$_GET["tipo"];

    if($tipo =="Bandeja"){
        return header("Location: bandeja.php");

    }

    if($tipo == "Inscripcion"){
        return header("Location: principal.php?flujo=F1&proceso=P2");
    }
    else {
        return header("Location: principal.php?flujo=F2&proceso=P5");
    }

?>  