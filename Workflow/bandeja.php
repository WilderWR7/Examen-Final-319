<?php
session_start();
include "conexion.inc.php";
include "header.php";

// include "conexion.inc.php";
///$_SESSION["ID_usuario"]=21;
$user= $_SESSION["user"];
// username

$sql="select * from flujoprocesoseguimiento where Usuario='$user'";
// $sql.="and HoraFin is null ";
$resultado=mysqli_query($con, $sql);
?>
        <div class="container-table">

            <table>
                <tr>
                    <td class="table-header" >Flujo</td>
                    <td class="table-header" >Proceso</td>
                    <td class="table-header" >Fecha de Inicio</td>
                    <td class="table-header" >Hora de Inicio</td>
                    <td class="table-header" >Fecha Finalizada</td>
                    <td class="table-header" >Hora Finalizada</td>
                    <td class="table-header"  >Operacion</td>
                </tr>
                <?php 
        while ($fila=mysqli_fetch_array($resultado))
        {
            print "<tr>
            <td class='tables'>{$fila["Flujo"]}</td>
            <td class='tables'>{$fila["Proceso"]}</td>
            <td class='tables'>{$fila["FechaInicio"]}</td>
            <td class='tables'>{$fila["HoraInicio"]}</td>
            <td class='tables'>{$fila["FechaFin"]}</td>
            <td class='tables'>{$fila["HoraFin"]}</td>
            
            <td class='center' >
            <a href='principal.php?flujo=F1&proceso=P2'>{$fila["Proceso"]}</a>
            </td>
        </tr>
        "
        
        ;
    }
    print"<a href='login.php' class='btn btn-action' style = 'color:white'>Salir</a>"                                            
    ?>
    </div>