<?php
    session_start();
    include "conexion.inc.php";
    $semestre = $_GET['id'];
    $sql="SELECT * FROM ssabd.materia WHERE semestre = $semestre";
    $resultado1=mysqli_query($con, $sql);
    $fila1=mysqli_fetch_all($resultado1);
?>


<div class="form-group b-white centrar-contenido">
                        <div class="table-responsive pb-3">
                                <table class="table">
                                    <thead>
                                        <tr class="success">
                                            <th style="width: 3px;">Semestre</th>
                                            <th>Sigla</th>
                                            <th>Nombre</th>
                                            <th>Inscribir</th>
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
                                                    <input type='checkbox' id='_checkbox {$fila1[$j][0]}' name = 'materia[]' value='{$fila1[$j][0]}'/>
                                                    <label for='_checkbox {$fila1[$j][0]}'>
                                                    </label>                                            
                                                </td>
                                            </tr>";
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                                <br>
                                <div class="f-right mr-3" >
                                    <input type ="submit" class="btn btn-green" value="Listo" />
                                </div>
                        </div>   
                    </div>

