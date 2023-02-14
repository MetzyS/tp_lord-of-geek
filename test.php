<?php

session_start();


// Pour afficher les erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Attention : A supprimer en production !!!

require("./util/fonctions.inc.php");
require('./util/validateurs.inc.php');
require("./App/modele/AccesDonnees.php");

//     public static function trouveLesCategories()
//     {
//         $req = "SELECT * FROM categories";
//         $res = AccesDonnees::query($req);
//         $lesLignes = $res->fetchAll();
//         return $lesLignes;
//     }
// }

function test()
{
    $req = "SELECT * FROM categories JOIN jeux ON jeux.categories_id = categories.id";
    $res = AccesDonnees::query($req);
    $lesLignes = $res->fetchAll();
    return $lesLignes;
}

function trouveLesJeuxDeCategorie($idCategorie)
{
    $req = "SELECT id_categories, nom_cat, id_jeux, nom_jeux, image, prix FROM exemplaires JOIN jeux ON jeux.id_jeux = exemplaires.jeux_id JOIN categories ON jeux.categories_id = categories.id_categories WHERE exemplaires.id_exemplaires = '$idCategorie'";
    $res = AccesDonnees::query($req);
    $lesLignes = $res->fetchAll();
    return $lesLignes;
}

function trouveLesJeuxCategorie($idCategorie)
{
    $req = "SELECT * FROM exemplaires JOIN jeux ON jeux.id_jeux = exemplaires.jeux_id JOIN categories ON jeux.categories_id = categories.id_categories WHERE exemplaires.id_exemplaires = '$idCategorie'";
    $res = AccesDonnees::query($req);
    $lesLignes = $res->fetchAll();
    return $lesLignes;
}

// var_dump(test());
echo "<br><br>";
var_dump(trouveLesJeuxDeCategorie(1));
echo "<br><br>";
var_dump(trouveLesJeuxCategorie(1));
