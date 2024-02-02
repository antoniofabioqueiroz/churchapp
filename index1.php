<?
include("includes/conecta.php");
$sql=mysql_query("select * from tb_noticia order by not_id desc limit 4");
?>
<?
$mes["01"] = "Janeiro";
$mes["02"] = "Fevereiro";
$mes["03"] = "Março";
$mes["04"] = "Abril";
$mes["05"] = "Maio";
$mes["06"] = "Junho";
$mes["07"] = "Julho";
$mes["08"] = "Agosto";
$mes["09"] = "Setembro";
$mes["10"] = "Outubro";
$mes["11"] = "Novembro";
$mes["12"] = "Dezembro";

$diasemana["0"] = "Domingo";
$diasemana["1"] = "Segunda-feira";
$diasemana["2"] = "Terça-feira";
$diasemana["3"] = "Quarta-feira";
$diasemana["4"] = "Quinta-feira";
$diasemana["5"] = "Sexta-feira";
$diasemana["6"] = "Sábado";

$dia = date('d'); //Pega o dia
$diasemanan = date('w'); //Pega o dia da semana
$mesn = date('m'); //Pega o mês
$ano = date('Y'); //Pega o ano
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>.:. PIB Vitória .:.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="smiletag-style.css" rel="stylesheet" type="text/css" />


<!-- Para instalar o SmilieTag em sua pagina, apenas copie as duas partes a seguir -->

<!-- 1.A primeira parte comça aqui e deve ser colocada entre os head da sua pagina -->

<script type="text/javascript" language="JavaScript">
<!--
	var smiletagURL = "http://guia.xq.com.br/smiletag/";
//-->
</script>
<script type="text/javascript" language="JavaScript" src="smiletag-script.js"></script>
<!-- 1. FIM DA PRIMEIRA PARTE   -->

<SCRIPT language=JavaScript>
		<!-- Begin
			var clocktext, timeday;
			var pagetitle = document.title;
			function scroll() {
			today = new Date();
			sec = today.getSeconds();
			hr = today.getHours();
			min = today.getMinutes();
			// 12 Hour clock fix by Erickson Dias
			if (hr < 24) { timeday = " AM"; }
			else { timeday = " PM"; }
			if (hr > 24) hr = hr - 24;
			if (hr <= 9) hr = "0" + hr;
			if (min <= 9) min = "0" + min;
			if (sec <= 9) sec = "0" + sec;
			var clocktext = " - " + hr + ":" + min + ":" + sec + timeday;
			clocktimer = setTimeout("scroll()", 1000);
			document.title = pagetitle + clocktext;
			}
			if (document.all) scroll();
		// End -->
	</SCRIPT>
	
<script language ="javascript"> 

<!-- começo da janela de som   -->
function abrir_som() 
{ 
window.open ("musicas/som.php", "Janela", "status=no, width=360, height=350") 
} 
<!-- fim da janela de som   -->

<!-- começo da janela de recado   -->
function abrir_recado() 
{ 
window.open ("recados/cad_recado.php", "Janela", "status=no, width=410, height=410") 
} 
<!-- fim da janela de recado   -->

<!-- começo da janela de Histórico   -->
function abrir_historico() 
{ 
window.open ("historico.php") 
} 
<!-- fim da janela de histórico   -->

<!-- começo da janela de aviso   -->
function abrir_aviso() 
{ 
window.open ("aviso.php") 
} 
<!-- fim da janela de aviso   -->

<!-- começo da janela de ministerio   -->
function abrir_ministerio() 
{ 
window.open ("ministerio.php", "Janela", "status=no, width=820, height=560") 
} 
<!-- fim da janela de ministerio   -->

<!-- começo da janela de diretoria   -->
function abrir_diretoria() 
{ 
window.open ("diretoria/diretoria.php") 
} 
<!-- fim da janela de diretoria   -->

<!-- começo da janela de calendário   -->
function abrir_calendario() 
{ 
window.open ("calendario/calendario.php") 
} 
<!-- fim da janela de calendário   -->

<!-- começo da janela de pastoral   -->
function abrir_pastoral() 
{ 
window.open ("mensagens/arquivo_mensagem.php") 
} 
<!-- fim da janela de pastoral   -->

<!-- começo da janela de bíblia online   -->
function abrir_bibliaonline() 
{ 
window.open ("http://www.bibliaonline.com.br") 
} 
<!-- fim da janela de bíblia online   -->


<!-- começo da janela de contato   -->
function abrir_contato() 
{ 
window.open ("contato.php", "Janela", "status=no, width=450, height=400") 
} 
<!-- fim da janela de contato  -->

<!-- começo da janela de educandario   -->
function abrir_educandario() 
{ 
window.open ("educandario/educandario.php", "Janela", "status=no, width=820, height=670") 
} 
<!-- fim da janela de educandario  -->

<!-- começo da janela de congregações   -->
function abrir_congregacoes() 
{ 
window.open ("congregacoes/congregacoes.php", "Janela", "status=no, width=820, height=670") 
} 
<!-- fim da janela de congregações  -->
</script>	
	
<style>
a{
font-family: "verdana";
font-size: 14px;
color: #FFFFFF;
text-decoration: none;
}
a:hover{
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 14px;
color: #FFCC66;
text-decoration: underline;
}
div{
font-family: Geneva, Arial, Helvetica, sans-serif;
font-size: 10px;
color: #FFFFFF;
text-decoration: none;
}
h1{
font-family: Geneva, Arial, Helvetica, sans-serif;
font-size: 16px;
color: #FFFFFF;
text-decoration: none;
}
h1:hover{
font-family: Geneva, Arial, Helvetica, sans-serif;
font-size: 16px;
color: #FFFFFF;
text-decoration: underline;
}
.style2 {
	color: #000000;
	font-weight: bold;
}
</style>

</head>

<script language="JavaScript">
	var ostat = false;
function scrollstop() {
		news.scrollAmount = 0;
		ostat = true;
	}
	function scrollplay() {
		news.scrollAmount = 2;
		ostat = false;
	}
	function scrolldir() {
		mid = screen.width / 2;
		mouse = event.x;
		if(mouse > mid) {
		if(ostat == false) {
		speed = (mouse - mid) / 25;
		news.scrollAmount = speed;
	}
	news.direction = "right";
	}
	else {
	if(ostat == false) {
		speed = (mid - mouse) / 25;
		news.scrollAmount = speed;
	}
	news.direction = "left";
  }
}
</script>
<STYLE>
BODY {
	SCROLLBAR-FACE-COLOR: #0000FF; SCROLLBAR-ARROW-COLOR: #FFFFFF; SCROLLBAR-BASE-COLOR: #FFFFFF; 
}
</STYLE>

<!-- onLoad="javascript:window.open('Popup.php','popup','width=360,height=276')" -->

<body bgcolor="#F2F2F2">
<form name="form1" method="post" action=""><div align="center">
<table width="801" height="1121" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="1">&nbsp;</td>
      <td width="800" height="150" background="" valign="top"> <table width="59%" border="0">
          <tr>
            <td height="17"><div class="style2">  
                <?=$diasemana["$diasemanan"]?>
                , 
                <?=$dia?>
                de 
                <?=$mes["$mesn"]?>
                de 
                <?=$ano?>
                </div>            </td>
          </tr>
        </table>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="802" height="145">
          <param name="movie" value="figuras/banner.swf">
          <param name="quality" value="high">
          <embed src="figuras/banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="802" height="145"></embed>
      </object></td>
  </tr>
  <tr> 
    <td width="1">&nbsp;</td>
    <td height="914" valign="top" bgcolor="#FFFFFF"> <div align="center"> <img src="figuras/botao_historico.jpg" width="125" height="35" style="cursor: pointer" onClick="abrir_historico()" /> 
          <img src="figuras/botao_ministerio.jpg" width="125" height="35" style="cursor: pointer" onClick="abrir_ministerio()" /> 
          <img src="figuras/botao_diretoria.jpg" width="125" height="35" style="cursor: pointer" onClick="abrir_diretoria()" /> 
          <img src="figuras/botao_mensagens.jpg" width="125" height="35" style="cursor: pointer" onClick="abrir_pastoral()" /> 
          <img src="figuras/botao_calendario.jpg" width="125" height="35" style="cursor: pointer" onClick="abrir_calendario()" /> 
        </div>
		<table width="791" border="0" cellspacing="0" cellpadding="0">
        <tr> 
            <td width="161" height="24" align="left">&nbsp; </td>
            <td width="630" valign="top"> <img src="figuras/botao_educandario.jpg" width="125" height="35" style="cursor: pointer" onClick="abrir_educandario()" />
			<img src="figuras/botao_congregacoes.jpg" width="125" height="35" style="cursor: pointer" onClick="abrir_congregacoes()" /> 
              <img src="figuras/botao_bibliaonline.jpg" width="125" height="35" style="cursor: pointer" onClick="abrir_bibliaonline()" /> 
              <img src="figuras/botao_contato.jpg" width="125" height="35" style="cursor: pointer" onClick="abrir_contato()" /></td>
        </tr>
      </table>
      
    
        <table width="799" height="844" border="0" background="figuras/corpo.jpg">
          <tr> 
            <td width="793" height="840" valign="top"><table width="793" height="838" border="0">
                <tr> 
                  <td width="30%" height="834" valign="top"><table width="99%" height="832" border="0">
                      <tr> 
                        <td height="362" align="center"><table width="198" height="290" border="0">
                            <tr> 
                              <td width="192" height="290" align="right" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><iframe src="membros/aniversariante.php" width="190" height="290" marginheight="0" frameborder="0" scrolling="no"></iframe></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr> 
                        <td height="61">&nbsp;</td>
                      </tr>
                      <tr> 
                        <td height="329" valign="top" align="center"><table width="187" border="0">
                            <tr> 
                              <td><iframe src="recados/lista_recado.php" width="186" height="320" marginheight="0" frameborder="0" scrolling="auto"></iframe></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr> 
                        <td height="61"><table width="91%" border="0">
                            <tr valign="middle"> 
                              <td align="center"><a href="" onClick="abrir_recado()" style="cursor: pointer"> 
                                <strong>ENVIAR RECADO</strong> </a></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                  <td width="70%" align="right"><table width="100%" height="831" border="0">
                      <tr> 
                        <td height="341" valign="top" align="right"><table width="98%" height="367" border="0">
                            <tr> 
                              <td width="57%" height="346" align="right" valign="top"> 
                                <table width="257" border="0">
                                  <tr> 
                                    <td width="251"><iframe src="noticias/visao.php" width="264" height="354" marginheight="0" frameborder="0" scrolling="no"></iframe></td>
                                  </tr>
                                </table>
                                
                              </td>
                              <td width="43%" align="right" valign="middle"><table width="240" border="0">
                                  <tr> 
                                    <td width="251" height="348"><iframe src="eventos/tela_evento.php" width="270" height="319" marginheight="0" frameborder="0" scrolling="no"></iframe></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr> 
                        <td height="456" valign="top" align="right"><table width="537" height="437" border="0">
                            <tr> 
                              <td width="531" height="191" align="right" valign="top"><table width="531" height="80" border="0" cellpadding="0" cellspacing="0">
                                  <tr> 
                                    <td width="531" align="right" valign="top"><table width="75%" border="0">
                                        <tr> 
                                          <td><iframe src="mensagens/mensagem.php" width="535" height="203" marginheight="0" frameborder="0" scrolling="no"></iframe></td>
                                        </tr>
                                      </table></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr> 
                              <td height="240" valign="middle" align="right"><table width="528" height="223" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="66">&nbsp;</td>
                                    <td width="223"><iframe src="fotos/tela_foto_destaque.php" width="267" height="226" marginheight="0" frameborder="0" scrolling="no"></iframe></td>
                                    <td width="239" valign="bottom" align="center">
                                      <table width="120" height="180" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td height="58" valign="top">
                                            <table width="100" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td><iframe src="fotos/tela_galeria.php" width="195" height="160" marginheight="0" frameborder="0" scrolling="auto"></iframe></td>
                                              </tr>
                                            </table>
                                            </td>
                                        </tr>
                                      </table>
                                      </td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                </tr>
              </table></td>
          </tr>
        </table></tr>
  <tr> 
    <td width="1">&nbsp;</td>
    <td height="19" bgcolor="#0000FF"><div>
          <div align="center">Copyright &copy; 2008 , Primeira Igreja Batista 
            em Vit&oacute;ria de Santo Ant&atilde;o - PE - Brasil.</div>
        </div></td>
  </tr>
</table>
<?
mysql_close($con);  //fechar o banco
?>
</form>
</body>
</html>

