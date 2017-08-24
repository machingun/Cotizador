<html>    

<head>    
<title>Carga de Presupuesto en La Base de Datos</title>    
</head>    

<body>    
<?php    

// Recibimos por POST los datos procedentes del formulario    

$nombre = $_POST["nombre"];    
$e_mail = $_POST["e_mail"]; 
$telefono = $_POST["telefono"]; 
$vendedor = $_POST["vendedor"];
$producto = $_POST["producto"]; 
$p_secciones = $_POST["p_secciones"];
$p_idiomas = $_POST["p_idiomas"];
$p_tiempo = $_POST["p_tiempo"];
$adicionales = $_POST["adicionales"];
$a_secciones_1 = $_POST["a_secciones_1"];
$a_secciones_2 = $_POST["a_secciones_2"];
$a_categoria_con_1 = $_POST["a_categoria_con_1"];
$a_categoria_con_2 = $_POST["a_categoria_con_2"];
$a_categoria_sin_1 = $_POST["a_categoria_sin_1"];
$a_categoria_sin_2 = $_POST["a_categoria_sin_2"];
$a_dominio = $_POST["a_dominio"];
$c_dominio = $_POST["c_dominio"];
$c_basedatos = $_POST["c_basededatos"];
$c_news = $_POST["c_news"];
$c_idioma = $_POST["c_idioma"];
$c_adwords = $_POST["c_adwords"];
$c_facebook = $_POST["c_facebook"];
$c_instagram = $_POST["c_instagram"];
$c_youtube = $_POST["c_youtube"];
$c_chat = $_POST["c_chat"];
$c_form_simple_1 = $_POST["c_form_simple_1"];
$c_form_simple_2 = $_POST["c_form_simple_2"];
$c_form_avanzado_1 = $_POST["c_form_avanzado_1"];
$c_form_avanzado_2 = $_POST["c_form_avanzado_2"];
$c_reg_usuario = $_POST["c_reg_usuario"];
$c_embedfacebook = $_POST["c_embedfacebook"];
$c_radio = $_POST["c_radio"];
$c_noticias = $_POST["c_noticias"];
  
$fecha = date("d-m-Y");    

// Abrimos la conexion a la base de datos    
include("conexion.php");    

$_GRABAR_SQL = "INSERT INTO CargaDatos (nombre,e_mail,telefono,vendedor,producto,p_secciones,p_idiomas,p_tiempo,adicionales,a_secciones_1,a_secciones_2,a_categoria_con_1,a_categoria_con_2,a_categoria_sin_1,a_categoria_sin_2,a_dominio,c_dominio,c_basedatos,c_news,c_idioma,c_adwords,c_facebook,c_instagram,c_youtube,c_chat,c_form_simple_1,c_form_simple_2,c_form_avanzado_1,c_form_avanzado_2,c_reg_usuario,c_embedfacebook,c_radio,c_noticias,fecha) VALUES ('$nombre','$e_mail','$telefono','$vendedor','$producto','$p_secciones','$p_idiomas','$p_tiempo','$adicionales','$a_secciones_1','$a_secciones_2','$a_categoria_con_1','$a_categoria_con_2','$a_categoria_sin_1','$a_categoria_sin_2','$a_dominio','$c_dominio','$c_basedatos','$c_news','$c_idioma','$c_adwords','$c_facebook','$c_instagram','$c_youtube','$c_chat','$c_form_simple_1','$c_form_simple_2','$c_form_avanzado_1','$c_form_avanzado_2','$c_reg_usuario','$c_embedfacebook','$c_radio','$c_noticias','$fecha')";    
mysql_query($_GRABAR_SQL);   

// Cerramos la conexion a la base de datos    
include("desconectado.php");    

// Confirmamos que el registro ha sido insertado con exito    

echo "    
<p>Los datos han sido guardados con exito.</p>    

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>    
";    
?>    
</body>    

</html>
