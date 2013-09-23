<ul class="menugauche">
    <p><b>Menu</b></p><p class="note">version : 2012/MVC/Sessions-objet</p>
    <li><a href="./index.php" >Accueil</a></li>
    <hr/>
    <?php
    // la variable $estAuthentifie est renseignée dans le contrôleur frontal
    if ($estAuthentifie){  
        echo "<h6>".$_SESSION['auth']['login']."</h6>";
        echo "<li><a href=\"./index.php?action=seDeconnecter\">Se déconnecter</a></li>";
    }else{
        echo "<li><a href=\"./index.php?action=seConnecter\">Se connecter</a></li>";
    }  
    
    ?>
    <b>Nos produits</b>
    <li><a href="./index.php?action=afficherTous" >Tous</a></li>
<?php
    foreach ($listeCateg as $categ) {
        echo "<li><a href=\"./index.php?action=afficherUneCateg&id=".$categ['cat_code']."\" >".$categ['cat_libelle']."</a></li>";
    }
?>
</ul>
