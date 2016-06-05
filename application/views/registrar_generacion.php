<div class="col-xs-12 col-sm-12 well"> <!-- 1ra Fila -->
    <h2 id="titulo"> Nueva Generación </h2>
    <div class="col-xs-12 col-md-8 col-md-offset-2 well">
      <form class="form-horizontal" action=""  method="POST" enctype="multipart/form-data">
      <div class="col-xs-12 col-md-12 well"> <!-- Datos del tutor --> <br class="hidden-md">
             <label class="col-xs-12 col-md-6">Nombre de la Generación:</label>
             <div class="col-xs-12 col-md-6 col-md-offset-0">
             <input type="text" class="form-control" id="nombreGeneracion" name="nombreGeneracion" required="required" >
             </div>      
        </div>
      <div class="col-xs-12 col-md-12">
            <input type="submit" class="btn btn-primary col-xs-12 col-md-2 col-md-offset-4" value="Enviar" onclick="return validar()"> <br class="visible-xs"> <br class="visible-xs">
          </div>
    </form>
    </div>
</div>