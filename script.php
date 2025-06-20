<?php
// Exemple de script vulnérable à une LFI (Local File Inclusion)
if (isset($_GET['page'])) {
    // Vulnérabilité LFI : la variable n'est pas filtrée
    include($_GET['page']);
} else {
    echo "Aucune page spécifiée.";
}
?>
