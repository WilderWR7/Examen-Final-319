<?php
session_start();
include "conexion.inc.php";
include "header.php";
$user= $_SESSION['user'];
$str = strtoupper($user);
// echo $str;
print "<h2 style = 'color: white' >Bienvenid@ {$str}</h2>";
?>
<center>
    <h2></h2>
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Selecciona una opción</div>
            <div class="card-body text-primary">
                <div class="" role="alert">
                <form action="Selecciona.motor.inc.php" method="GET" class="">
                        <div class="form-group mb-2 d-flex">
                            <select name="tipo" class="center custom-select mr-sm-2 w-100">
                                <option class="center" selected>----Selecciona----</option>
                                <option value = "Inscripcion" id = "tipo">Inscripcion</option>
                                <option value = "Notas" id = "tipo">Ver Notas</option>
                                <option value = "Bandeja" id = "tipo">Bandeja</option>

                            </select>
                        </div>


                        <div class="f-center">
                            <input class="btn btn-green mb-2 mt-5" type="submit"value="Siguiente"/>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</center>