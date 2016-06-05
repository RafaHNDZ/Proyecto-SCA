<?php
 include('Conexion.php');
 include('Class.php');
 header('Content-Type: text/html; charset=UTF-8');

      $buscar = $_POST['b'];
      $grupo = $_POST['g'];
       
      if(!empty($buscar)) {
            buscar($buscar, $grupo);
      } else{
       $historial = new Historial();
            echo $historial->mostrarHistorial($grupo); 
      }
       
      function buscar($b, $g) {
            $servidor = "localhost";
            $database = "CBTIS255";
            $user = "root";
            $password = "Eva-00";
            $con = mysqli_connect($servidor, $user, $password)or die("Error al conectar a la Base de Datos :(");
                   
            $sql = "SELECT * FROM alumnos WHERE grupo = '$g' AND nombre LIKE '%".$b."%'";
            
            $result = mysqli_query(Conexion::conectar(), $sql);
             
            $contar = mysqli_num_rows($result);
             
            if($contar == 0){
                  
                  echo  "<div class='alert alert-warning col-md-4 col-xs-12'>
                        <strong>Warning!</strong> No se encontro ningun resultado con '<b>".$b."</b>'. </div>" ;

            }else{
                  while ($row =mysqli_fetch_array($result)) {
                  ?>
                         <div class="col-xs-12 col-sm-4 col-md-3 well">
                        <p class="producto_row" style=" text-align:center; color: black; font-weight; bold;"><?php echo $row[1].' '.$row[2].' '.$row[3]; ?></p>
                        <img src="../../media/imagen/alumnos/<?php echo $row[4] ?>" width="105" height="150" id="imagen"> <br>
                        <form id="add_carrito" method="POST" action="../formatos/frlEntrevistaIndividual.php?id=<?php echo $row[12]  ?>" method="GET">
                         <input type="submit" value="Generar Formato" class="btn btn-warning col-xs-8 col-xs-offset-2 col-md-10 col-md-offset-1">
                                                
                         </form>
                         <br> <br>
                              <form action="../formatos/frlEntrevistaIndividual.php?id=<?php echo $row[12]  ?>" method="GET" style="margin-bottom: 20px;">
                               <input type="hidden" name="id" value="<?php echo $row[0] ?>">
                               <input type="submit" value="Ver Ficha" class="btn btn-info col-xs-8 col-xs-offset-2 col-md-10 col-md-offset-1"> <br><br>
                              </form>
                                                      
                                                            
                        </div>
                               <?php
                         }
            }
      }
       
?>