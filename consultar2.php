<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
header("Cache-Control: no-cache");
header("Expires: Fri, 30 Jul 2010 00:00:00 GMT");
if(!empty($_GET["nome"])){
$nome = $_GET["nome"]."%";
include_once("fontes/connect.php");

$sql = "SELECT * FROM pessoa WHERE nome LIKE '".$nome."'";

$rs = mysql_query($sql,$con);
if(mysql_num_rows($rs) > 0){
?>
	<table width="100%">
    	<tr>
        	<th>Nome</th>
            <th>Email</th>
        </tr>
<?php
	while($row = mysql_fetch_array($rs)){
?>
		<tr>
        	<td><?php echo $row["nome"]; ?></td>
        	<td><?php echo $row["email"]; ?></td>
        </tr>
<?php
	}
?>
    </table>
<?php
}else{
	echo "Nenhum cliente encontrado";
}
}
?>