<?php

include '../../setup.php';
use dao\PersonneDao;
use model\Personne;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $personneDao = new PersonneDao();
        $personnes = $personneDao->getPersonnes();
        $tab = [];
        foreach ($personnes as $pers) {
            $tab[] = $pers->toArray();
        }
        header('Content-type: application/json');
        echo (json_encode($tab));
    } catch (PDOException $ex) {
        http_response_code(500);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $tab = json_decode($json, true);
    $pers = new Personne($tab['first-name'], $tab['last-name']);
    try {
        $dao = new PersonneDao();
        $dao->addPersonne($pers);
        http_response_code(201);
    } catch (PDOException $ex) {
        http_response_code(500);
    }
}
