<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/dojo/dojo.js"></script>
<script src="js/dojo/utils.js"></script>
<h2>Consulta de Clientes</h2>
Nome...: <input type="text" 
onkeyup="ajax('consultar2.php?nome='+this.value,'resposta')" />
<hr />
<div id="resposta"></div>
<br />
<a href="index.php">Voltar</a>
