<?php
$I = new AcceptanceTester($scenario);
$I->am('anonymous');
$I->wantTo('open main page');
$I->lookForwardTo('see main page is ok');
$I->amOnPage('/');
$I->canSeeResponseCodeIs(200);
