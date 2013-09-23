<?php
require_once ("./classe/ISession.class.php");
class MaSession implements ISession{

    static function fermer() {
        session_start();
        unset($_SESSION["auth"]);
        session_destroy();
    }

    static function nouvelle($lesDonneesSession) {
        session_start();
        session_regenerate_id();   // changer l'identification de session (sécurité)
        foreach ($lesDonneesSession as $nomDonnee => $valeurDonnee) {
            $_SESSION["auth"]["$nomDonnee"] = $valeurDonnee;
        }
    }

    static function estAuthentifie($lesDonneesSession) {
        session_start();
        $ok=true;
        foreach ($lesDonneesSession as $nomDonnee) {
            $ok= $ok && isset($_SESSION["auth"]["$nomDonnee"]); 
        }        
        return $ok;
    }
    

}

?>
