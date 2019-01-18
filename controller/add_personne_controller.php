<?php

include '../setup.php';
include DAO . '/PersonneDao.php';

use model\Personne;
use dao\PersonneDao;

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    include '../view/add_personne.php';
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $options = ["options" => ["regexp" => "/^[A-Z][a-z]+$/"]];
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_VALIDATE_REGEXP, $options);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_VALIDATE_REGEXP, $options);

    if ($nom && $prenom) {
        $pers = new Personne($prenom, $nom);
        $personneDao = new PersonneDao();
        $personneDao->addPersonne($pers);
        header('Location: /display_personnes_controller.php');
    } else {
        include VIEW . '/error_page.php';
    }
}

