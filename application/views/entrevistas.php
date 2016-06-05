<div class="container">
	 <div class="col-xs-12 ol-md-12 well">
	     <?php 
	     $idGrupo = $_SESSION['grupo'];
	   $entrevistas = new Historial;
	   echo $entrevistas->mostrarEntrevistasTutor($idGrupo);
	   ?> 
	 </div>
</div>