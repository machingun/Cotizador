var opciones = {

  "0": ["", "", "", "", "Sin especificar"],
  "1": ["4", "1", "3 dias", "1500", "600"],
  "2": ["4", "1", "5 dias", "3000", "700"],
  "3": ["4", "1", "10 dias", "4400", "600"],
  "4": ["4", "1", "15 dias", "6000", "800"],
  "5": ["4", "1", "15 dias", "6000", "800"],
  "6": ["4", "1", "15 dias", "4000", "800"],
  "7": ["4", "1", "15 dias", "4000", "800"]
}
function cambioOpciones()
{
  var combo = document.getElementById('opciones');
  var opcion = combo.value; 
  document.getElementById('contratado-secciones').value = opciones[opcion][0];
  document.getElementById('contratado-idioma').value = opciones[opcion][1];
  document.getElementById('contratado-tiempo').value = opciones[opcion][2];
  document.getElementById('contratado-costototal').value = opciones[opcion][3];
  document.getElementById('contratado-abonototal').value = opciones[opcion][4];
}