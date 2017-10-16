<?php
$I = new FunctionalTester($scenario);
$I->am('anonymous');
$I->wantTo('open main page');
$I->lookForwardTo('see main page is ok');
$I->amOnRoute('index');
$I->canSeeCurrentUrlEquals('/');
$I->canSeeResponseCodeIs(200);
$I->canSeeInTitle('Welcome');