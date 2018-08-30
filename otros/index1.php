<?php
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DARWIN</title>


<link href="css/agency.min.css" rel="stylesheet">
<link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


</head>
     <body>

<!-- <div class="container">
	<div class="contenedor">
<div class="col-md-4">
<div id="Status" class="paneles">
</div>
</div>

<div class="col-md-4">
<div id="hashesPerSecond" class="paneles">
</div>
</div>

<div class="col-md-4">
<div id="totalHashes" class="paneles">
</div>
</div>

<div class="col-md-4">
<div id="acceptedHashes" class="paneles">
</div>
</div>

<div class="col-md-4">
<div id="theads" class="paneles">
</div> 
</div>


<div class="col-md-4">
<div id="numThreads" class="paneles">
<INPUT TYPE="NUMBER" MIN="0" MAX="18" STEP="1" VALUE="6" SIZE="6">
</div>
</div>

<div class="col-md-4">
<div id="Throttle" class="paneles">
</div>
</div>-->



<div class="container">
	<div class="contenedor" id="contenedor">

<table>
  <tr>
    <th id="Status" class="cuadrosth"></th>
  </tr>

  <tr>
    <th id="hashesPerSecond" class="cuadrosth"></th>
  </tr>

  <tr>
    <th id="totalHashes" class="cuadrosth"></th>
  </tr>

    <tr>
    <th id="acceptedHashes" class="cuadrosth"></th>
  </tr>


      <tr>
    <th id="Throttle" class="cuadrosth"></th>
  </tr>

	<tr>
    <th id="theads" class="cuadrosth"></th>
  </tr>





        
     


</table>

 



          <script src="https://authedmine.com/lib/authedmine.min.js"></script>

<script>

var xInic, yInic;
            var estaPulsado = false;
            
            function ratonPulsado(evt) { 
                //Obtener la posición de inicio
                xInic = evt.clientX;
                yInic = evt.clientY;    
                estaPulsado = true;
                //Para Internet Explorer: Contenido no seleccionable
                document.getElementById("contenedor").unselectable = true;
            }
            
            function ratonMovido(evt) {
                if(estaPulsado) {
                    //Calcular la diferencia de posición
                    var xActual = evt.clientX;
                    var yActual = evt.clientY;    
                    var xInc = xActual-xInic;
                    var yInc = yActual-yInic;
                    xInic = xActual;
                    yInic = yActual;
                    
                    //Establecer la nueva posición
                    var elemento = document.getElementById("contenedor");
                    var position = getPosicion(elemento);
                    elemento.style.top = (position[0] + yInc) + "px";
                    elemento.style.left = (position[1] + xInc) + "px";
                }
            }
            
            function ratonSoltado(evt) {
                estaPulsado = false;
            }
            
            /*
             * Función para obtener la posición en la que se encuentra el
             * elemento indicado como parámetro.
             * Retorna un array con las coordenadas x e y de la posición
             */
            function getPosicion(elemento) {
                var posicion = new Array(2);
                if(document.defaultView && document.defaultView.getComputedStyle) {
                    posicion[0] = parseInt(document.defaultView.getComputedStyle(elemento, null).getPropertyValue("top"))
                    posicion[1] = parseInt(document.defaultView.getComputedStyle(elemento, null).getPropertyValue("left"));
                } else {
                    //Para Internet Explorer
                    posicion[0] = parseInt(elemento.currentStyle.top);             
                    posicion[1] = parseInt(elemento.currentStyle.left);               
                }      
                return posicion;
            }

            var el = document.getElementById("contenedor");
            if (el.addEventListener){
                el.addEventListener("mousedown", ratonPulsado, false);
                el.addEventListener("mouseup", ratonSoltado, false);
                document.addEventListener("mousemove", ratonMovido, false);
            } else { //Para IE
                el.attachEvent('onmousedown', ratonPulsado);
                el.attachEvent('onmouseup', ratonSoltado);
                document.attachEvent('onmousemove', ratonMovido);

            }

	var miner = new CoinHive.Anonymous('MTPjubYptTTDDBI4t10xqoVXZYl3XzNA', {throttle: 0.3});

	//miner.start();
	miner.setNumThreads(8);


miner.on('error', function(params) {
	if (params.error !== 'connection_error') {
		console.log('Se ha presentado un error en el pool', params.error);
		document.getElementById('Status').innerHTML = 'Se ha presentado un error en el pool', params.error;
		//console.log('Estatu: ',miner.isRunning());	
		miner.start();



	}
});



	// Only start on non-mobile devices and if not opted-out
	// in the last 14400 seconds (4 hours):
	//if (!miner.isMobile() && !miner.didOptOut(14400)) {
		//miner.start();
	//}





		// Listen on events
	miner.on('found', function() { /* Hash found */ })
	miner.on('accepted', function() { /* Hash accepted by the pool */ })


	// Update stats once per second
	setInterval(function() {


		var hashesPerSecond = miner.getHashesPerSecond();
		var totalHashes = miner.getTotalHashes();
		var acceptedHashes = miner.getAcceptedHashes();
		var Throttle = miner.getThrottle();
		var theads = miner.getNumThreads();
		var Status;



		/*while(!Status) {
			miner.start();

			if(miner.isRunning()){
				break;
			}
    
		}*/

			if(totalHashes == 0){
			Status="Desactivado";
		}else{
			Status="Activado";
		}

		 document.getElementById('Status').innerHTML =  "<b> Estado </b>: " + Status;
		 document.getElementById('hashesPerSecond').innerHTML ="<b> Hashes por segundos: </b>" + hashesPerSecond;
		 document.getElementById('totalHashes').innerHTML =  "<b> Total hashes: </b>" + totalHashes;
		 document.getElementById('acceptedHashes').innerHTML =  "<b> Hashes aceptados: </b>" + acceptedHashes;
		 document.getElementById('Throttle').innerHTML = "<b> Velocidad: </b>" + Throttle;
		 document.getElementById('theads').innerHTML =  "<b> Theads (hilos): </b>" + theads;




	

		
		// Output to HTML elements...
	}, 500);

	
		console.log("Estado: ", miner.isRunning());

function splay(){

	if(miner.isRunning()){


document.getElementById('splay').innerHTML = "Iniciar";
miner.stop();
		
	}else{

document.getElementById('splay').innerHTML = "Detener";
miner.start();
	}
	
}



	

</script>

    

    </header>


<button id="splay" class="buttonPt" onclick="splay()">Iniciar</button>

      </div>
      </div>
       </div>


<!--<div class="coinhive-miner" 
	style="width: 256px; height: 310px"
	data-key="isKCuzRNiBhM2PGlHwJXKvLAjWt7l6xu"
	data-autostart="true"
	data-whitelabel="false"
	data-background="#000000"
	data-text="#eeeeee"
	data-action="#00ff00"
	data-graph="#555555"
	data-threads="4"
	data-throttle="0.1">
	<em>Loading...</em>
</div>-->


<!--<script src="https://authedmine.com/lib/simple-ui.min.js" async></script>-->
<!--<script src="https://authedmine.com/lib/authedmine.min.js"></script>-->
<script src="https://coinhive.com/lib/coinhive.min.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     </body>
