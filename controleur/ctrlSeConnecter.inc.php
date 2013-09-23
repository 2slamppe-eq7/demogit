<?php
    if ($connexion) {
        $listeCateg= getListeCategoriesProduits($connexion);
    }

    $titre="La fleur and co";
    $entete= "./vue/vueEntete.inc.php";
    $gauche= "./vue/vueGauche.inc.php";
    $centre= "./vue/vueSeConnecter.inc.php";
    $pied= "./vue/vuePied.inc.php";
    include("./vue/template.inc.php");

?>
