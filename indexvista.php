<?php
/*file_put_contents('output.txt',file_get_contents("php://input",true));
$file = file_get_contents("php://input",true);
$arrayPost = explode(',',$file);
$b = array('conexion', 'provider', 'interna','externa','bateria','cargandocon');
$d = array_combine($b, $arrayPost);file_put_contents('output.txt',print_r($d, TRUE));
*/
?>
<!DOCTYPE html>
<html lang="en">







  <head>
    <title>Admin</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">




<script>

  
function openNav() {


    document.getElementById("mySidenav").style.width = "250px";



}

function closeNav() {

        document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";


}
</script>

  </head>


  <body id="body">



<nav class="navbar navbar-expand-lg navbar-light bg-light">




 <div id="info">


    <ul>
       <div class="row">

      <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/if_antenna_1167980.png"width="40" height="50"> <a></a><h1 id="porcientobateria"> -- </h1></li>

</div>
    
    <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/if_BatteryDead_728906.png"width="40" height="50"><a></a><h1 id="estatoBateria"> -- </h1></li>
  </div>

  <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/if_phoneok_1140313.png"width="50" height="50"><a></a><h1 id="estatusConectado"> -- </h1></li>
</div>

  <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/MemoriaExterna.png"width="50" height="50"><a></a><h1 id="MemoriaInterna"> -- </h1></li>
  </div>
    <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/mediamemory_92612.png"width="50" height="50"><a></a><h1 id="MemoriaExterna"> -- </h1></li>
  </div>
</div>



</div>

  </ul>

</div>


   

</nav>





<div id="mai1n" class="navbar-light navbar-toggler">
  <span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navabr-dark">
      
      <div id="main">
  <span style="font-size:25px;cursor:pointer;" onclick="openNav()">&#9776; MENU</span>
</div>





 <div id="info">




    <ul>
       <div class="row">

      <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/if_antenna_1167980.png"width="40" height="50"> <a> Señal :</a><h1>84 %</h1></li>

</div>
    
    <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/if_BatteryDead_728906.png"width="40" height="50"><a> Bateria :</a><h1>Cargando..</h1></li>
  </div>

  <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/if_phoneok_1140313.png"width="50" height="50"><a> Estatus :</a><h1>ACTIVO.</h1></li>
</div>





</div>

  </ul>

</div>


</nav>












<div class="container" class="container">




<div id="contenedor" >



  <div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;GPS</button>

  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;SMS</button>
  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;AUDIO</button>
  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;IMAGEN</button>

</div>

<?php





/*$a = Array(
  
    "conexion" => "MOBILE:LTE",
    "provider" => "provider:Android",
    "interna" => "597 MB",
    "externa" => "597 MB",
    "bateria" => "100 %",
    "cargandocon" => "Cargando Via AC"
);*/

function ImprimirDOM($campo,$texto){

    ?><script type="text/javascript"> 
    var div = document.getElementById('<?php echo $campo ?>');  
      div.textContent =  '<?php echo $texto ?>'; 
    </script>
    <?php

}


include 'p.php';

$datos="";
if ((include 'p.php') == TRUE) {
    $datos = include 'p.php';
}



foreach ($datos as $k => $v) {



  if($k=="conexion"){

      ImprimirDOM("porcientobateria",$v);
  } 

  if ($k=="bateria") {

    ImprimirDOM("estatoBateria",$v);

  }

    if ($k=="interna") {

    ImprimirDOM("MemoriaInterna",$v);

  }

      if ($k=="externa") {

    ImprimirDOM("MemoriaExterna",$v);

  }

ImprimirDOM("estatusConectado","CONECTADO");




}

?>

<div id="sms">



<!--<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">De</th>
      <th scope="col">Hora</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>

    </tr>


  </tbody>
</table>-->





</div>



</div>
</div>

  


 <script src="js/main.js"></script> 
  <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj__PUJ_RRfwIFYXe-10gfuC-PvPY492Y&callback=initMap"></script>

  </body>
</html>