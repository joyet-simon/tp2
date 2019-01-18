<?php

include '../../setup.php';
use dao\PersonneDao;

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
}
