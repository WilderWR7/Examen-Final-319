<?php
  session_start();
  $ci=$_SESSION['ci'];
  $sigla = $_GET['sigla'];
  $sql="SELECT * FROM ssabd.nota WHERE ci=$ci and sigla = '$sigla'";
  $resultado=mysqli_query($con, $sql);
  $fila=mysqli_fetch_array($resultado);
      $time=$_SESSION['time'];
  date_default_timezone_set('America/La_Paz');
  $DateAndTime = date('Y-m-d', time());
  $Time = date('h:i:s', time());   
  //echo "The current date and time are $Time.";
  $sql="UPDATE flujoprocesoseguimiento SET FechaFin='$DateAndTime',HoraFin='$Time' WHERE HoraInicio = '$time'";
  $resultado=mysqli_query($con, $sql);



  // var_dump($fila);
  // echo $sql;
?>
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #337ab7;border-color: #2e6da4;color: #fff;">
                        <h4 class="modal-title"><div id="msgsiglaE"><h4 style="color: white"> Nota </h4></div></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="msgPrevent"></div>
                                <div style="overflow-y: scroll;">          
                                    <table class="table table-condensed table-hover" border="1">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Sigla</th>
                                              <th>Nota Primer Parcial</th>
                                              <th>Nota Segundo Parcial</th>
                                              <th>Nota Tercer Parcial</th>
                                          </tr>
                                      </thead>
                                      <?php
                                          print "
                                          <tbody id='tablaEvaluaciones'><tr> <td>{$fila["semestre"]}</td> <td>{$fila["sigla"]}</td> <td>{$fila["nota1"]}</td> <td>{$fila["nota2"]}</td> <td>{$fila["nota3"]}</td> </tr></tbody>
                                          
                                          ";
                                      ?>
                                    </table>

                                </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>