<div class="row">
  <div class="col s12 m12 l12">
    <div class="card-panel">
      <div class="card-content">
        <span class="card-tittle">
        <h5>Formato de Acompañamiento Grupal</h5>
        </span>
        <div class="card-body">
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input placeholder="" id="nombreTutor" type="text" class="validate">
              <label for="nombreTutor">Nombre del Tutor</label>
            </div>
            <div class="input-field col s12 m3 l3">
              <input placeholder="" id="nombreGrupo" type="text" class="validate">
              <label for="nombreGrupo">Nombre del Grupo</label>
            </div>
            <div class="input-field col s12 m3 l3">
              <select>
                <option value="" disabled selected>Seleccione un Mes</option>
                <option value="01">Enero</option>
                <option value="02">Febrero</option>
                <option value="03">Marzo</option>
                <option value="04">Abril</option>
                <option value="05">Mayo</option>
                <option value="06">Junio</option>
                <option value="07">Julio</option>
                <option value="08">Agosto</option>
                <option value="09">Septimembre</option>
                <option value="10">Outubre</option>
                <option value="11">Novembre</option>
                <option value="12">Diciembre</option>
              </select>
              <label>Mes</label>
            </div>
            <div class="input-field col s12 m3 l3">
              <input type="date" id="fecha" class="datepicker">
              <label for="fecha">Fecha</label>
            </div>
            <div class="input-field col s12 m3 l3">
              <input placeholder="" id="numeroSesion" type="text" class="validate">
              <label for="numeroSesion">Numero de Sesion</label>
            </div>
            <div class="input-field col s12 m12 l12">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="objetivo" class="materialize-textarea" length="200"></textarea>
              <label for="objetivo">Objetivo de la Sesión</label>
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="problematica" class="materialize-textarea" length="200"></textarea>
              <label for="problematica">Problematica Identificada</label>
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="actividades" class="materialize-textarea" length="200"></textarea>
              <label for="actividades">Actividades Remediales</label>
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="Resultados" class="materialize-textarea" length="200"></textarea>
              <label for="Resultados">Resultados</label>
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="observaciones" class="materialize-textarea" length="200"></textarea>
              <label for="observaciones">Observaciones</label>
            </div>
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
</div>