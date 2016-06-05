<div class="row"> <!-- 1ra Fila -->
  <div class="col s12 m12 l12">
    <div class="card-panel">
      <div class="card-content">
        <div class="card-title">
          <h3 class="center-align">Formato de Registro</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12 m4 l4">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate" length="30">
                    <label for="first_name">Nombre</label>
                  </div>
                  <div class="input-field col s12 m4 l4">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate" length="40">
                    <label for="last_name">Apellido Paterno</label>
                  </div>
                  <div class="input-field col s12 m4 l4">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate" length="40">
                    <label for="first_name">Apellido Materno</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m4 l4">
                    <select>
                      <option value="" disabled selected>Elije una Opción</option>
                      <option value="1">Tutor</option>
                      <option value="2">Administrador</option>
                    </select>
                    <label>Privilegios</label>
                  </div>
                  <div class="input-field col s12 m4 l4">
                    <select>
                      <option value="" disabled selected>Elije una Opción</option>
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                    <label>Estado</label>
                  </div>
                  <div class="input-field col s12 m4 l4">
                    <select>
                      <option value="" disabled selected>Elije una Opción</option>
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                    <label>Grupo a Tutorar</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m6 l6">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m6 l6">
                    <input id="password" type="password" class="validate">
                    <label for="password">Contraseña</label>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <input id="password" type="password" class="validate">
                    <label for="password">Confirmar Contraseña</label>
                  </div>
                </div>
              </form>
            </div>
            <div class="row">
              <div class="col s12 m6 l6 center-align">
                <a class="waves-effect waves-light btn blue" type="submit"><i class="material-icons right">thumb_up</i>Registrar</a>
              </div>
              <div class="col s12 m6 l6 center-align">
                <a class="waves-effect waves-light btn red" type="reset"><i class="material-icons right">warning</i>Limpiar</a>
              </div>
            </div>
          </div>  
         </div> 
      </div>
    </div>
   </div>
  </div>

  <script>
    $(document).ready(function() {
      $('select').material_select();
    });
  </script>