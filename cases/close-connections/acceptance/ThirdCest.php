<?php

namespace tests\acceptance;

use tests\AcceptanceTester;
use tests\fixtures\EmptyFixture;
use tests\helpers\SqlliteHelper;

class ThirdCest
{
    public function NoConnections1(AcceptanceTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(0, $count);
    }

    public function OnlyOneConnection2(AcceptanceTester $I)
    {
        $I->haveFixtures([
            [
                'class' => EmptyFixture::class,
            ],
        ]);

        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(1, $count);
    }

    public function OnlyOneConnection3(AcceptanceTester $I)
    {
        $I->haveFixtures([
            [
                'class' => EmptyFixture::class,
            ],
        ]);

        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(1, $count);
    }
}