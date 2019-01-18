<?php

use PHPUnit\Framework\TestCase;
use dao\PersonneDao;

class PersonneDaoTest extends TestCase
{

    private static $dao;

    /**
     * @beforeClass
     */
    public static function setUpBeforeClass()
    {
        PersonneDaoTest::$dao = new PersonneDao();
    }

    public function testMachin()
    {
        $result = PersonneDaoTest::$dao->getPersonnes();
        $this->assertCount(53, $result);
    }
}