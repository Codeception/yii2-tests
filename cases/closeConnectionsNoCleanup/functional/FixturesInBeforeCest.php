<?php

namespace tests\closeConnectionsNoCleanup;

use tests\AcceptanceTester;
use tests\fixtures\EmptyFixture;
use tests\helpers\SqlliteHelper;

class FixturesInBeforeCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->haveFixtures([
            [
                'class' => EmptyFixture::class,
            ],
        ]);
    }

    public function OnlyOneConnection1(AcceptanceTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(1, $count);
    }

    public function OnlyOneConnection2(AcceptanceTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(1, $count);
    }

    public function OnlyOneConnection3(AcceptanceTester $I)
    {
        $count = SqlliteHelper::connectionCount();
        $I->assertEquals(1, $count);
    }
}