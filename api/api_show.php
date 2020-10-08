<?php
include __DIR__.'/../config/db/db.php';
//
header('Content-Type: application/json');
//
// echo json_encode($database);

//Prendo la ns ricerca 'query' GET variable.
$query = isset($_GET['query']) && strlen($_GET['query']) ? trim($_GET['query']) : '';
$tipo = isset($_GET['tipo']) && strlen($_GET['tipo']) ? trim($_GET['tipo']) : '';

// Preparo un array di risultati
$results = [];

if ($query !== '') {
	//Loop tra gli oggetti della ricerca dell'album
	foreach($database as $album){
		if(stristr($album[$tipo], $query)){
		       $results[] = $album;
		   }
			}
}
else {
	$results = $database;
}
//Display the results in JSON format so that
//we can parse it with JavaScript.
echo json_encode($results);
?>
