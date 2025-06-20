<?php
// L'URL de la page à récupérer
$url = "index.php";

// Utilisation de file_get_contents pour obtenir le code source
$html = file_get_contents($url);

// Affichage du code source
echo $html;
?>
