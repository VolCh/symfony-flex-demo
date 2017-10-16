<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('login and see private area');
$I->am('anonymous');
$I->amOnRoute('index');
$I->click('Login');
$I->canSeeCurrentRouteIs('login');
$I->seeResponseCodeIs(200);
$I->fillField('login', 'user');
$I->fillField('password', 'secret');
$I->click('submit');
$I->seeCurrentRouteIs('index');
$I->seeResponseCodeIs(200);
$I->seeLink('Logout');
