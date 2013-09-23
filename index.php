<?php
   require_once ("./classe/MaSession.class.php");
   require_once("./modele/modele.inc.php");
   // Pour les contrôleurs, il faut vérifier :
   // - l'authentification de l'utilisateur
   $estAuthentifie= MaSession::estAuthentifie(array('login'));
   // - la connexion à la base de données
    $connexion= connecter();
    if (isset($_GET['action']) && $_GET['action'] != null) {
        $action = $_GET['action'];
        switch ($action) {
        case 'afficherUn' :
            $page = 'ctrlAfficherUn.inc.php';
            break;
        case 'afficherTous' :
            $page = 'ctrlAfficherTous.inc.php';
            break;
        case 'afficherUneCateg' :
            $page = 'ctrlAfficherUneCateg.inc.php';
            break;
        case 'seConnecter' :
            $page = 'ctrlSeConnecter.inc.php';
            break;
        case 'seDeconnecter' :
            $page = 'ctrlSeDeconnecter.inc.php';
            break;
        case 'authentifier' :
            $page = 'ctrlAuthentifier.inc.php';
            break;
        }
    } else {
        $page = 'ctrlAccueil.inc.php';
    }
    include("./controleur/" . $page);
    deconnecter($connexion);
?>
