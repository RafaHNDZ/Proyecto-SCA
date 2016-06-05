<div class="row">
	<div class="col s12 m4 l4">
		
	</div>
</div>
<div class="row">
	<div class="col s12 m12 l12">
		<div class="card-panel">
			<div class="card-content">
				<span class="card-title"><h5>Control de Semestres</h5></span>
			</div>
			<div class="card-body">
				<table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_personal">
					<thead> 
						<tr> 
							<th>Rendering engine</th> 
							<th>Browser</th> 
							<th>Platform(s)</th> 
							<th>Engine version</th> 
							<th>CSS grade</th> 
						</tr> 
					</thead> 
					
					<tbody> 
						<tr class="gradeX"> 
							<td>Trident</td> 
							<td>Internet
								 Explorer 4.0</td> 
							<td>Win 95+</td> 
							<td class="center">4</td> 
							<td class="center">X</td> 
						</tr> 
						<tr class="gradeC"> 
							<td>Trident</td> 
							<td>Internet
								 Explorer 5.0</td> 
							<td>Win 95+</td> 
							<td class="center">5</td> 
							<td class="center">C</td> 
						</tr> 
						<tr class="gradeA"> 
							<td>Trident</td> 
							<td>Internet
								 Explorer 5.5</td> 
							<td>Win 95+</td> 
							<td class="center">5.5</td> 
							<td class="center">A</td> 
						</tr> 
						<tr class="gradeA"> 
							<td>Trident</td> 
							<td>Internet
								 Explorer 6</td> 
							<td>Win 98+</td> 
							<td class="center">6</td> 
							<td class="center">A</td> 
						</tr> 
												
						<tr class="gradeA"> 
							<td>Gecko</td> 
							<td>Mozilla 1.5</td> 
							<td>Win 95+ / OSX.1+</td> 
							<td class="center">1.5</td> 
							<td class="center">A</td> 
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="fixed-action-btn vertical" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large blue">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating blue btn tooltipped btn modal-trigger" href="#form_semestre" data-position="left" data-delay="50" data-tooltip="Registrar Semestre"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></li>
    </ul>
</div>

<!-- Formulario en Modal -->

  <div id="form_semestre" class="modal">
    <div class="modal-content">
      <h4>Registrar Semestre</h4>
      <p>Ingresa los siguientes datos en el formulario</p>
      <form>
        <div class="input-field col s9 m9">
          <input id="nombre_semestre" type="text" class="validate">
          <label for="nombre_semestre">Nombre del Semestre</label>
        </div>     
    </div>
    <div class="modal-footer">
           	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" type="submit">Confirmar</a>
      		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    	</form>
    </div>
  </div>