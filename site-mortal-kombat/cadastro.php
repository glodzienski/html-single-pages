<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MK Klans | Cadastre-se</title>
<style type="text/css">
*{
	margin:0px;
	padding:0px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		
}
#geral {
	position:absolute;
	width:100%;
	z-index:1;
	background-color:white;
	height:1100px;
	background-image: url(Images/back2.png);
	background-attachment:fixed;
}
#logo {
	position:absolute;
	width:100%;
	z-index:1;
	background-color:blue;
	height:254px;
	background-image: url(Images/bannerlogo.png);
}
#menu {
	position:absolute;
	width:100%;
	z-index:1;
	background-color:;
	height:50px;
	top:270px;
}
#anuncio {
	position:absolute;
	width:728px;
	z-index:1;
	background-color:green;
	top:50px;
	height:90px;
	left:150px;
}
#conteudo1 {
	position:absolute;
	width:60%;
	height:500px;
	z-index:1;
	background-color:#FF4500;
	left:20%;
	top:505px;
	border-radius: 10px;	
}

#rodape {
	position:absolute;
	width:100%;
	height:50px;
	z-index:1;
	background-color:;
	background-image: url(Images/rodape.png);
	top:1100px;
}
#alinhamento {
	width:90%;
	margin-left:5%;
	font-size:16px;
	text-align:justify;
	margin-top:15px;
}

a:link,a:active,a:visited {
	text-decoration: none;
	color: black;
	
}

a:hover {
	text-decoration: underline;
	color: rgb(51,153,204);
}
.cadastro {
	/* Table */
	width:100%;
	text-align:right;
	    
}
.td {
	text-align:left;
	width:70%
}
input[type=text],[type=password] { 	
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	box-shadow: 1px 1px 2px  #000000  ;	
	-moz-box-shadow: 1px 1px 2px  #000000;
	-webkit-box-shadow: 1px 1px 2px  #000000;
	background:  #000000; 
	border:2px solid  #FC0;
	width:200px;
	height: 25px;
	color:#FF0000;

}
input:hover[type=text], :hover[type=password]{ 
         background: #FC0; border:2px solid  rgb(0,0,0);
		 color:#FF0000;
}


textarea {
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	box-shadow: 1px 1px 2px  #000000  ;	
	-moz-box-shadow: 1px 1px 2px  #000000;
	-webkit-box-shadow: 1px 1px 2px  #000000;
	background:  #000000; 
	border:2px solid  #FC0;
	width:350px;
	height:150px;
	color:#FF0000;
}
textarea:hover{ 
         background: #FC0; border:2px solid  rgb(0,0,0);
		 color:#FF0000;
}
select {
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	box-shadow: 1px 1px 2px  #000000  ;	
	-moz-box-shadow: 1px 1px 2px  #000000;
	-webkit-box-shadow: 1px 1px 2px  #000000;
	background:  #000000; 
	border:2px solid  #FC0;
	width:100px;
	height:25px;
	color:#FF0000;
}
input[type=submit]{
        
}
</style>
<script src="CSS/SpryMenuBar.js" type="text/javascript"></script>
<link href="CSS/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="geral">
<div id="logo"></div>
<div id="menu">
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li  class="MenuBarHorizontal1"><a href="index.html">Home</a>      </li>
    <li><a href="#" class="MenuBarItemSubmenu">Jogos</a>
      <ul>
        <li class="MenuBarHorizontaldownup"><a href="MK.html">MK</a></li>
        <li class="MenuBarHorizontaldownup"><a href="MKII.html">MK II</a></li>
        <li class="MenuBarHorizontaldownup"><a href="MKIII.html">MK III</a></li>
        <li class="MenuBarHorizontaldownup"><a href="MK_DA.html">MK D.A</a></li>
        <li class="MenuBarHorizontaldown"><a href="MKIX.html">MK 9</a></li>
      </ul>
    </li>
    <li><a href="Galeria_Fotos.html">Backgrounds</a>      </li>
    <li><a href="Personagens.html">Personagens</a></li>
    <li class="MenuBarHorizontal2"><a href="cadastro.php">Cadastre-se</a></li>
  </ul>
  <div id="anuncio">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2906424865708190";
/* cabeçalho */
google_ad_slot = "4928564443";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</div>
</div>

<div id="conteudo1">
<div id="alinhamento">

<center><h1>Cadastre-se</h1></center>
<center><h3>e receba mais informações do nosso site</h3></center>
<form name="cadastro" method="post" action="Cadastrado.php">
<table class="cadastro">
	<tr>
    	<td>
        Nome:
        </td>
        <td class="td"><input type="text" name="nome" size="30" />
        </td>
	</tr>
    <tr>
    	<td>
        E-mail:
        </td>
        <td class="td"><input type="text" name="email" size="30" />
        </td>
	</tr>
     <tr>
    	<td>
        Senha:
        </td>
        <td class="td"><input type="password" name="senha" size="30" />
        </td>
	</tr>
     <tr>
    	<td>
        Apelido:
        </td>
        <td class="td"><input type="text" name="caracter" size="30" />
        </td>
	</tr>
	<tr>
    	<td>Pensamento Fighter:
       
        </td>
        <td class="td"><textarea cols="40" rows="5"></textarea>
        </td>
	</tr>
    <tr>
    	<td>Sexo:
       
        </td>
        <td class="td"><input type="radio" name="sexo" value="f" />   Feminino<br />
                       <input type="radio" name="sexo" value="m" />   Masculino
        </td>
	</tr>
    <tr>
    	<td>Data de nascimento:
       
        </td>
        <td class="td">
        <select name="dia">
          <option value="-1">Dia:</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
          </select>
          <select name="mes">
          <option value="-1">Mês:</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="3">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option>
          </select>
          <select name="ano">
          <option value="-1">Ano:</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
          </select>
        </td>
	</tr>
     <tr>
    	<td>&nbsp;
       
        </td>
        <td class="td"><input type="submit" name="enviar" value="Cadastrar" />
        </td>
	</tr>
</table>
</form>
</div>
</div>


<div id="rodape"></div>



</div>
<html xmlns="http://www.w3.org/1999/xhtml">

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"CSS/SpryMenuBarDownHover.gif", imgRight:"CSS/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
