<?php
namespace tests;

use tests\fixtures\TestFixture;
use yii\db\Connection;

class SqLiteCest
{
    /**
     * This is called before the database transaction is started.
     */
    public function _fixtures()
    {
        return [
            [
                'class' => TestFixture::class,
                'db' => 'db1'
            ],
        ];
    }

    public function testTransaction(FunctionalTester $I)
    {
        /** @var Connection $db1 */
        $db1 = $I->grabComponent('db1');
        $I->assertInstanceOf(Connection::class, $db1);
        $I->assertNotNull($db1->getTransaction());
    }

    public function testInstantiation(FunctionalTester $I)
    {
        /** @var Connection $db1 */
        $db1 = $I->grabComponent('db1');
        /** @var Connection $db21 */
        $db21 = $I->grabComponent('db21');
        /** @var Connection $db22 */
        $db22 = $I->grabComponent('db22');

        $I->assertInstanceOf(Connection::class, $db1);
        $I->assertInstanceOf(Connection::class, $db21);
        $I->assertInstanceOf(Connection::class, $db22);

        $I->assertCount(1, $db1->schema->getTableNames());
        $I->assertCount(1, $db21->schema->getTableNames());
    }

}