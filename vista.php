<?php 
$file= file_get_contents("php://input",true); 

//$file="LTE,Android,597 MB,597 MB,100 %,Cargando Via AC";
if(!empty($_POST['array'])){
$data = json_decode($_POST['array']);
var_dump($data);
}
?>

<!DOCTYPE html>
<html lang="en">



  <head>
    <title>Admin</title>
    <!--<meta http-equiv="Refresh" content="5;http://127.0.0.1/_in/vista.php"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>

    
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
    <li><img src="images/icono/if_antenna_1167980.png"width="40" height="50"> <a></a><h1 id="conexion"> -- </h1></li>

</div>

      <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/android_logo_PNG4.png"width="40" height="50"> <a></a><h1 id="sistema"> -- </h1></li>

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
    <li><img src="images/icono/if_antenna_1167980.png"width="40" height="50"> <a> Señal :</a><h1> -- </h1></li>

</div>
    
    <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/if_BatteryDead_728906.png"width="40" height="50"><a> Bateria :</a><h1> -- </h1></li>
  </div>

  <div class="col-sx-5 col-xs-5">
    <li><img src="images/icono/if_phoneok_1140313.png"width="50" height="50"><a> Estatus :</a><h1>ACTIVO.</h1></li>
</div>





</div>

  </ul>

</div>


</nav>















<div class="container" class="container">




<div id="contenedor">

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

    ?>

    <script type="text/javascript"> 
    var div = document.getElementById('<?php echo $campo ?>');  
      div.textContent =  '<?php echo $texto ?>'; 
    </script>
    <?php

}



?>



 


 <!-- <script type="text/javascript">
 setInterval(<?php echo "string"; "postear()"?>, 3000);
 </script>
-->
<?php

//postear();


/*
include 'p.php';

if ((include 'p.php') == TRUE) {
    $datos = include 'p.php';
}*/


//$file = file_get_contents("php://input",true);

//print_r($file);


global  $file;
?>
<script type="text/javascript">
$(document).ready(function() {	
    function update(){
        //var current = $('#counter').text();

        var dataString = 11;
        var img = '<?php echo $file; ?>'; 
 
        $.ajax({
            type: "POST",
            url: "vista.php",
            data: img,
            success: function() {
                $('#contenedor').text(img);
            }
        });
    }
 
    setInterval(update, 3000);
});
</script>
<?php


//$file="LTE,Android,597 MB,597 MB,100 %,Cargando Via AC";

$arrayPost = explode(',',$file);

$campos = array('conexion', 'provider', 'interna','externa','bateria','cargandocon');


if(!empty($file)){

if(is_array($arrayPost)){

$datos= array_combine($campos, $arrayPost);

}

}else{

    $datos = Array(
  
    "estatus" => "A la espera");

}




foreach ($datos as $k => $v) {
echo "a la espera todavia";
  while($k != "A la espera"){

  		break;
  }
}

//print_r($datos);

file_put_contents('output.txt',print_r($datos, TRUE));


if(is_array($datos)) {

foreach ($datos as $k => $v) {



  if($k=="provider"){

      ImprimirDOM("sistema",$v);
  } 


  if($k=="conexion"){

      ImprimirDOM("conexion",$v);
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

  if ($k=="estatus") {
ImprimirDOM("estatusConectado",$v);
}else{
  ImprimirDOM("estatusConectado","Conectado");
}

    }
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

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

  </body>
</html>