<?php
    if ($connexion) {
        $listeCateg= getListeCategoriesProduits($connexion);
    }

    $titre="La fleur and co";
    $entete= "./vue/vueEntete.inc.php";
    $gauche= "./vue/vueGauche.inc.php";
    if ($connexion && $estAuthentifie) {
        $listeProduits = getListeProduits($connexion);
        $centre= "./vue/vueCentreListeProduits.inc.php";
    }else{
        $message= "Vous n'êtes pas authentifié";
        $centre= "./vue/vueCentreAccueil.inc.php";
    }
    $pied= "./vue/vuePied.inc.php";
    include("./vue/template.inc.php");

?>
