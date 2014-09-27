<?php 
$I = new WebGuy($scenario);
$I->wantTo('see Hello, World! on the page');
$I->amOnPage('/');
$I->see('Hello, World!');
?>
