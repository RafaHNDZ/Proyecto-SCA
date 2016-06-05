function validar(){  
   
   var numeroControl = document.getElementById('numero_control').value;

        if( numeroControl == null || numeroControl.length == 0) {
            return false;
            alert("Revisa el numero de Control");
        }

        if( isNaN(numeroControl) ) {
            return false;
        }
    }
