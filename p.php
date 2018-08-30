<!DOCTYPE html>
<html lang="en">


  <head>
    <title></title>
    <!--<meta http-equiv="Refresh" content="5;http://127.0.0.1/_in/vista.php"> -->
    <meta charset="utf-8">
      </head>

        <body>

<?php




$file = file_get_contents("php://input",true);

//print_r($file);

//$file="LTE,Android,597 MB,597 MB,100 %,Cargando Via AC";
$arrayPost = explode(',',$file);

if(!empty($file)) {
	# code...

$b = array('conexion', 'provider', 'interna','externa','bateria','cargandocon');

$datos= array_combine($b, $arrayPost);

}else{

	$datos = Array(
  
    "estatus" => "A la espera");
}


file_put_contents('output.txt',print_r($datos, TRUE));

?>

<script type="text/javascript">
	var dato="hola";

		function postear() { 

        var url = "vista.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: dato, 
           success: function(data)             
           {
             $('#resp').html(data);               
           }
       });
    }
 setInterval(postear, 1000);



        </script>
  <?php

return $datos;

?>
<script src="js/jquery-3.3.1.min.js"></script>
<body>
	</html>


