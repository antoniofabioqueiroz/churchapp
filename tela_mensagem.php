<?
$cod = $_GET["cod"];
include("includes/conecta.php");//Para conectar ao banco
$result=mysql_query("select * from tb_mensagem where men_id=$cod");//result recebe o select da tabela de mensagem que está apontando
$campos=mysql_fetch_array($result);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Mensagem de Reflexão</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<STYLE>
BODY {
	SCROLLBAR-FACE-COLOR: #0000FF; SCROLLBAR-ARROW-COLOR: #FFFFFF; SCROLLBAR-BASE-COLOR: #FFFFFF; 
}.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #0000FF;
	font-weight: bold;
}
</STYLE>
<body topmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0">
<table width="773" height="199" border="0" align="left" cellpadding="0" cellspacing="0">
  
  <tr> 
    <td width="773" height="199" valign="top" bgcolor="#FFFFFF"><div align="center"> </div>
      <table width="654" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr> 
          <td width="714" align="center">&nbsp;</td>
        </tr>
        <tr> 
          <td height="60" align="center"><strong><em><font color="#0000FF" size="2" face="Geneva, Arial, Helvetica, sans-serif"> 
            <?=strtoupper($campos["men_titulo"])?>
            </font> </em> </strong> <div align="center"></div></td>
        </tr>
        <tr> 
          <td height="56"><p align="justify"><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">
              <?=nl2br($campos["men_texto"])?>
              </font></strong></p></td>
        </tr>
      </table></td>
  </tr>
</table>
<?
mysql_close($con);
?>
</body>
</html>