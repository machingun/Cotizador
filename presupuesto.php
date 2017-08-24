<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Presupuesto</title>
  <link rel="stylesheet" href="estilo.css" type="text/css" />
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="select1.js"></script>
<script src="sumar.js"></script>

<body><br>
<form method="POST" action="datos.php"> 
<div id="dina4">
<img src="header-presupuesto.jpg" style="margin-left: -60px;margin-top: -30px;"><br><br>
<table width="100%" cellspacing="0">
	<tr>
		<td width="50%" id="bordesiztop"><b>Sr. / es:</b> <input type="text" name="nombre"> </td>
		<td width="50%" id="bordesdertop"><b>Asesor:</b> 
				<select name="vendedor">
					<option value="Vendedor 1"> Vendedor 1</option>
					<option value="Vendedor 2"> Vendedor 2</option>
				</select> 
		</td>
	</tr>
	<tr>
	<td width="50%" id="bordesizbottom">
	<b>E-mail:</b> <input type="text" name="e_mail">
	</td>
	<td width="50%" id="bordesderbottom">
	<b>Telefono:</b> <input type="text" name="telefono">
	</td>
	</tr>
</table>

<br>

<table width="100%"  cellspacing="0">
<tr>
<td width="50%">
<span style="font-weight: 700;color: #00a1e1;font-size: 14px;">Producto</span>
</td>
<td>
    

<?php 
$connect = @mysql_connect('localhost','root','pass');
mysql_select_db('db');

$dat="SELECT * FROM productos";
$sql=mysql_query($dat);
 ?>

<select id='opciones' onchange='cambioOpciones();' class="botonselect" name="producto">
 <?php

 while($lista=mysql_fetch_array($sql))
   echo "<option  value='".$lista["ID"]."'>".$lista["producto"]."</option> "; 
  
 
?>

</select>    
    

</td>
</tr>
</table>

<table width="100%"  cellspacing="0">
<tr>
<td width="50%" id="bordesiztop">
<b>Total de secciones contratadas en la p&aacute;gina web:</b>
</td>
<td width="50%" id="bordesdertop"> 
<input class="inputcentrado" type='text' id='contratado-secciones' value="<?php echo $lista['secciones']; ?>" name="p_secciones" disabled/>

<?php  while($lista2=mysqli_fetch_array($sql)) echo $lista2['secciones']; ?>


</td>
</tr>

<tr>
<td width="50%" id="bordesizbottom">
<b>Idiomas contratrados:</b>
</td>
<td width="50%" id="bordesderbottom">
<input class="inputcentrado" type='text' id='contratado-idioma' value="<?php echo $lista['idiomas']; ?>" name="p_idiomas" disabled/>
</td>
</tr>

<tr>
<td width="50%" id="bordesizbottom">
<b>Tiempo de Realizaci&oacute;n:</b>
</td>
<td width="50%" id="bordesderbottom">
<input class="inputcentrado" type='text' id='contratado-tiempo' value="<?php echo $lista['tiempo']; ?>" name="p_tiempo" disabled/>
</td>
</tr>
</table>
<br>


<table width="100%"  cellspacing="0">
<tr>
<td>
<span style="font-weight: 700;color: #00a1e1;font-size: 14px;">Adicionales</span>
</td>
<td>
<center><b style="font-size: 12px;">Cantidad<b></center>
</td>
<td>
<center><b style="font-size: 12px;">Abono<b></center>
</td>
</tr>
<tr>

<!--- Secciones Contratadas adicional -->

<td width="90%" id="bordesiztop">
<b>Cantidad de secciones  con/sin autogestionables</b>
</td>
<td width="5%" id="bordesdertop"> 
  <select class="monto" onkeyup="sumar();" name="a_secciones_1">

        <option value='0' >0</option>
        <option value='150'>1</option>
        <option value='300'>2</option>
        <option value='450'>3</option>
        <option value='600'>4</option>
		<option value='750'>5</option>
		<option value='900'>6</option>
		<option value='1050'>7</option>
		<option value='1200'>8</option>
		<option value='1350'>9</option>
		<option value='1500'>10</option>
		<option value='1650'>11</option>
		<option value='180'>12</option>
		<option value='1950'>13</option>
		<option value='2100'>14</option>
		<option value='2250'>15</option>

    </select>
	
	
</td>
<td width="5%" id="bordesdertop">
  <select class="moto2" onkeyup="sumar2();" name="a_secciones_2">

        <option value='0' >0</option>
        <option value='20'>20</option>
        <option value='40'>40</option>
        <option value='60'>60</option>
        <option value='80'>80</option>
		<option value='100'>100</option>
		<option value='120'>120</option>
		<option value='140'>140</option>
		<option value='160'>160</option>
		<option value='180'>180</option>
		<option value='200'>200</option>
		<option value='220'>220</option>
		<option value='240'>240</option>
		<option value='260'>260</option>
		<option value='280'>280</option>
		<option value='300'>300</option>

    </select>
</td>
</tr>

<tr>
<td id="bordesizbottom">
<b>Cantidad de Categor&iacute;as <span style="color: red;">CON INFORMACI&Oacute;N</span></b>
</td>
<td id="bordesderbottom">
  <select class="monto" onkeyup="sumar();" name="a_categoria_con_1" >

        <option value='0'>0</option>
        <option value='100'>1</option>
        <option value='200'>2</option>
        <option value='300'>3</option>
        <option value='400'>4</option>
		<option value='500'>5</option>
		<option value='600'>6</option>
		<option value='700'>7</option>
		<option value='800'>8</option>
		<option value='900'>9</option>
		<option value='1000'>10</option>
		<option value='1100'>11</option>
		<option value='1200'>12</option>
		<option value='1300'>13</option>
		<option value='1400'>14</option>
		<option value='1500'>15</option>

    </select>
</td>
<td id="bordesderbottom">
  <select class="moto2" onkeyup="sumar2();" name="a_categoria_con_2">

        <option value='0' >0</option>
        <option value='20'>20</option>
        <option value='40'>40</option>
        <option value='60'>60</option>
        <option value='80'>80</option>
		<option value='100'>100</option>
		<option value='120'>120</option>
		<option value='140'>140</option>
		<option value='160'>160</option>
		<option value='180'>180</option>
		<option value='200'>200</option>
		<option value='220'>220</option>
		<option value='240'>240</option>
		<option value='260'>260</option>
		<option value='280'>280</option>
		<option value='300'>300</option>

    </select>
</td>
</tr>

<tr>
<td id="bordesizbottom">
<b>Cantidad de Categor&iacute;as <span style="color: red;">SIN INFORMACI&Oacute;N</span> (Si o Si Auto Gestionable)</b>
</td>
<td id="bordesderbottom">
  <select class="monto" onkeyup="sumar();" name="a_categoria_sin_1">

        <option value='0'>0</option>
        <option value='50'>1</option>
        <option value='100'>2</option>
        <option value='150'>3</option>
        <option value='200'>4</option>
		<option value='250'>5</option>
		<option value='300'>6</option>
		<option value='350'>7</option>
		<option value='400'>8</option>
		<option value='450'>9</option>
		<option value='500'>10</option>
		<option value='550'>11</option>
		<option value='600'>12</option>
		<option value='650'>13</option>
		<option value='700'>14</option>
		<option value='750'>15</option>

    </select>
</td>
<td id="bordesderbottom">
  <select class="moto2" onkeyup="sumar2();" name="a_categoria_sin_2">

        <option value='0'>0</option>
        <option value='10'>10</option>
        <option value='20'>20</option>
        <option value='30'>30</option>
        <option value='40'>40</option>
		<option value='50'>50</option>
		<option value='60'>60</option>
		<option value='70'>70</option>
		<option value='80'>80</option>
		<option value='90'>90</option>
		<option value='100'>100</option>
		<option value='110'>110</option>
		<option value='120'>120</option>
		<option value='130'>130</option>
		<option value='140'>140</option>
		<option value='150'>150</option>

    </select>
</td>

</tr>



<tr>
<td id="bordesizbottom">
<b>Compra de Dominio .COM.AR</b>
</td>
<td id="bordesderbottom" colspan="2">
  <select class="montno" name="a_dominio">

        <option value='NO' >NO</option>
		<option value='SI' >SI</option>

    </select>
</td>
</tr>
</table>

<br>

<table width="100%"  cellspacing="0">
<tr>
<td width="50%">
<span style="font-weight: 700;color: #00a1e1;font-size: 14px;">Servicios Complementarios</span>
</td>
<td>
</td>
</tr>
</table>


<table width="100%"  cellspacing="0">

<tr>
<td width="80%" id="bordesiztop">
<b>Dominios adicionales</b> (Proteja y registre su marca a nivel mundial con un Dominio .COM/.ORG/ETC)
</td>
<td width="20%" id="bordesdertop"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" name="c_dominio">

        <option value='0'>No Contratado</option>
        <option value='320' name="1">1</option>
        <option value='640'>2</option>
        <option value='960'>3</option>
        <option value='1280'>4</option>


    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Base de datos</b> (Permite guardar todas las consultas que recibe de su p&aacute;gina web)
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" name="c_basedatos">

        <option value='0'>No Contratado</option>
        <option value='100'>SI</option>
    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Newsletter</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Contratado</option>
    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Idioma Adicional</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Contratado</option>
    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Google Adwords</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Contratado</option>
    </select>
</td>
</tr>

<td width="80%" id="bordesizbottom">
<b>Manejo de Red Social Facebook</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="moto2" onkeyup="sumar2();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='7000'>$7000</option>
    </select>
</td>
</tr>

<td width="80%" id="bordesizbottom">
<b>Manejo de Red Social Instagram</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="moto2" onkeyup="sumar2();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='7000'>$7000</option>
    </select>
</td>
</tr>

<td width="80%" id="bordesizbottom">
<b>Manejo de Red Social Youtube</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="moto2" onkeyup="sumar2();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='$7000'><span style="color: #FF0000;">$7000</span></option>
    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Chat On-Line</b> (Interacci&oacute;n con sus clientes y responder inquietudes)
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='200'>1</option>
		<option value='400'>2</option>
		<option value='600'>3</option>
    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Formulario de Contacto Adicional</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="width: 96px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Simple</option>
    </select>
	
	  <select class="monto" onkeyup="sumar();" style="width: 75px;" >

        <option value='0'>0</option>
        <option value='0'>1</option>
    </select>

	  <select class="monto" onkeyup="sumar();" style="width: 96px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Avanzado</option>
    </select>
	
		  <select class="monto" onkeyup="sumar();" style="width: 75px;" >

        <option value='0'>0</option>
        <option value='0'>1</option>
    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Registro de Usuario</b> (Oculta informaci&oacute;n en su Web y s&oacute;lo podr&aacute; ser vista por usuarios habilitados)
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Contratado</option>
    </select>
</td>
</tr>


<tr>
<td width="80%" id="bordesizbottom">
<b>Tu Pagina dentro de Facebook</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Contratado</option>
    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Radio ON-LINE</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Contratado</option>
    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Servicio ALL INCLUSIVE</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Contratado</option>
    </select>
</td>
</tr>

<tr>
<td width="80%" id="bordesizbottom">
<b>Seccion Noticias</b> 
</td>
<td width="20%" id="bordesderbottom"> 
  <select class="monto" onkeyup="sumar();" style="   width: 175px;" >

        <option value='0'>No Contratado</option>
        <option value='0'>Contratado</option>
    </select>
</td>
</tr>








</table>

<br>
<center>
<table width="100%">
<tr>
<td  width="45%">
<table width="100%">
<tr>
<td width="100%" style="border: 2px solid #00a1e1;padding: 8px;">
<b style="color: #00a1e1; font-size: 12px;"> Costo total de la P&aacute;gina Web</b> <span style="width: 40px;">&nbsp;</span>
<span class="inputcentrado2">$</span><span id="spTotal" class="inputcentrado2"></span><span class="inputcentrado2">+ IVA</span>
<input type="hidden" id='contratado-costototal' value="Sin especificar" class="monto" onkeyup="sumar();"  />
</td>
</tr>
</table>
</td>


<td  width="45%">
<table width="100%">
<tr>
<td width="100%" style="border: 2px solid #00a1e1;padding: 8px;">
<b style="color: #00a1e1; font-size: 12px;">Abono de la P&aacute;gina Web</b> <span style="width: 40px;">&nbsp;</span>
<span class="inputcentrado2">$</span><span id="spTotal2" class="inputcentrado2"></span><span class="inputcentrado2">+ IVA</span>
<input type="hidden" id='contratado-abonototal' value="Sin especificar" class="moto2" onkeyup="sumar2();"  />
</td>
</tr>
</table>
</td>
</tr>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<span>Ingrese 0</span>
<input type="text" id="txt_campo_1" class="monto" onkeyup="sumar();"  style="border: 1px solid black;"/>
<input type="text" id="txt_campo_1" class="moto2" onkeyup="sumar2();"  style="border: 1px solid black;"/>
<br/>
 <p> <!-- <input type="submit" value="Guardar datos" name="B1"> -->
</form>
</center>




</div>

</body> 
</html> 
