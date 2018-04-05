<?php
namespace tests;

use yii\web\Application;

class SimpleCest
{

    public function testInstantiation(FunctionalTester $I)
    {
        $I->assertInstanceOf(Application::class, \Yii::$app);
    }

    public function testFormSubmit(FunctionalTester $I)
    {
        $I->amOnPage(['site/form']);
        $I->seeResponseCodeIs(200);

        $I->fillField('#test', 'test');
        $I->click('#submit');
        $I->canSeeResponseCodeIs(201);
    }

    public function testFormSubmit2(FunctionalTester $I)
    {
        $I->amOnPage(['site/form']);
        $I->seeResponseCodeIs(200);
        $I->submitForm('form', [
            'login-form[login]' => 'user',
            'login-form[password]' => 'test',
        ]);
        $I->canSeeResponseCodeIs(201);
    }

}