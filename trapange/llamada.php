<?php
$salida=shell_exec("java -jar traprange.lastest.jar -in idx.pdf -out idx.html -el 0,1");
echo "<pre>".$salida."</pre>";
//header('Location: idx.html');
?>

<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org" th:replace="~{fragments/layout :: layout (~{::body},'index')}">

<body>