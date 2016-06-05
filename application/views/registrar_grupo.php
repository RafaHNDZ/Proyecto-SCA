<div class="col-xs-12 col-sm-12 well"> <!-- 1ra Fila -->
    <h2 id="titulo"> Nuevo Grupo </h2>
    <div class="col-xs-12 col-md-8 col-md-offset-2 well">
      <form class="form-horizontal" action=""  method="POST" enctype="multipart/form-data">
      <div class="col-xs-12 col-md-12 well"> <!-- Datos del tutor --> <br class="hidden-md">
             <label class="col-xs-12 col-md-6">Nombre del Grupo:</label>
             <div class="col-xs-12 col-md-6 col-md-offset-0">
             <input type="text" class="form-control" id="nombreGrupo" name="nombreGrupo" placeholder="Nombre del Grupo" required="required" >
             </div>      
        </div>
        <div class="col-xs-12 col-md-12 well">
          <label class="col-xs-12 col-md-6">Especialidad:</label>
             <div class="col-xs-12 col-md-6">
             <select name="especialidad" id="especialidad" class="form-control">
              <option value="1">Quimica</option>
              <option value="2">Fisica</option>
              <option value="2">Logica</option>
              <option value="2">Programacion</option>
        </select>
        </div>
        </div>
        <br>
        <div class="col-xs-12 col-md-12">
            <br class="visible-xs"> 
            <input type="submit" class="btn btn-primary col-xs-12 col-md-2 col-md-offset-4" value="Enviar"> 
          </div>       
    </form>
    </div>
    </div>