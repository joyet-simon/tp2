<?php

include '../setup.php';

use dao\PersonneDao;
use model\Personne;

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if ($id) {
        try {
            $personneDao = new PersonneDao();
            $personne = $personneDao->getPersonneById($id);
            include VIEW . '/update_personne.php';
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
        }
    } else {
        echo ("NO ID");
    }
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id = filter_input(INPUT_POST, 'personne_id', FILTER_VALIDATE_INT);
    $prenom = filter_input(INPUT_POST, 'prenom');
    $nom = filter_input(INPUT_POST, 'nom');
    if ($id && $prenom && $nom) {
        try {
            $personneDao = new PersonneDao();
            $pers = $personneDao->getPersonneById($id);
            $pers->setFirstName($prenom);
            $pers->setLastName($nom);
            $personneDao->updatePersonne($pers);
            header('Location: /display_personnes_controller.php');
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
        }
    } else {
        include VIEW . '/error_page.php';
    }
}
