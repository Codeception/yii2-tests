<?php
namespace tests\fixtures;


use yii\db\Exception;
use yii\test\DbFixture;

class TestFixture extends DbFixture
{
    public $tableName = 'test';
    public $tableConfig = [
        'id' => 'int'
    ];

    public function load() {
        $this->db->createCommand()->createTable($this->tableName, $this->tableConfig)->execute();
    }

    public function unload()
    {
        try {
            $this->db->createCommand()->dropTable($this->tableName)->execute();
        } catch (Exception $e) {

        }
    }
}