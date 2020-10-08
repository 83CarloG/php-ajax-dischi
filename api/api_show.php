<?php
include __DIR__.'/../config/db/db.php';
//
header('Content-Type: application/json');
//
// echo json_encode($database);

//Prendo la ns ricerca 'query' GET variable.
$query = trim($_GET['query']);

// Preparo un array di risultati
$results = [];

//Loop tra gli oggetti della ricerca
foreach($database as $album){
	if(stristr($album['author'], $query)){
	       $results[] = $album;
	   }
}
//Display the results in JSON format so that
//we can parse it with JavaScript.
echo json_encode($results);
?>
