<?php



setlocale(LC_TIME,"es_ES");    
$hora=strftime("Hoy es %A y son las %H:%M");

$json = file_get_contents('php://input');
$obj = json_decode($json,true);
//$rate = $obj->{'rate'};

if (!empty($obj)) {

$hola= $obj[0] . $obj[1] . $obj[2] . $obj[3] . $obj[4];


file_put_contents("output.txt",$hola .  " " . $hora);



echo $hola;


}
//var_dump($obj);

//file_put_contents("lastonline.txt",print_r($rate));

?>

