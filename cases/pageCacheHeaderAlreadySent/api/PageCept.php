<?php
$I = new tests\ApiTester($scenario);

$I->sendGet('users');
$I->canSeeResponseCodeIs(200);


$I->sendGet('users');
$I->canSeeResponseCodeIs(200);
