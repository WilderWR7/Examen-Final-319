<?php
    session_start();
    include "conexion.inc.php";
    $ci = $_SESSION['ci'];
    $user = $_SESSION['user'];

    $semestre = $_GET['id'];
    
    $sql="select *
    from ssabd.materia where semestre = $semestre";
    $resultado1=mysqli_query($con, $sql);
    $fila1=mysqli_fetch_all($resultado1);

    date_default_timezone_set('America/La_Paz');
    $DateAndTime = date('Y-m-d', time());
    $Time = date('h:i:s', time()); 
    $_SESSION['time']= $Time;
    //echo "The current date and time are $Time.";
    $sql1="insert into FlujoProcesoSeguimiento values('F3','P10','$user','$DateAndTime','$Time',null,null);";
    $resultado1=mysqli_query($con, $sql1);

?>

 
<div class="form-group b-white centrar-contenido">
                        <div class="table-responsive pb-3">

                                <table class="table">
                                    <thead>
                                        <tr class="success">
                                            <th style="width: 3px;">Semestre</th>
                                            <th>Nombre</th>
                                            <th>Sigla</th>
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
                                                    <a href='principal.php?flujo=F3&proceso=P11&sigla={$fila1[$j][0]}&id={$fila1[$j][2]}' class='btn btn-green'>Abrir</a>                                     
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


                    