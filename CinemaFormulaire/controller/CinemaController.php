<?php

namespace Controller;
use Model\Connect;

class CinemaController {
    /*lister les films */
    public function listFilms() {

        $pdo = Connect::seConnecter();
        $requete = $pdo-> query("
            SELECT titre, annee
            FROM film
        ");
        require "view/listFilms.php";
    }

    public function detActeur($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo-> prepare("SELECT * FROM acteur WHERE id_acteur = id");
        $requete->execute(["id" => $id]);
        require "view/acteur/detailActeur.php";
}}
?>