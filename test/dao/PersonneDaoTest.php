<?php

use PHPUnit\Framework\TestCase;
use dao\PersonneDao;

class PersonneDaoTest extends TestCase
{
//vendor\bin\phpunit --bootstrap setup.php test
    private static $dao;

    /**
     * @beforeClass
     */
    public static function setUpBeforeClass()
    {
        PersonneDaoTest::$dao = new PersonneDao();
    }

/*     public function testMachin()
    {
        $result = PersonneDaoTest::$dao->getPersonnes();
        $this->assertCount(54, $result);
    } */

    public function testGetPersonneById()
    {
        $result = PersonneDaoTest::$dao->getPersonneById(55);
        $this->assertAttributeEquals("Cloud", "first_name", $result);
    }

    public function testUpdatePersonne()
    {
        $result = PersonneDaoTest::$dao->getPersonneById(2);
        $result->setFirstName('Toto');
        $result->setLastName('Tata');
        PersonneDaoTest::$dao->updatePersonne($result);
        $result = PersonneDaoTest::$dao->getPersonneById(2);
        $this->assertAttributeEquals("Toto", "first_name", $result);
        $this->assertAttributeEquals("Tata", "last_name", $result);
    }
}