<?php
/* Funciones de LogIn */

	class Usuario{


		public function ingresarTutor($email, $password){
			$sql = "SELECT * FROM tutores WHERE email = '$email' AND password = '$password' AND estado = 1";
			$result = mysqli_query(Conexion::conectar(), $sql);
				if ($num_rows = mysqli_num_rows($result) == 1) {
				$row  = mysqli_fetch_array($result);
				$_SESSION['nombre'] = $row[1];
				$_SESSION['apellidoPaterno'] = $row[2];
				$_SESSION['apellidoMaterno'] = $row[3];
				$_SESSION['privilegios'] = $row[6];
				$_SESSION['grupo'] = $row[8];
				$_SESSION['ciclo'] = $row[9];


				if ($row[6] ==1){
					echo
				'<script>
				alert("Biemvenido al sistema");
				window.location.href="tutor"
				 </script>';
				} else {
					echo
				'<script>
				alert("Biemvenido al sistema");
				window.location.href="SU"
				 </script>';
				}
			}

			else {

				echo '<script> alert("Usuario/Password Incorrectos o Usuario Desactivado") </script>';

			}

		}

		public function listarPersonal(){
		$sql = "SELECT * FROM tutores ";
		$result = mysqli_query(Conexion::conectar(), $sql);



		$tabla = "<table class='table'> \n";
			$tabla.= "<tr> \n";
			$tabla.= "<td><b>ID</b></td>\n";
			$tabla.= "<td><b>Nombre</b></td>\n";
			$tabla.= "<td><b>E-mail</b></td>\n";
			$tabla.= "<td><b>Permisos</b></td>\n";
			$tabla.= "<td><b>Contraseña</b></td>\n";
			$tabla.= "<td><b>Grupo</b></td>\n";
			$tabla.= "<td><b>Estado</b></td>\n";
			$tabla.= "<td><b>Modificar</b></td>\n";

				while ($fila = mysqli_fetch_row($result)) {

						if ($fila[6] != 2){
							$permisos ="Tutor";
						} else{
							$permisos = "Administrador";
						}

						if ($fila[7] !=0){
							$estado = "Activo";
							$color = 'class="success"';
						} else {
							$estado = "Inactivo";
							$color = 'class="danger"';
						}

					$tabla.= "<tr> \n";
					$tabla.= "<td>$fila[0]</td>\n";
					$tabla.= "<td>$fila[1]</td>\n";
					$tabla.= "<td>$fila[4]</td>\n";
					$tabla.= "<td>$permisos</td>\n";
					$tabla.= "<td>$fila[5]</td>\n";
					$tabla.= "<td>$fila[8]</td>\n";
					$tabla.= "<td echo $color;>$estado</td>\n";
					$tabla.="<td><a type='button' class=' btn btn-warning' href='modificarPersonal.php?id=$fila[0]'>Modificar</a></td>";
					$tabla.="</tr> \n";
				}

				$tabla.="</table> \n";

				return $tabla;

	}

	} /* Fin de Clase Usuario */

	class Registro{

		public function registrarFichaDatosPersonales($nombre, $apellidoP, $apellidoM, $nombreImagen ,$fechaNacimiento, $calle, $numeroCalle, $colonia, $localidad, $codigoPostal, $telefono, $numeroControl, $grupo, $turno, $semestre, $ciclo){
			$sql ="INSERT INTO alumnos (nombre, apellidoP, apellidoM, imagen, fechaNacimiento, calle, numeroCalle, colonia, localidad, codigoPostal, telefono, idAlumno, grupo, turno, semestre, ciclo) VALUES('$nombre', '$apellidoP', '$apellidoM','$nombreImagen', '$fechaNacimiento', '$calle', '$numeroCalle', '$colonia', '$localidad', '$codigoPostal', '$telefono', '$numeroControl', '$grupo', '$turno', '$semestre', '$ciclo')";
			$result = mysqli_query(Conexion::conectar(),$sql);
			echo
			'<script>
			alert("Ficha Registrada")

			</script>';
			echo $sql;
		}

		public function registrarFichaDatosEconomicos($idAlumno, $depende, $viveCon, $ingresoFamiliar, $trabajoActual, $necesitasTrabajar, $trabajoCausa){
			$sql = "INSERT INTO datoseconomicos (idAlumno, dependeDe, viveCon, ingresoFamiliarMensual, trabajo, necesitaTrabajo, causaTrabajo) VALUES ('$idAlumno', '$depende', '$viveCon', '$ingresoFamiliar', '$trabajoActual', '$necesitasTrabajar', '$trabajoCausa')";
				$result = mysqli_query(Conexion::conectar(),$sql);
				echo $sql;
		}

		public function registrarFichaDatosFamiliares($idAlumno,$situacionFamiliar, $otrasPersonas, $lugarFamilia, $relacionFamiliar){
			$sql = "INSERT INTO datosfamiliares (idAlumno, situacionesFamiliares, integrantes, lugar, relacionPaterna) VALUES ('$idAlumno','$situacionFamiliar', '$otrasPersonas', '$lugarFamilia', '$relacionFamiliar')";
				$result = mysqli_query(Conexion::conectar(),$sql);
				echo $sql;
		}

		public function registrarFichaDatosmedicos($idAlumno, $padeceEnfermedad, $tratamientoActual, $tratamientoAnterior, $tipoTratamiento, $hospitalizado, $motivoHospitalizado, $operacion,$motivoOperacion, $enfermedadCronica, $nombreEnfermedad){
			$sql = "INSERT INTO datosmedicos(idAlumno, enfermedades, tratamiento, tratamientoAnterior, tipoTratamiento, hospitalizacion, motivoHospitalizacion, operaciones, motivoOperacion, padeceEnfermedad, enfermedadCronica) VALUES ('$idAlumno', '$padeceEnfermedad', '$tratamientoActual', '$tratamientoAnterior', '$tipoTratamiento', '$hospitalizado', '$motivoHospitalizado', '$operacion','$motivoOperacion', '$enfermedadCronica', '$nombreEnfermedad')";
				$result = mysqli_query(Conexion::conectar(),$sql);
				echo $sql;
		}

		public function registrarFichaDatosAcademicos($idAlumno, $promedioPrimaria, $secundariaPrimero, $secundariaSegundo, $secundariaTercero, $promedioCicloAnterior){
			$sql = "INSERT INTO datosacademicos (idAlumno, promedioPrimaria, promedioSecundariParcialUno, promedioSecundariParcialDos, promedioSecundariParcialTres, promedioCicloAnterior) VALUES ('$idAlumno','$promedioPrimaria', '$secundariaPrimero', '$secundariaSegundo', '$secundariaTercero', '$promedioCicloAnterior')";
				$result = mysqli_query(Conexion::conectar(),$sql);
				echo $sql;
		}

		public function registrarTutor($idTutor, $privilegios, $estado, $nombre, $apellidoPaterno, $apellidoMaterno, $email, $password, $grupoTutorado){
			$sql = "INSERT INTO tutores (nombre, apellidoP, apellidoM, email, password, privilegios, estado, grupoTutorado) VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno','$email', '$password', '$privilegios','$estado', '$grupoTuorado')";
				$result = mysqli_query(Conexion::conectar(),$sql);
				echo $sql;
				echo'<script>
				alert("Se agrego un nuevo Tutor al Sistema")</script>';
		}

        public function actualizarTutor($idTutor, $privilegios, $estado, $nombre, $apellidoPaterno, $apellidoMaterno, $email, $password, $grupoTutorado){
        $sql = "UPDATE tutores SET nombre='$nombre',apellidoP='$apellidoPaterno',apellidoM='$apellidoMaterno',password='$password',email='$email',privilegios='$privilegios',estado='$estado',grupoTutorado='$grupoTutorado' WHERE id=$idTutor";
            $result = mysqli_query(Conexion::conectar(),$sql);

				echo '<script>
                alert("La Información se Actualizo");
                window.location.href="index.php"
                </script>';

        }

        public function reistrarGrupo($nombreGrupo, $especialidad){
        	$sql = "INSERT INTO grupos (nombre, especialidad) VALUES ('$nombreGrupo', '$especialidad')";
        		$result = mysqli_query(Conexion::conectar(),$sql);
        			echo '<script>
                	alert("Se agrego un nuevo Grupo.");
                	window.location.href="index.php";</script>';
        }

        public function registrarEspecialidad($nombreEspecialidad){
        	$sql = "INSERT INTO especialidades (nombre) VALUES ('$nombreEspecialidad')";
        		$result = mysqli_query(Conexion::conectar(), $sql);
        			echo '<script>
        				alert("Se agrego el registro.");
        				window.location.href="index.php"</script>';
        }

        public function registrarGeneracion($nombreGeneracion){
			$sql = "INSERT INTO generaciones (nombre) VALUES ('$nombreGeneracion')";
				$result = mysqli_query(Conexion::conectar(), $sql);
				echo'<script>
				alert("Se agrego una nuevo registro");
				window.location.href="index.php"
				</script>';

		}

		public function registrarSemestre($nombreSemestre){
			$sql = "INSERT INTO semestres (nombreSemestre) VALUES ('$nombreSemestre')";
				$result = mysqli_query(Conexion::conectar(), $sql);
				echo'<script>
				alert("Se agrego una nuevo registro");
				window.location.href="index.php"
				</script>';

		}



		} /* Fin de Clase Registro*/

	class Sesion{

		public function nuevaCanalizacion($fecha, $numeroControl, $nombreAlumno, $semestre, $edad, $nombreTutor, $especialidad, $problematica, $servicio, $observaciones, $grupo){
			$sql = "INSERT INTO canalizaciones (fecha, numeroControl, nombreAlumno, semestre, edad, nombreTutor, especialidad, problematica, solicitud, observaciones, grupo) VALUES ('$fecha', '$numeroControl', '$nombreAlumno', '$semestre', '$edad', '$nombreTutor', '$especialidad', '$problematica', '$servicio', '$observaciones', '$grupo')";
				$result = mysqli_query(Conexion::conectar(),$sql);
				echo $sql;
				echo'<script>
				alert("Se agrego una nueva Canalizacion")</script>';
		}

		public function nuevaEntrevistaPrivava($nombreAlumno, $grupo, $fecha, $objetivoSesion, $problematica, $seguimiento, $resultados, $observaciones, $idAlumno){
			$sql = "INSERT INTO sesionPrivada (nombreAlumno, grupo, fecha, objetivo, problematica, seguimiento, resultados, observaciones, idAlumno) VALUES ('$nombreAlumno', '$grupo', '$fecha', '$objetivoSesion', '$problematica', '$seguimiento', '$resultados', '$observaciones', '$idAlumno')";
				$result = mysqli_query(Conexion::conectar(),$sql);
				echo $sql;
				echo'<script>
				alert("Se agrego una nueva Entrevista Privada")</script>';
		}

		public function nuevaEntrevistaGrupal($nombreTutor, $grupo, $mes, $numeroSesion, $fecha, $objetivoSesion, $problema, $actividadRemedial, $resultado, $observaciones){
			$sql = "INSERT INTO sesionGrupal (nombreTutor, grupo, mes, numeroSesion, fecha, objetivo, problematica, remediales, resultados, observaciones) VALUES ('$nombreTutor', '$grupo', '$mes', '$numeroSesion', '$fecha', '$objetivoSesion', '$problema', '$actividadRemedial', '$resultado', '$observaciones')";
				$result = mysqli_query(Conexion::conectar(),$sql);
				echo $sql;
				echo'<script>
				alert("Se agrego una nueva Entrevista Grupal")</script>';
		}



	} /* Fin de Clase Sesion */

	class Historial{

		public function mostrarHistorial($grupo){
			$sql = "SELECT * FROM alumnos WHERE grupo = '$grupo'";
				$result = mysqli_query(Conexion::conectar(),$sql);

					while ($row =mysqli_fetch_array($result)) {
							?>
								<div class="col-xs-12 col-sm-4 col-md-3 well">
								<p class="producto_row" style=" text-align:center; color: black; font-weight; bold;"><?php echo $row[1].' '.$row[2].' '.$row[3]; ?></p>
								<img src="../../media/imagen/alumnos/<?php echo $row[4] ?>" width="105" height="150" id="imagen"> <br>

							<div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
								<div class="btn-group">
							  <button type="button" class="btn btn-primary dropdown-toggle"
							          data-toggle="dropdown">
							    Generar Formatos <span class="caret"></span>
							  </button>

							  <ul class="dropdown-menu" role="menu">
							    <li><a href="../formatos/frlEntrevistaIndividual.php?id=<?php echo $row[12]  ?>">Entrevista Individual</a></li>
							    <li><a href="../formatos/frlFichaDeCanalizacion.php?id=<?php echo $row[12]  ?>">Canalizar Alumno</a></li>
							    <li class="divider"></li>
							    <li><a href="../historial/historialfichas/mostrarFicha.php?id=<?php echo $row[12]  ?>">Ver Fiacha</a></li>
							  </ul>
							</div>
							</div>
							 </div>
								</form>
								 	 <?php
								 }

		} /* Fin de Mostrar Hisoral */

		public function mostrarEspecialidad(){
			$sql = "SELECT * FROM especialidades";
				$result = mysqli_query(Conexion::conectar(), $sql);



		$tabla = "<table class='table'> \n";
			$tabla.= "<tr> \n";
			$tabla.= "<td><b>ID</b></td>\n";
			$tabla.= "<td><b>Nombre</b></td>\n";


				while ($fila = mysqli_fetch_row($result)) {

					$tabla.= "<tr> \n";
					$tabla.= "<td>$fila[0]</td>\n";
					$tabla.= "<td>$fila[1]</td>\n";

					$tabla.="</tr> \n";
				}

				$tabla.="</table> \n";

				return $tabla;

	}

	public function mostrarGeneracion(){
			$sql = "SELECT * FROM generaciones";
				$result = mysqli_query(Conexion::conectar(), $sql);

		$tabla = "<table class='table'> \n";
			$tabla.= "<tr> \n";
			$tabla.= "<td><b>ID</b></td>\n";
			$tabla.= "<td><b>Nombre</b></td>\n";


				while ($fila = mysqli_fetch_row($result)) {

					$tabla.= "<tr> \n";
					$tabla.= "<td>$fila[0]</td>\n";
					$tabla.= "<td>$fila[1]</td>\n";

					$tabla.="</tr> \n";
				}

				$tabla.="</table> \n";

				return $tabla;

	}

	public function mostrarSemestres(){
			$sql = "SELECT * FROM semestres";
				$result = mysqli_query(Conexion::conectar(), $sql);

		$tabla = "<table class='table'> \n";
			$tabla.= "<tr> \n";
			$tabla.= "<td><b>ID</b></td>\n";
			$tabla.= "<td><b>Nombre</b></td>\n";


				while ($fila = mysqli_fetch_row($result)) {

					$tabla.= "<tr> \n";
					$tabla.= "<td>$fila[0]</td>\n";
					$tabla.= "<td>$fila[1]</td>\n";

					$tabla.="</tr> \n";
				}

				$tabla.="</table> \n";

				return $tabla;

	}

	public function mostrarGrupos(){
			$sql = "SELECT * FROM grupos";
				$result = mysqli_query(Conexion::conectar(), $sql);

		?>
		<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">


        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                       </tr>
                    </thead>
                    <?php
                    	while ($fila = mysqli_fetch_row($result)) {
						?>
					<tr>
					<td> <?php echo $fila[0]; ?></td>
					<td> <?php echo $fila[1]; ?></td>
					<td> <?php echo $fila[2]; ?></td>

					<?php
				}
                     ?>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		<?php

	}

	public function mostrarEntrevistas(){
		$sql = "SELECT * FROM sesionprivada";
			$result = mysqli_query(Conexion::conectar(), $sql);

			?>
			<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Registro de Entrevistas
          </h1>
          <br>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nombre del alumno</th>
                        <th>Grupo</th>
                        <th>Fecha</th>
                       </tr>
                    </thead>
                    <?php
                    	while ($fila = mysqli_fetch_row($result)) {
						?>
					<tr>
					<td> <a href="mostrarEntrevista.php?id=<?php echo $fila[0]?>"><?php echo $fila[1]; ?></a></td>
					<td> <?php echo $fila[2]; ?></td>
					<td> <?php echo $fila[3]; ?></td>

					<?php
				}
                     ?>
                    <tfoot>
                      <tr>
                        <th>Nombre del alumno</th>
                        <th>Grupo</th>
                        <th>Fecha</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
			<?php
	}

	public function mostrarCanalizaciones(){
		$sql = "SELECT * FROM canalizaciones";
			$result = mysqli_query(Conexion::conectar(), $sql);

			?>
			<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Registro de Canalizaciones
          </h1>
          <br>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nombre del alumno</th>
                        <th>Semestre</th>
                        <th>Fecha</th>
                        <th>Tutor</th>
                        <th>Especialidad</th>
                       </tr>
                    </thead>
                    <?php
                    	while ($fila = mysqli_fetch_row($result)) {
						?>
					<tr>
					<td> <a href="verCanalizacion.php?id=<?php echo $fila[0]?>"><?php echo $fila[3]; ?></a></td>
					<td> <?php echo $fila[4]; ?></td>
					<td> <?php echo $fila[1]; ?></td>
					<td> <?php echo $fila[6]; ?></td>
					<td> <?php echo $fila[7]; ?></td>
					<?php
				}
                     ?>
                    <tfoot>
                      <tr>
                        <th>Nombre del alumno</th>
                        <th>Grupo</th>
                        <th>Fecha</th>
                        <th>Tutor</th>
                        <td>Especialidad</td>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
			<?php
	}

	public function mostrarFichas(){
		$sql = "SELECT * FROM alumnos";
			$result = mysqli_query(Conexion::conectar(), $sql);

			?>
			<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Registro de Alumnos
          </h1>
          <br>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nombre del alumno</th>
                        <th>Grupo</th>
                        <th>Edad</th>
                        <th>Localidad</th>
                        <th>Cilco</th>
                        <th>Estado</th>
                       </tr>
                    </thead>
                    <?php
                    	while ($fila = mysqli_fetch_row($result)) {
						?>
					<tr>
					<td> <a href="mostrarFicha.php?id=<?php echo $fila[12]?>"><?php echo $fila[1]." ".$fila[2]." ".$fila[3]; ?></a></td>
					<td> <?php echo $fila[13]; ?></td>
					 <?php

            $fecha = $fila[5];
            list($y, $m, $d) = explode("-", $fecha);
            $y_dif = date("Y") - $y;
            $m_dif = date("m") - $m;
            $d_dif = date("d") - $d;
            if ((($d_dif < 0) && ($m_dif == 0)) || ($m_dif < 0))
                $y_dif--;
            ?>
					<td> <?php echo $y_dif;; ?></td>
					<td> <?php echo $fila[9]; ?></td>
					<td> <?php echo $fila[16]; ?></td>
					<td></td>
					<?php
				}
                     ?>
                    <tfoot>
                     <!-- <tr>
                        <th>Nombre del alumno</th>
                        <th>Grupo</th>
                        <th>Fecha</th>
                        <th>Tutor</th>
                        <td>Especialidad</td>
                      </tr> -->
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
			<?php
	}

public function mostrarEntrevistasGrupo(){
		$sql = "SELECT * FROM sesiongrupal";
			$result = mysqli_query(Conexion::conectar(), $sql);

			?>
			<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Registro de Alumnos
          </h1>
          <br>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Grupo</th>
                        <th>Tutor</th>
                        <th>Fecha</th>
                        </tr>
                    </thead>
                    <?php
                    	while ($fila = mysqli_fetch_row($result)) {
						?>
					<tr>
					<td> <a href="mostrarEntrevista.php?id=<?php echo $fila[0]?>"><?php echo $fila[2]; ?></a></td>
					<td> <?php echo $fila[1]; ?></td>
					<td> <?php echo $fila[5] ?></td>
					<?php
				}
                     ?>
                    <tfoot>
                     <!-- <tr>
                        <th>Nombre del alumno</th>
                        <th>Grupo</th>
                        <th>Fecha</th>
                        <th>Tutor</th>
                        <td>Especialidad</td>
                      </tr> -->
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
			<?php
	}

	public function mostrarCanalizacionesTutor($idGrupo){
		$sql = "SELECT * FROM canalizaciones where grupo = '$idGrupo'";
			$result = mysqli_query(Conexion::conectar(), $sql);

			?>
			<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Registro de Canalizaciones
          </h1>
          <br>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nombre del alumno</th>
                        <th>Semestre</th>
                        <th>Fecha</th>
                        <th>Tutor</th>
                        <th>Especialidad</th>
                       </tr>
                    </thead>
                    <?php
                    	while ($fila = mysqli_fetch_row($result)) {
						?>
					<tr>
					<td> <a href="verCanalizacion.php?id=<?php echo $fila[0]?>"><?php echo $fila[3]; ?></a></td>
					<td> <?php echo $fila[4]; ?></td>
					<td> <?php echo $fila[1]; ?></td>
					<td> <?php echo $fila[6]; ?></td>
					<td> <?php echo $fila[7]; ?></td>
					<?php
				}
                     ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
			<?php
	}

	public function mostrarEntrevistasTutor($idGrupo){
		$sql = "SELECT * FROM sesionprivada where grupo = '$idGrupo'";
			$result = mysqli_query(Conexion::conectar(), $sql);

			?>
			<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Registro de Canalizaciones
          </h1>
          <br>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nombre del alumno</th>
                        <th>Grupo</th>
                        <th>Fecha</th>
                        
                       </tr>
                    </thead>
                    <?php
                    	while ($fila = mysqli_fetch_row($result)) {
						?>
					<tr>
					<td> <a href="mostrarEntrevista.php?id=<?php echo $fila[0]?>"><?php echo $fila[1]; ?></a></td>
					<td> <?php echo $fila[2]; ?></td>
					<td> <?php echo $fila[3]; ?></td>
					
					<?php
				}
                     ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
			<?php
	}

	public function mostrarEntrevistasGrupoTutor($idGrupo){
		$sql = "SELECT * FROM sesiongrupal where grupo = '$idGrupo'";
			$result = mysqli_query(Conexion::conectar(), $sql);

			?>
			<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Registro de Canalizaciones
          </h1>
          <br>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      	<th>Tutor</th>
                        <th>Fecha</th>
                        <th>Grupo</th>
                        <th>Mes</th>
                        </tr>
                    </thead>
                    <?php
                    	while ($fila = mysqli_fetch_row($result)) {
						?>
					<tr>
					<td> <a href="mostrarEntrevista.php?id=<?php echo $fila[0]?>"><?php echo $fila[1]; ?></a></td>
					<td> <?php echo $fila[5]; ?></td>
					<td> <?php echo $fila[2]; ?></td>
					<td> <?php echo $fila[3]; ?></td>
					<?php
				}
                     ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
			<?php
	}

	} /* Fin de Clase Historial--*/

 ?>
