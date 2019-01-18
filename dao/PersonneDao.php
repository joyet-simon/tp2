<?php

namespace dao;

use \PDO;
use model\Personne;


class PersonneDao
{

    private $dsn;
    private $user;
    private $password;
    private $options;
    private $pdo;

    public function __construct()
    {
        $conf = parse_ini_file(CONFIG_FILE_PATH, true);
        $this->user = $conf['user'];
        $this->password = $conf['password'];
        $this->dsn = $conf['dsn'];
        $this->options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $this->pdo = new PDO($this->dsn, $this->user, $this->password, $this->options);
    }

    public function getPersonnes() : array
    {
        $sql = "select * from personne ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $personnes = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $pers = new Personne($row['first_name'], $row['last_name'], $row['id']);
            $personnes[] = $pers;
        }
        return $personnes;
    }

    public function addPersonne($personne) : void
    {
        $statement = 'INSERT INTO personne (last_name,first_name) values (:last_name, :first_name)';
        $stmt = $this->pdo->prepare($statement);
        $stmt->bindValue(':last_name', $personne->getLastName());
        $stmt->bindValue(':first_name', $personne->getFirstName());
        $stmt->execute();
    }
}