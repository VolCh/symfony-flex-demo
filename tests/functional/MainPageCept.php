<?php
$I = new FunctionalTester($scenario);
$I->wantTo('perform actions and see result');
$I->am('anonymous');
$I->wantTo('open main page');
$I->lookForwardTo('see main page is ok');
$I->amOnPage('/');
$I->canSeeResponseCodeIs(200);
