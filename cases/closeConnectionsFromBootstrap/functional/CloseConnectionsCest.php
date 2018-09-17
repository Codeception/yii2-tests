<?php

namespace tests\closeConnectionsFromBootstrap;

use Codeception\Example;
use tests\FunctionalTester;
use tests\helpers\SqlliteHelper;

class CloseConnectionsCest
{

    protected function numberProvider()
    {
        return array_pad([], 5, ['count' => 0]);
    }

    /**
     * @param FunctionalTester $I
     * @dataProvider numberProvider
     */
    public function NoConnections(FunctionalTester $I, Example $example)
    {
        $I->assertEquals(SqlliteHelper::connectionCount(), $example['count']);
    }
}