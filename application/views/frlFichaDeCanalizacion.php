<div class="row">
  <div class="col s12 m12 l12">
    <div class="card-panel">
      <span class="card-tittle">
        <h6>Ficha de Canalización</h6>
      </span>
      <div class="card-body">
        <div class="row">
          <div class="divider"></div>
            <div class="input-field col s12 m4 l2">
              <input type="date" id="fecha" class="datepicker">
              <label for="fecha">Fecha</label>
            </div>
            <div class="input-field col s12 m4 l3">
              <input placeholder="" id="numeroControl" type="text" class="validate">
              <label for="numeroControl">Numero de Control</label>
            </div>
            <div class="input-field col s12 m4 l4">
              <input placeholder="" id="nombreAlumno" type="text" class="validate">
              <label for="nombreAlumno">Nombre del Alumno</label>
            </div>
            <div class="input-field col s12 m4 l3">
              <input placeholder="" id="semestre" type="text" class="validate">
              <label for="semestre">Semestre</label>
            </div>
            <div class="input-field col s12 m4 l3">
              <input placeholder="" id="edad" type="text" class="validate">
              <label for="edad">Edad:</label>
            </div>
            <div class="input-field col s12 m4 l3">
              <input placeholder="" id="especialidad" type="text" class="validate">
              <label for="especialidad">Especialidad</label>
            </div>
            <div class="input-field col s12 m12 l6">
              <input placeholder="" id="nombreTutor" type="text" class="validate">
              <label for="nombreTutor">Nombre del Tutor</label>
            </div>
          <div class="divider"></div>
            <div class="input-field col s12 m12 l12">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="problematica" class="materialize-textarea" length="200"></textarea>
              <label for="problematica">Problematica Identificada</label>
            </div>
            <div class="input-field col s12 m12 l12">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="servicio" class="materialize-textarea" length="200"></textarea>
              <label for="servicio">Servicio Solicitado</label>
            </div>
            <div class="input-field col s12 m12 l12">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="observaciones" class="materialize-textarea" length="200"></textarea>
              <label for="observaciones">Observaciones</label>
            </div>
            <div class="divider"></div>
            <div class="col s12 m6 l6 center-align">
              <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
              </button>
            </div>
            <div class="col s12 m6 l6 center-align">
              <button class="btn waves-effect waves-light" type="submit" name="action">Limpiar
                <i class="material-icons right">clear_all</i>
              </button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>