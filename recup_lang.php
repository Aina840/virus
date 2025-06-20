<?php
// Chemin vers le fichier à lire
$cheminFichier = 'index.php';

// Récupérer le contenu du fichier
$contenu = file_get_contents($cheminFichier);

// Afficher le contenu
if ($contenu !== false) {
    echo $contenu;
} else {
    echo "Erreur lors de la lecture du fichier.";
}
?>
