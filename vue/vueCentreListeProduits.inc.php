<?php
echo "<h3>Liste des produits</h3>\n";
//for ($i = 0; $i < 10; $i++) {
//    echo '<br/>';
//}
    echo "<table>\n";
    echo "<tr><th >designation</th><th>prix</th><th>image</th></tr>\n";
    // pour chaque enregistrement
    foreach ($listeProduits as $produit) {
        echo "<tr>\n";
        // première colonne, nom du produit
        echo "<td>".$produit["pdt_designation"]."</td>\n";
        // deuxième colonne,prix
        echo "<td>".$produit["pdt_prix"]."</td>\n";
        // troisième colonne image
        echo "<td><img src=\"./vue/images/". $produit["pdt_image"].".jpg\"> </img></td>\n";
        echo "</tr>\n";
    }
    echo "</table>\n";

?>
