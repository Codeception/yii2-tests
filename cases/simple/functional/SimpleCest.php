<?php
namespace tests;

use yii\web\Application;

class SimpleCest
{

    public function testInstantiation(FunctionalTester $I)
    {
        $I->assertInstanceOf(Application::class, \Yii::$app);
    }

}