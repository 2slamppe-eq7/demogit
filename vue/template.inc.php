<!DOCTYPE html >
<html lang="fr">
    <head>
        <meta charset=utf8" />
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <link rel="stylesheet" href="./vue/css/styleLargeurFixe.css" />
        <title><?php echo $titre; ?></title>
    </head>
    <body>
	<div id="conteneur">
            <div id="header">
               <?php include("$entete"); ?>
            </div>
            <div id="gauche">
               <?php include("$gauche"); ?>
            </div>
            <div id="centre">
                <?php include("$centre");?>
            </div>
            <div id="pied">
                <?php include("$pied");?>
            </div>
        </div>
    </body>
</html>
