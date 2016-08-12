<?php
# Ignore Unirest warning if any (eg. safe mode related)
#error_reporting(E_ERROR | E_PARSE);
include 'metacritic.php';
// header("Access-Control-Allow-Origin: *");
$metacritic_api = new MetacriticAPI();
// $metacritic_api->get_metacritic_page("The Elder Scrolls V: Skyrim");
$gamePar = $_GET["game"];
// example: https://YourIPOrDomain?game=abzu
//example: https://YourIPOrDomain/?game=far%20cry
$metacritic_api->get_metacritic_page($gamePar);
$json_reponse = $metacritic_api->get_metacritic_scores();
echo $json_reponse;
$json_reponse = $metacritic_api->get_metacritic_scores();

// echo "Json Output:\n<br/><br/> ". $json_reponse;
?>
