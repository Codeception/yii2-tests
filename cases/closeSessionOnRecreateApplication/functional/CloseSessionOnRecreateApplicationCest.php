<?php

namespace tests;

final class CloseSessionOnRecreateApplicationCest
{
    public function sessionIsPreservedInBetweenRequestsWithinSingleTest(FunctionalTester $I)
    {
        $I->amOnPage(['site/writesession']);

        $I->amOnPage(['site/readsession']);

        $I->dontSee('session non started');
        $I->dontSee('session empty');
        $I->see('session filled');
    }

    public function sessionIsClosedAndClearedWithinDifferentTests(FunctionalTester $I)
    {
        $I->amOnPage(['site/readsession']);

        $I->see('session non started');
        $I->dontSee('session empty');
        $I->dontSee('session filled');
    }
}
