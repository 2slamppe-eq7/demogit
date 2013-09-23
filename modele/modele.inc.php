<?php
define('USER','root');
define('MDP', 'joliverie');
define('DSN', 'mysql:host=localhost;dbname=baselafleur1');
//    define('DSN', 'oci:dbname=amnesix.sup.stp.lycee-joliverie.fr:1521/info.sup');
//    define('DSN', 'oci:dbname=localhost:1521/XE');

// connexion à la base
function connecter() {
    try {
        $connexion = new PDO(DSN, USER, MDP);
//        $sql ="SET NAMES latin1_german1_ci";
        $sql ="SET NAMES utf8";
        $stmt = $connexion->query($sql);
        //echo "connexion réussie";
    } catch (PDOException $e) {
        echo "Erreur ! : " . $e->getMessage() . "<br />";
        $connexion = null;
    }
    return $connexion;
}

function deconnecter($connexion) {
    $connexion="";
}


// liste de tous les produits
function getListeProduits($conn) {
    $sql = "SELECT * FROM produit";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// liste de tous les produits
function getListeProduitsParCateg($conn, $id) {
//    $sql = "SELECT * FROM produit WHERE pdt_categorie='".$id."'";
//    $stmt = $conn->query($sql);
    $sql = "SELECT * FROM produit WHERE pdt_categorie=?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1,$id);
    $stmt->execute();
//    $stmt->execute(array($id));
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


// la liste des catégories de produits
function getListeCategoriesProduits($conn) {
    $sql = "SELECT * FROM categorie";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 *
 * @param type $login
 * @param type $mdp
 * @return string 
 */
function verifierLogin($login, $mdp) {
    $cnx = connecter();
    if ($cnx) {
        $sql = "SELECT COUNT(*) nbRes FROM clientconnu WHERE clt_email=:l AND clt_motPasse=:m";
//        echo $sql;
        $stmt = $cnx->prepare($sql);
        $execute = $stmt->execute(array(':l' => $login, ':m' => $mdp));
        $row= $stmt->fetch(PDO::FETCH_ASSOC);
        $resu = ($row['nbRes'] == 1);
        deconnecter($cnx);
    } else {
        $resu = false;
    }
    return $resu;
}

?>
