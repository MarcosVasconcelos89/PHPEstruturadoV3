<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery.js"></script>
<script src="js/jquery.validate.js"></script>
<script>
$(document).ready(function(){
	$("#formContato").validate();
});
</script>
<style>
input.error{
	background-color:#FF0000;
}
label.error{
	color:#000000;
	font-family:Verdana;
}
</style>
<h2>Formulário de Cadastro de Cliente</h2>
<form action="gravar.php" method="post" id="formContato">
Nome...: <input type="text" name="nome" class="required" minlength="3" />
<br /><br />
E-mail...: <input type="text" name="email" class="required email" />
<br /><br />
Idade...: <input type="text" name="idade" class="required number" max="120" />
<br /><br />
<input type="submit" />
</form>
<br />
<?php 
//TERNARIO
echo isset($_GET["msg"])?base64_decode($_GET["msg"]):""; 
//CONDIÇÃO ? VALOR VERDADEIRO : VALOR FALSO
//CONDIÇÃO => isset($_GET["msg"])
//VALOR VERDADEIRO => base64_decode($_GET["msg"])
//VALOR FALSO => "" 
//isset($_GET["msg"]) => Verifica se a variavel MSG EXISTE (na URL)
//base64_decode() -> Utilizado para DESCRIPTOGRAFAR valores
?>
<br />
<a href="consultar.php">Consultar</a>