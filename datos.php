
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


  <body>
<?php 

	
$file = $_POST['valo'];

function ImprimirDOM($campo,$texto){

    ?>
    <script type="text/javascript"> 
    	alert("hola");
    	$("#provider").attr("value",$texto);

    var div = document.getElementById('<?php echo $campo ?>');  
      div.textContent =  '<?php echo $texto ?>'; 
    </script>
    <?php
}



$arrayPost = explode(',',$file);

$campos = array('conexion', 'provider', 'interna','externa','bateria','cargandocon');


if(!empty($file)){

if(is_array($arrayPost)){

$datos= array_combine($campos, $arrayPost);

}
}else{
	print_r("sin datos");
}

//file_put_contents('output.txt',print_r($datos, TRUE));

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
        

?>



  </body>
</html>