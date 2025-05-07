<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Invitados</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    table { border-collapse: collapse; width: 100%; max-width: 600px; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background-color: #f4f4f4; }
  </style>
  <style href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css" />
  <script src="https://cdn.datatables.net/2.3.0/js/dataTables.min.js" />
  <script>
	let table = new DataTable('#lista_invitados');
  </script>
</head>
<body>
<?php 
$lista = [
	'1' => 'Engely Perez',
	'1' => 'Angel Cabrera',
	'1' => 'Bruno Cabrera',
	'1' => 'Engelbert Perez',
	'1' => 'Maria Perez',
	'3' => 'Engimar Perez',
	'1' => 'Genesis Perez',
	'1' => 'Jean Carlos Sumavila',
	'3' => 'Wendy Liendo',
	'3' => 'Javier Betancourt',
	'4' => 'Zuli Betancourt',
	'4' => 'Emily',
	'4' => 'Jorge Liendo.',
	'4' => 'Dominga',
	'5' => 'Heli García',
	'5' => 'Fabian García',
	'5' => 'Isabel',
	'5' => 'Samuel',
	'5' => 'Samuel Jr',
	'5' => 'MIranda',
	'5' => 'Maritza',
	'5' => 'Rodrigo Carvajal.',
	'4' => 'Gaby Betancourt',
	'4' => 'Diego',
	'4' => 'Cesar',
	'3' => 'Sybaris Corona',
	'6' => 'Nicolas D melios',
	'6' => 'Lilibeth Esposa NIco',
	'6' => 'Amelie D melios',
	'6' => 'Pedro Pico',
	'6' => 'Adriana Andrade',
	'6' => 'Leopoldo Soto',
	'6' => 'Albanys Esposa Leo',
	'6' => 'Martin Soto',
	'6' => 'Francelys Heredia',
	'6' => 'Heberth Caripa',
	'3' => 'Jesus Acevedo',
	'3' => 'Pareja Jesus',
	'3' => 'Albert Acevado.',
	'3' => 'Pareja Albert',
	'7' => 'Liliana Uribe',
	'7' => 'Pedro Orozco',
	'7' => 'Diego Orozco',
	'7' => 'Mailyn Lozada',
	'7' => 'Francisco Esposo May',
	'7' => 'Rosimart Gomez',
	'7' => 'Manuel Esposo Rosi',
	'7' => 'Orlando Pernia',
	'1' => 'Xiomara Gonzalez',
	'1' => 'Jorge Cabrera',
	'2' => 'Jorge Cabrera Jr',
	'2' => 'Paola Rivero',
	'2' => 'Manuel Rodriguez',
	'2' => 'Marian Delgado',
	'2' => 'Helena Rodríguez',
	'9' => 'Rafael Machado',
	'9' => 'Pareja Rafa',
	'9' => 'Sr. Carmen Machado',
	'9' => 'Felix Utrera',
	'9' => 'Gloryen',
	'9' => 'felix Jr',
	'9' => 'Giselle Utrera',
	'10' => 'Jennifer Brito',
	'10' => 'Pareja Jenny',
	'10' => 'Esther Marquez',
	'10' => 'Pedro Rodríguez',
	'10' => 'Karla Padilla',
	'10' => 'Miguel Quintero',
	'10' => 'Maximo Quintero',
	'9' => 'Guillermo Horno',
	'9' => 'Mariana Márquez',
	'9' => 'Federica Horno',
	'9' => 'Juliana Horno',
	'8' => 'Joel Pallotta',
	'8' => 'Pareja Joel',
	'1' => 'Jorge Simoes',
	'1' => 'Kamaly Acevedo',
	'8' => 'Aleska Salas',
	'8' => 'Jose Zalem',
	'2' => 'Arturo Navas',
	'2' => 'Jefferson Gamez',
	'2' => 'Roman Valenzuela',
	'2' => 'Blanca Gonzalez',
	'2' => 'Jesus David Valenzuela',
	'8' => 'Jairo Marín',
	'8' => 'Pareja Jairo',
	'8' => 'Dany Jojoto',
	'3' => 'José Luis Muñoz',
	'3' => 'Jose Jose',
	'3' => 'Angel Borges'
];
 ?>
  <h1>Lista de Invitados</h1>
  <table id='lista_invitados'>
	<?php foreach($lista as $mesa => $li){ ?>
		<tr>
		  <th><?= $li ?></th>
		  <th><?= $mesa ?></th>
		</tr>
	<?php } ?>
  </table>
</body>
</html>
