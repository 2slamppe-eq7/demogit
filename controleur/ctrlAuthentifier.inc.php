<?php

if ($connexion) {
    $listeCateg = getListeCategoriesProduits($connexion);
}
// Vérifier login et mot de passe saisis dans la formulaire d'authentification
if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    if (verifierLogin($login, $mdp)) {
        // Si le login et le mot de passe sont valides, ouvrir une nouvelle session
        MaSession::nouvelle(array('login' => $login)); // service minimum
        header('Location: index.php');
        exit();
    } else {
        $message = "ECHEC d'identification : login ou mot de passe inconnus ";
    }
} else {
    $message = "Attention : le login ou le mot de passe ne sont pas renseign&eacute;s";
}

$titre = "La fleur and co";
$entete = "./vue/vueEntete.inc.php";
$gauche = "./vue/vueGauche.inc.php";
$centre = "./vue/vueSeConnecter.inc.php";
$pied = "./vue/vuePied.inc.php";
include("./vue/template.inc.php");
?>
