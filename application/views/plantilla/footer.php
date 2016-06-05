	</div>
</div>
<div id="tx-live-lang-container" class="txlive-langselector txlive-langselector-bottomright">
	<ul id="tx-live-lang-picker" class="txlive-langselector-list notranslate">
		<li data-value="en">English</li>
		<li data-value="cs">Čeština</li>
		<li data-value="nl">Nederlands</li>
		<li data-value="fr">Français</li>
		<li data-value="de">Deutsch</li>
		<li data-value="ko">한국어</li>
		<li data-value="pt">Português</li>
		<li data-value="ru">Русский</li>
		<li data-value="es">Español</li>
		<li data-value="sv">Svenska</li>
	</ul>
	
	<div class="txlive-langselector-toggle notranslate" id="tx-live-lang-toggle">
		<span class="txlive-langselector-current" id="tx-live-lang-current">Español</span>
		<span class="txlive-langselector-marker"></span>
	</div>
</div>

<footer>
</footer>
	<script src="<?php echo base_url();?>files/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>files/materialize/js/materialize.min.js"></script>
    <!-- <script src="<?php echo base_url();?>files/js/bootstrap.js"></script> -->
     <script>
     	$(document).ready(function(){
  	    	$(".button-collapse").sideNav();
  	    	  $('.datepicker').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 15 // Creates a dropdown of 15 years to control year
			  });
			$('select').material_select();
			$('input#input_text, textarea#textarea1').characterCounter();
			$('ul.tabs').tabs();
			$('.tooltipped').tooltip({delay: 50});
			$('#tabla_personal').DataTable({
			  	"paging": true,
			    "lengthChange": false,
			    "searching": true,
			    "ordering": true,
			    "info": true,
			    "autoWidth": true
			});
			$('.modal-trigger').leanModal();
			$('#preloader').fadeOut('slow');
   			$('body').css({'overflow':'visible'});        
   	 	});
  	</script>
</body>
</html>