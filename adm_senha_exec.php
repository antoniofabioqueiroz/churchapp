
<?
$ed_usuario = $_POST["ed_usuario"];
$ed_senha = $_POST["ed_senha"];
include("includes/conecta.php");
$resultado=mysql_query("Select * from tb_senha where senha_usuario='$ed_usuario' and senha_senha='$ed_senha'");
$campos=mysql_fetch_array($resultado);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Administrador</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body bgcolor="#CCCCCC" alink="#FF0000" link="#00FF00" vlink="#FFFF00">
<?
if (mysql_num_rows($resultado)==0) {
?>
<p align="center"><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Senha 
  ou Usuário inv&aacute;lida!</font></strong><br>
</p>
<p align="center"><a href="adm.php"><font color="#FF0000" size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>Voltar</strong></font></a></p> 
  <?
} else {
    if (($campos["senha_usuario"])==$ed_usuario){
	   if(($campos["senha_senha"])==$ed_senha){
?>
</p>
<form name="form1" method="post" action="admmenu.php">
  <table width="622" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td height="61"><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>Sr&ordm; 
          (a) <font color="#FF0000"><? echo $campos["senha_nome"] ?></font>, voc&ecirc; 
          &eacute; respons&aacute;vel pelo(a) altera&ccedil;&atilde;o nesta data 
          e hora. DEUS te aben&ccedil;oe!!!</strong></font></div></td>
    </tr>
    <tr>
      <td><div align="center"> 
          <input type="submit" name="Submit" value="OK">
        </div></td>
    </tr>
  </table>
</form>
<?
}
}
}
?>

</body>
</html>
<?
mysql_close($con);
?>
