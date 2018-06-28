<?php

namespace tests\closeConnectionsNoCleanup;

use tests\AcceptanceTester;
use tests\fixtures\EmptyFixture;
use tests\helpers\SqlliteHelper;

class FixturesCest
{
    public function _fixtures()
    {
        return [
            [
                'class' => EmptyFixture::class,
            ],
        ];
    }

    public function NoConnections1(AcceptanceTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(0, $count);
    }

    public function NoConnections2(AcceptanceTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(0, $count);
    }

    public function NoConnections3(AcceptanceTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(0, $count);
    }

}