
<?php
session_start();
include "conexion.inc.php";
$user = $_SESSION['user'];

date_default_timezone_set('America/La_Paz');
$DateAndTime = date('Y-m-d', time());
$Time = date('h:i:s', time()); 
$_SESSION['time']= $Time;
//echo "The current date and time are $Time.";
$sql1="insert into FlujoProcesoSeguimiento values('F1','P2','$user','$DateAndTime','$Time',null,null);";

//$sql1="UPDATE flujoprocesoseguimiento SET FechaFin='$DateAndTime',HoraFin='$Time' WHERE id = $id and Usuario = '$user'";
$resultado1=mysqli_query($con, $sql1);


$sql="SELECT * FROM ssabd.estudiante WHERE user='$user'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$nombre=$fila['nombre'];
$_SESSION['nombre']=$nombre;
$ci=$fila['ci'];
$_SESSION['ci']=$ci;
$semestre=$fila['semestre'];
$_SESSION['semestre']=$semestre;
$Year = date("Y");

$ordinal[1] = "Primero";
$ordinal[2] = "Segundo";
$ordinal[3] = "Tercero";
$ordinal[4] = "Cuarto";
$ordinal[5] = "Quinto";
$ordinal[6] = "Sexto";
$ordinal[7] = "Séptimo";
$ordinal[8] = "Octavo";
$ordinal[9] = "Noveno";
$ordinal[10] = "Décimo";
print "<h3 style = 'color: white' class='mb-3 centrar-contenido' >{$nombre}</h3>";




?>
<div class="row">
                <div class="alert alert-info centrar-contenido">
                    <h3><b>Administrar Mis Inscripciones</b></h3>
                    Gestiona <b>inscripciones</b> durante su <b>formación académica</b> a partir de la implementación del Sistema de Seguimiento Académico en su Carrera, 
                    para <b>ver detalles de su inscripción</b> presione sobre un registro de la lista desplegada.
                </div>
                
                    <div class="form-group b-white centrar-contenido">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="success">
                                        <th style="width: 3px;">Nro.</th>
                                        <th>Nombre</th>
                                        <th>Gestion</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        print "
                                        <tr style='cursor:pointer;'>    
                                            <td style='width: 3px;'>{$semestre}</td>
                                            <td onclick='selectInscripcion('INF20221', false, '')'>{$ordinal[$semestre]} {$Year}</td>
                                            <td>{$Year}</td>
                                            <td align='center'>
                                            <a href='principal.php?flujo=F1&proceso=P3&id={$semestre}' class='btn btn-cafe btn-sm'>Ingresar</a>                                            
                                            </td>
                                        </tr>";
                                    
                                ?>
                                    
                                </tbody>
                            </table>
                        </div>   
                    </div>
                
        </div>

