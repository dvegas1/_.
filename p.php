<?php



setlocale(LC_TIME,"es_ES");    
$timestamp = date('Y-m-d G:i:s');

 if (file_exists("config.php")) {
    include("config.php");
  } else {
    die();
  }

  $connect = pg_connect("host=ec2-54-243-213-188.compute-1.amazonaws.com port=5432 dbname=db09ndbttdsrah user=wszbrnhhydxwjf password=e40c850f827525377b64aadca0b2ce32f90843fab4e98f07c0251651aaaec21c") or die('No se ha podido conectar: ' . pg_last_error());
//conectarse a una base de datos llamada "mary" en el host "sheep" con el nombre de usuario y password
if (!$connect) {
  echo "Ocurrió un error.\n";
  exit;
}

/*foreach($obj as $clave => $valor) {
    print "$clave => $valor\n";
}*/


$consulta = ("SELECT count(*) FROM estatusdevice where username='dvegas'");
$ejeconsulta= pg_query($connect,$consulta) or die('La consulta fallo: ' . pg_last_error());

if (!$ejeconsulta) {
  echo "Ocurrió un error.\n";
  exit;
}else{


$json = file_get_contents('php://input');
$obj = json_decode($json,true);


if (!empty($obj)) {

$hola= $obj[0] . $obj[1] . $obj[2] . $obj[3] . $obj[4];


file_put_contents("output.txt",$hola .  " " . $hora);

while ($row = pg_fetch_row($ejeconsulta)) {
  echo "Count: $row[0]";
}

//echo $ejeconsulta;

}

}
//var_dump($obj);

//file_put_contents("lastonline.txt",print_r($rate));

?>

