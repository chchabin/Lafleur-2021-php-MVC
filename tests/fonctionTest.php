<?php

function ajouterAuPanierTest(){
    $testProduit=[
        [
            'nom'=>"l'identifiant du produit Coup de charme jaune est déjà dans la variable session",
            'produit'=>'c02',
            'session'=>true,
            'retour'=>false

        ],
        [
            'nom'=>"L'identifiant du produit Coup de charme jaune n'a pas été trouvé",
            'produit'=>'c02',
            'session'=>false,
            'retour'=>true
        ]

    ];
    $_SESSION['produits']=array();
   foreach ($testProduit as $test){
       if ($test['session']){
           $_SESSION['produits'][]=$test['produit'];
       }
           if($test['retour']===ajouterAuPanier($test['produit'])){
               echo '<h6 style="color: green;">Test : '. $test['nom'] .' OK</h6>';
           }
           else{
               echo '<h6 style="color: red;">Test : '. $test['nom'] .' KO</h6>';
           }

    }
    unset($_SESSION['produits']);
}
function countLoginTest(){
    $pdo = PdoLafleur::getPdoLafleur();
    $testLogin=[
        [
            'login'=>'chabin',
            'mdp'=>'chabin'
        ],
        [
            'login'=>'titi',
            'mdp'=>'titi'
        ]

    ];
    foreach ($testLogin as $test){
        $val=$pdo->countLogin($test['login'],$test['mdp']);
        if($val[0]!=0){
            echo '<h6 style="color: green;">Test : '. $test['login'] .' OK</h6>';
        }else{
            echo '<h6 style="color: red;">Test : '. $test['login'] .' KO</h6>';
        }
    }
}
