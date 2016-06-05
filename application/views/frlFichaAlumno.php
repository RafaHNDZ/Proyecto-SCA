<div class="row">
	<div class="col s12 m12 l12">
		<div class="card-body">
			<div class="col s12 m12 l12">
				<div class="card-panel">
					<div class="row">
					<h5>Ficha de Registro de Alumno</h5>
					   <div class="col s12">
					     <ul class="tabs">
					       <li class="tab col s3"><a href="#test1">Datos Personales</a></li>
					       <li class="tab col s3"><a href="#test2">Datos Economicos</a></li>
					       <li class="tab col s3"><a href="#test3">Datos Familiares</a></li>
					       <li class="tab col s3"><a href="#test4">Datos Medicos</a></li>
					       <li class="tab col s3"><a href="#test5">Datos Academicos</a></li>
					     </ul>
					   </div>
					   <div id="test1" class="col s12">
					   	<form action="" method="POST">
					   	<div class="divider"></div>
							<br>
						   	<div class="input-field col s12 m6 l4">
						   		<i class="fa fa-user-secret prefix" aria-hidden="true"></i>
					        	<input id="numero_control" type="text" class="validate" required="required" required>
					        	<label for="numero_control">Numero de Control</label>
						   	</div>
						   	<div class="input-field col s12 m6 l4">
							    <i class="fa fa-users prefix" aria-hidden="true"></i>
							    <select>
							      <option value="" disabled selected>Escoje tu Grupo</option>
							      <option value="1">Option 1</option>
							      <option value="2">Option 2</option>
							      <option value="3">Option 3</option>
							    </select>
							    <label>Grupo:</label>
						   	</div>
						   	<div class="input-field col s12 m6 l4">
						   	<i class="fa fa-clock-o prefix" aria-hidden="true"></i>
							    <select>
							      <option value="" disabled selected>Escoje tu Turno</option>
							      <option value="1">Option 1</option>
							      <option value="2">Option 2</option>
							      <option value="3">Option 3</option>
							    </select>
							    <label>Turno:</label>
						   	</div>
						   	<div class="input-field col s12 m6 l3">
					        	<input id="nombre" type="text" class="validate">
					        	<label for="nombre">Nombre(s)</label>
						   	</div>
						   	<div class="input-field col s12 m6 l3">
					        	<input id="apellidoP" type="text" class="validate">
					        	<label for="apellidoP">Apellido Paterno</label>
						   	</div>
						   	<div class="input-field col s12 m6 l3">
					        	<input id="apellidom" type="text" class="validate">
					        	<label for="apellidom">Apellido Materno</label>
						   	</div>
						   	<div class="input-field col s12 m6 l3">
						   		<i class="fa fa-birthday-cake prefix" aria-hidden="true"></i>
						   		<input id="fechaNacimiento" type="date" class="datepicker">
						   		<label for="fechaNacimiento">Fecha de Nacimiento</label>
						   	</div>
							<div class="col s12 m6 l6">
							    <div class="file-field input-field">
							      <div class="btn blue">
							        <span>Imagen</span>
							        <input type="file" onChange="document.imagen.src='file:///' + this.value">
							      </div>
							      <div class="file-path-wrapper">
							       <input class="file-path validate" type="text">
							      </div>
							    </div>
							</div>
							<div class="col s12 m6 l6">
								<div class="row">
								  <div class="col-sm-6 col-md-3">
								    <a href="#" class="thumbnail">
										<img src="imagen_defecto.png" name="imagen">
								    </a>
								  </div>
								</div>
								<h5>Previsualiar Archivo de Imagen!</h5>
							</div>
						<div class="col s12 m12 l12">
							<div class="divider"></div>
							<h5>Domicilio o Residencia</h5>
						</div>

						   	<div class="input-field col s12 m6 l4">
						   	  <i class="fa fa-road prefix" aria-hidden="true"></i>
					          <input id="calle" type="text" class="validate">
					          <label for="calle">Calle</label>
						   	</div>
						   	<div class="input-field col s12 m6 l4">
						   	  <i class="fa fa-map-pin prefix" aria-hidden="true"></i>
					          <input id="numero" type="text" class="validate">
					          <label for="numero">Numero</label>
						   	</div>
						   	<div class="input-field col s12 m6 l4">
						   	  <i class="fa fa-location-arrow prefix" aria-hidden="true"></i>
					          <input id="colonia" type="text" class="validate">
					          <label for="colonia">Colonia</label>
						   	</div>
						   	<div class="input-field col s12 m6 l4">
						   	  <i class="fa fa-map prefix" aria-hidden="true"></i>
					          <input id="localidad" type="text" class="validate">
					          <label for="localidad">Localidad</label>
						   	</div>
						   	<div class="input-field col s12 m6 l4">
						   	  <i class="fa fa-envelope-o prefix" aria-hidden="true"></i>
					          <input id="codigoPostal" type="text" class="validate">
					          <label for="codigoPostal">Codigo Postal:</label>
						   	</div>
						   	<div class="input-field col s12 m6 l4">
						   	  <i class="material-icons prefix">phone</i>
					          <input id="telefono" type="text" class="validate">
					          <label for="telefono">Telefono</label>
						   	</div>
						</form>
					   </div>

					   <div id="test2" class="col s12">
					   
					   <div class="divider"></div>
					   	<div class="section">
					   		<br>
						   	<div class="input-field col s12 m6 l4">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Padre</option>
							      <option value="2">Madre</option>
							      <option value="3">De sí mismo0</option>
							      <option value="4">Otros</option>
							    </select>
							    <label>¿De quien dependes economicamente?</label>
						   	</div>
						   	<div class="input-field col s12 m6 l4">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Padre</option>
							      <option value="2">Madre</option>
							      <option value="3">Solo</option>
							      <option value="4">Espos@</option>
							      <option value="5">Otro</option>
							    </select>
							    <label>¿Actualmente con quien recides en tu domicilio?</label>
						   	</div>
						   	<div class="input-field col s12 m6 l4">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Si</option>
							      <option value="2">No</option>
							    </select>
							    <label>¿Actualmente tienes algu trabajo remunerado?</label>
						   	</div>
						   	<div class="input-field col s12 m12 l7">
					          <input id="telefono" type="text" class="validate">
					          <label for="telefono">¿Aproximadamente que ingresos obtiene tu familia mensualmente?</label>
						   	</div>
						   	<div class="input-field col s12 m12 l4">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Si</option>
							      <option value="2">No</option>
							    </select>
							    <label>¿Requieres trabajar para sustentar tus estudios?</label>
						   	</div>
					        <div class="input-field col s12 m12 l6">
					          <textarea id="motivoTrabajo" class="materialize-textarea" length="200"></textarea>
					          <label for="motivoTrabajo">¿Has trabajado anteriormente?, Indica el motivo:</label>
					        </div>
					   	</div>
					   	</form>
					   </div>

					   <div id="test3" class="col s12">
					   	
					   	<div class="divider"></div>
							<br>
					   		<div class="section">
							   	<div class="input-field col s12 m6 l6">
								    <select>
								      <option value="" disabled selected>Selecciona una Opción</option>
								      <option value="1">Mayor</option>
								      <option value="2">Mediano</option>
								      <option value="3">Menor</option>
								    </select>
								    <label>¿Que lugar ocupas en la familia?</label>
							   	</div>
							   	<div class="input-field col s12 m6 l6">
								    <select>
								      <option value="" disabled selected>Selecciona una Opción</option>
								      <option value="1">Muy Buena</option>
								      <option value="2">Buena</option>
								      <option value="3">Regular</option>
								      <option value="4">Mala</option>
								      <option value="5">Muy Mala</option>
								    </select>
								    <label>¿Como calificarias la relacion que tienes con tus padres?</label>
							   	</div>
						        <div class="input-field col s12">
						          <textarea id="situacionesFamiliares" class="materialize-textarea" length="200"></textarea>
						          <label for="situacionesFamiliares">¿Ha ocurrido alguna situacion dentro de tu familia que se pueda conciderar especial?</label>
						        </div>
						        <div class="input-field col s12">
						          <textarea id="Integrantes" class="materialize-textarea" length="200"></textarea>
						          <label for="Integrantes">¿Que otras personas viven con tigo?</label>
						        </div>
					   		</div>
					   	</form>
					   </div>

					   <div id="test4" class="col s12">
					  	
					  	<div class="divider"></div>
							<br>
						   	<div class="input-field col s12 m6 l6">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Si</option>
							      <option value="2">No</option>
							    </select>
							    <label>¿Actualmente padeces alguna enfermead o condicion fisica que te afecte?</label>
						   	</div>

						   	<div class="input-field col s12 m6 l6">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Si</option>
							      <option value="2">No</option>
							    </select>
							    <label>¿Actualmente recibes algun tratamiento medico o psicologico?</label>
						   	</div>

						   	<div class="input-field col s12 m6 l6">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Si</option>
							      <option value="2">No</option>
							    </select>
							    <label>¿Anteriormente has recibido algun tratamiento?</label>
						   	</div>

						   	<div class="input-field col s12 m6 l6">
					          <input id="tipoTratamientoAnterior" type="text" class="validate">
					          <label for="tipoTratamientoAnterior">¿De que tipo?</label>
						   	</div>

						   	<div class="input-field col s12 m6 l6">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Si</option>
							      <option value="2">No</option>
							    </select>
							    <label>¿Anteriormente has estado hospitalizado?</label>
						   	</div>

						   	<div class="input-field col s12 m6 l6">
					          <input id="hospitalizacion" type="text" class="validate">
					          <label for="hospitalizacion">¿Cual fue el motivo?</label>
						   	</div>

						   	<div class="input-field col s12 m6 l6">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Si</option>
							      <option value="2">No</option>
							    </select>
							    <label>¿Anteriormente te sometieron a alguna intervencion quirurgica?</label>
						   	</div>

						   	<div class="input-field col s12 m6 l6">
					          <input id="operacion" type="text" class="validate">
					          <label for="operacion">¿En que parte del cuerpo?</label>
						   	</div>

						   	<div class="input-field col s12 m6 l6">
							    <select>
							      <option value="" disabled selected>Selecciona una Opción</option>
							      <option value="1">Si</option>
							      <option value="2">No</option>
							    </select>
							    <label>¿Actualmente padeces alguna enfermedad cronica?</label>
						   	</div>

						   	<div class="input-field col s12 m6 l6">
					          <input id="enfermedadCronica" type="text" class="validate">
					          <label for="enfermedadCronica">¿Cual?</label>
						   	</div>
						</form>
					   </div>

					   <div id="test5" class="col s12">
						
						<div class="divider"></div>
						<br>
						   	<div class="input-field col s12 m12 l12">
					          <input id="promedioPrimaria" type="text" class="validate">
					          <label for="promedioPrimaria">¿Cual es tu promedio de la primaria?</label>
						   	</div>

						   	<div class="input-field col s12 m4 l4">
					          <input id="promedioSecundariaPrimerGrado" type="text" class="validate">
					          <label for="promedioSecundariaPrimerGrado">¿Promedio del 1° de secundaria?</label>
						   	</div>

						   	<div class="input-field col s12 m4 l4">
					          <input id="promedioSecundariaSegundoGrado" type="text" class="validate">
					          <label for="promedioSecundariaSegundoGrado">¿Promedio de 2° de secundaria?</label>
						   	</div>

						   	<div class="input-field col s12 m4 l4">
					          <input id="promedioSecundariaTercerGrado" type="text" class="validate">
					          <label for="promedioSecundariaTercerGrado">¿Promedio de 3° de secundaria?</label>
						   	</div>

						   	<div class="input-field col s12 m4 l4">
					          <input id="promedioCicloAnterior" type="text" class="validate">
					          <label for="promedioCicloAnterior">¿Cual es tu promedio de ciclo anterior?</label>
						   	</div>
					   </div>
						   <div class="col s12 m12 l12">
						   	<div class="divider"></div>
						   	<br>
						   </div>
				            <div class="col s12 m6 l6 center-align">
				              <button class="btn waves-effect waves-light" type="submit" name="action" onclick="return validar()">Enviar
				                <i class="material-icons right">send</i>
				              </button>
				            </div>
				            <div class="col s12 m6 l6 center-align">
				              <button class="btn waves-effect waves-light" type="clear" name="action">Limpiar
				                <i class="material-icons right">clear_all</i>
				              </button>
				            </div>
						</form>
					 </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

