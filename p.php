<?php

setlocale(LC_TIME,"es_ES");    
$timestamp = date('Y-m-d G:i:s');
$existe=0;
$jsonDatos="";
$ValorDado="";
$consultaI="";



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

$json = file_get_contents('php://input');
$obj = json_decode($json,true);


if (!empty($obj)) {

$jsonDatos= $obj[0] . $obj[1] . $obj[2] . $obj[3] . $obj[4] . $obj[5];

foreach($obj as $clave => $valor) {

    //print "$clave => $valor\n";

    if($valor=="informacion"){
    	print_r($obj);

    	 $ValorDado="informacion";

         file_put_contents("output.txt","$clave => $valor" .  " " . $timestamp);

       
}
}

}
/*foreach($obj as $clave => $valor) {
    print "$clave => $valor\n";
}*/



$consulta = ("SELECT count(*) FROM estatusdevice where username='dvegas'");
$ejeconsulta= pg_query($connect,$consulta) or die('La consulta fallo: ' . pg_last_error());

if (!$ejeconsulta) {
  echo "Ocurrió un error.\n";
  exit;
}


while ($row = pg_fetch_row($ejeconsulta)) {
  	
  	if($row[0]==1){  		
  	$existe=1;	
	echo "Count existe: $row[0]";
}

  }


 if($existe==0 && $ValorDado="informacion"){

 	$values = "";
foreach($obj as $temp){
  $values .= "'".$temp."',";


}

$querys="";

$subs=substr($values, -1);

if($subs==","){
$consultatemp= substr($values, 0, -1);
$querys= "(".$consultatemp.")";
}

echo " [ querys" . $querys . "]";

$consultaI = "INSERT INTO estatusdevices (informacion,username,signal,device,battery,status,internalmemory,externalmemory,date) values $querys";
$ejeconsultaInsert= pg_query($connect,$consultaI) or die('La consulta fallo: ' . pg_last_error());

if (!$ejeconsultaInsert) {
  echo "Ocurrió un error.\n";
  exit;
}else{
	echo "OK.";
}

  }

/*
foreach($obj as $clave => $valor) {


$consultaI = "INSERT INTO estatusdevices (username,signal,device,battery,status,internalmemory,externalmemory,date) 
VALUES ('{$clave->0}','{$clave->1}','{$clave->2}','{$clave->3}','{$clave->4}','{$clave->5}','{$clave->6}','2011-08-06 14:54:17')";
}
$ejeconsultaInsert= pg_query($connect,$consultaI) or die('La consulta fallo: ' . pg_last_error());
*/





/*
foreach ($data as $author) {
    mysql_query("INSERT INTO `authors` (`first_name`, `last_name`), VALUES('{$author->first_name}', '{$author->last_name}') ");
    $author_id = mysql_last_insert_id();
    foreach ($author->books as $book) {
        mysql_query("INSERT INTO `books` (`title`, `isbn`, `author_id`), VALUES('{$book->title}', '{$book->isbn}', '{$author_id}') ");
    }
}
*/

//echo $ejeconsulta;




//var_dump($obj);

//file_put_contents("lastonline.txt",print_r($rate));

?>

