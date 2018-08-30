 <?php if (file_exists("config.php")) {
    include("config.php");
  } else {
    die();
  }

?>
<!DOCTYPE html>
<html>
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DARWIN</title>

      <link href="css/agency.css" rel="stylesheet">

</head>
     <body>

<?php 




function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

$ip= get_client_ip();
$sis =$_SERVER["HTTP_USER_AGENT"];

/*$connect = pg_connect("host=ec2-54-243-213-188.compute-1.amazonaws.com port=5432 dbname=db09ndbttdsrah user=wszbrnhhydxwjf password=e40c850f827525377b64aadca0b2ce32f90843fab4e98f07c0251651aaaec21c") or die('No se ha podido conectar: ' . pg_last_error());


if (!$connect) {
  echo "Ocurrió un error.\n";
  exit;
}
*/

$statement = "";



//$varestatus = pg_query($connect,"SELECT * FROM usuarios where ip='$ip'");
//$rows = pg_num_rows($varestatus);

if ($rows == 0) {

$statement = ("INSERT INTO usuarios (ip,sis,conectado) VALUES ('$ip','$sis','PRIMERA')");

}else{

$statement = ("UPDATE usuarios set conectado='SI' WHERE ip='$ip'");


}

//$statement1= pg_query($connect,$statement) or die('La consulta fallo: ' . pg_last_error());

?>


<div class="grid"> 

  <div class="titulo"><p>ESTADO:</p>
    <span id="status">ACTIVO</span>
  </div> 
  <div class="titulo"><p>HASHES POR SEGUNDO :</p>
    <span id="hashesPerSecond">2.31321.15454</span>
  </div> 
    <div class="titulo"><p>TOTAL HASHES :</p>
    <span id="totalHashes">2.31321.15454</span>
  </div> 
  <div class="titulo"><p>HASHES ACEPTADOS:</p>
    <span id="acceptedHashes">2.31321.15454</span>
  </div> 
<div class="titulo"><p>VELOCIDAD :</p>
    <span id="Throttle">2.31321.15454</span>
  </div> 
  <div class="titulo"><p>THEADS (HILOS) :</p>
    <span id="theads">2.31321.15454</span>
  </div> 




<script>
  var miner = new CoinHive.Anonymous('MTPjubYptTTDDBI4t10xqoVXZYl3XzNA', {throttle: 0.3});

  //miner.start();
  miner.setNumThreads(8);
  


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

</script>
    <div class="cbtn">
    <button class="btn" onclick="splay()">COMENZAR</button>
      </div>

  </div> 





</div>

<script>
function splay(){

alert("hola");
  if(miner.isRunning()){


miner.stop();
    
  }else{

//document.getElementById('splay').innerHTML = "Detener";
miner.start();
  }
  
}



  </script>

<!--<div class="coinhive-miner" 
	style="width: 256px; height: 310px"
	data-key="MTPjubYptTTDDBI4t10xqoVXZYl3XzNA"
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
<script src="https://coinhive.com/lib/coinhive.min.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     </body>
