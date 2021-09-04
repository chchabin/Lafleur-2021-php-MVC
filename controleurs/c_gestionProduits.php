<?php
$action = $_REQUEST['action'];
switch ($action) {
    case 'connecter':
    {
        include 'vues/v_connexion.php';
        break;
    }
    case 'valider':
    {
        $login=$_REQUEST['login'];
        $mdp=$_REQUEST['mdp'];
        $val=$pdo->countLogin($login,$mdp);
        $message=($val[0]==0)?"connexion invalide":"connexion réussie";
        echo $message;
        break;
    }
}







