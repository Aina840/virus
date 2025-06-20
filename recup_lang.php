<?php
// L'URL de la page à récupérer
$url = "http://challenge01.root-me.org/web-serveur/ch13/";

// Utilisation de file_get_contents pour obtenir le code source
$html = file_get_contents($url);

// Affichage du code source
echo $html;
?>
