<?php
    session_start();
    include "conexion.inc.php";
    $password=$_GET["password"];
    $user=$_GET["user"];
    $sql="select * from usuario where password ='$password' and user ='$user'";
    $resultado=mysqli_query($con, $sql);
    $fila=mysqli_fetch_array($resultado);
    $_SESSION['user']=$fila['user'];

    if(isset($fila)){
        if($fila['cod_user'] == 1){
            return header("Location: principal.php?flujo=F1&proceso=P1");
        }
        else{
            return header("Location: principal.php?flujo=F3&proceso=P9");

        }
        }
        else {
    return header("Location: Login.php");
    }

?>  