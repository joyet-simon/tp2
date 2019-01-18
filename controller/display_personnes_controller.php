<?php

include '../setup.php';
include DAO . '/PersonneDao.php';
use dao\PersonneDao;

try {
    $personneDao = new PersonneDao();
    $personnes = $personneDao->getPersonnes();
    include VIEW . '/display_personnes.php';
} catch (PDOException $ex) {
    echo ($ex->getMessage());
}