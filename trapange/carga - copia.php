<?php

/*$target_path = "cargadeusuario";

$target_path = $target_path . basename($_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 

	echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";

} else{
echo "Ha ocurrido un error, trate de nuevo!";
}*/


// Primero creamos un ID de conexión a nuestro servidor
$cid = ftp_connect("127.0.0.1");


// Luego creamos un login al mismo con nuestro usuario y contraseña
$resultado = ftp_login($cid, "usserp","1234");
// Comprobamos que se creo el Id de conexión y se pudo hacer el login
if ((!$cid) || (!$resultado)) {
	echo "Fallo en la conexión"; die;
} else {
	echo "Conectado.";
}

echo "DIRECTORIO ACTUAL DEL SERVIDOR" . " " . ftp_pwd($cid);

// Cambiamos a modo pasivo, esto es importante porque, de esta manera le decimos al 
//servidor que seremos nosotros quienes comenzaremos la transmisión de datos.
ftp_pasv ($cid, true) ;
echo "<br> Cambio a modo pasivo<br />";

// Nos cambiamos al directorio, donde queremos subir los archivos, si se van a subir a la raíz
// esta por demás decir que este paso no es necesario. En mi caso uso un directorio llamado boca
ftp_chdir($cid, "/");



echo "Cambiado al directorio necesario";   
// Tomamos el nombre del archivo a transmitir, pero en lugar de usar $_POST, usamos $_FILES que le indica a PHP
// Que estamos transmitiendo un archivo, esto es en realidad un matriz, el segundo argumento de la matriz, indica
// el nombre del archivo
$local = basename($_FILES['uploadedfile']['name']);

// Este es el nombre temporal del archivo mientras dura la transmisión
$remoto = $_FILES["uploadedfile"]["tmp_name"];
// El tamaño del archivo

$tama = $_FILES["uploadedfile"]["size"];

echo "<br />$local<br />";
echo "$remoto<br />";
echo "subiendo el archivo...<br />";

// Juntamos la ruta del servidor con el nombre real del archivo
$ruta = "C:/xampp1/htdocs/traprange/cargadeusuario/" . $local;
// Verificamos si no hemos excedido el tamaño del archivo
//echo ini_get('upload_max_filesize');

if ($tama<=ini_get('upload_max_filesize')){
	echo "Excede el tamaño del archivo...<br />";
} else {
	// Verificamos si ya se subio el archivo temporal
	if (is_uploaded_file($remoto)){
		// copiamos el archivo temporal, del directorio de temporales de nuestro servidor a la ruta que creamos
		copy($remoto, $ruta);		
	}
	// Sino se pudo subir el temporal
	else {
		echo "no se pudo subir el archivo " . $local;
	}
}
echo "Ruta: " . $ruta;
//cerramos la conexión FTP
ftp_close($cid);

