<?php

namespace tests\functional;

use tests\fixtures\EmptyFixture;
use tests\FunctionalTester;
use tests\helpers\SqlliteHelper;

class SecondCest
{
    public function _before(FunctionalTester $I)
    {
        $I->haveFixtures([
            [
                'class' => EmptyFixture::class,
            ],
        ]);
    }

    public function OnlyOneConnection1(FunctionalTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(1, $count);
    }

    public function OnlyOneConnection2(FunctionalTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(1, $count);
    }

    public function OnlyOneConnection3(FunctionalTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(1, $count);
    }
}