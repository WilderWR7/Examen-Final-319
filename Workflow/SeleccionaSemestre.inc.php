
<?php
session_start();
include "conexion.inc.php";
$user = $_SESSION['user'];
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
print "<h2 style = 'color: white' >{$nombre}</h2>";

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




?>
<div class="row">
                <div class="alert alert-info centrar-contenido">
                    <h3><b>Verifica tus notas</b></h3>
                    Selecciona el <b>semestre</b> del cual deseas ver tus <b>Notas.</b>
                
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
                                    for($j = 1; $j <= $semestre; $j += 1)
                                    {
                                        print "
                                        <tr style='cursor:pointer;'>    
                                            <td style='width: 3px;'>{$j}</td>
                                            <td onclick='selectInscripcion('INF20221', false, '')'>{$ordinal[$j]} {$Year}</td>
                                            <td>{$Year}</td>
                                            <td align='center'>
                                            <a href='principal.php?flujo=F2&proceso=P6&id={$j}' class='btn btn-cafe btn-sm'>Ingresar</a>                                            
                                            </td>
                                        </tr>";
                                    }
                                ?>
                                    
                                </tbody>
                            </table>
                        </div>   
                    </div>
                
        </div>

