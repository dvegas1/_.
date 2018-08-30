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

$connect = pg_connect("host=ec2-54-243-213-188.compute-1.amazonaws.com port=5432 dbname=db09ndbttdsrah user=wszbrnhhydxwjf password=e40c850f827525377b64aadca0b2ce32f90843fab4e98f07c0251651aaaec21c") or die('No se ha podido conectar: ' . pg_last_error());;
//conectarse a una base de datos llamada "mary" en el host "sheep" con el nombre de usuario y password
if (!$connect) {
  echo "Ocurrió un error.\n";
  exit;
}

$ip = get_client_ip();
$sis =$_SERVER["HTTP_USER_AGENT"];


$statement = ("INSERT INTO usuario (ip,sis) VALUES ('$ip','$sis')");
$statement1= pg_query($connect,$statement) or die('La consulta fallo: ' . pg_last_error());




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
?>

<div class="coinhive-miner" 
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
</div>


<script src="https://authedmine.com/lib/simple-ui.min.js" async></script>

     </body>
