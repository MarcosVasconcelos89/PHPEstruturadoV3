<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include_once "fontes/connect.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];

$sql = "INSERT INTO pessoa VALUES(NULL,
		'".$nome."','".$email."',".$idade.")";
		
if(mysql_query($sql,$con)){
	$msg = base64_encode("Gravado com sucesso");
}else{
	$msg = base64_encode("Erro ao gravar");
}
//Redirecioonamento
header("location: config.php?msg=".$msg);
?>