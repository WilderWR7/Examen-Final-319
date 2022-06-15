<?php
    session_start();
    include "conexion.inc.php";
    $ci = $_SESSION['ci'];
    $semestre = $_GET['id'];
    $sql="select m.*
    from ssabd.inscrito i,ssabd.materia m
    where i.ci = $ci and i.semestre = $semestre and i.sigla = m.sigla ";
    $resultado1=mysqli_query($con, $sql);
    $fila1=mysqli_fetch_all($resultado1);

    $user = $_SESSION['user'];
    date_default_timezone_set('America/La_Paz');
    $DateAndTime = date('Y-m-d', time());
    $Time = date('h:i:s', time()); 
    $_SESSION['time']= $Time;
    //echo "The current date and time are $Time.";
    $sql1="insert into FlujoProcesoSeguimiento values('F2','P6','$user','$DateAndTime','$Time',null,null);";

    //$sql1="UPDATE flujoprocesoseguimiento SET FechaFin='$DateAndTime',HoraFin='$Time' WHERE id = $id and Usuario = '$user'";
    $resultado1=mysqli_query($con, $sql1);


?>

 
<div class="form-group b-white centrar-contenido">
                        <div class="table-responsive pb-3">

                                <table class="table">
                                    <thead>
                                        <tr class="success">
                                            <th style="width: 3px;">Semestre</th>
                                            <th>Sigla</th>
                                            <th>Nombre</th>
                                            <th>Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            for($j = 0; $j < count($fila1); $j += 1)
                                            {
                                                print "<tr style='cursor:pointer;'>    
                                                <td style='width: 3px;'>{$fila1[$j][2]}</td>
                                                <td onclick='selectInscripcion('INF20221', false, '')'>{$fila1[$j][1]}</td>
                                                <td>{$fila1[$j][0]}</td>
                                                <td >
                                                    <a href='principal.php?flujo=F2&proceso=P7&sigla={$fila1[$j][0]}' class='btn btn-green'>Ver</a>                                     
                                                </td>
                                            </tr>";
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
<!-- 
                                <div class="f-right mr-3" >
                                    <input type ="submit" class="btn btn-green" value="Listo" />
                                </div> -->
                        </div>   
                    </div>


                    