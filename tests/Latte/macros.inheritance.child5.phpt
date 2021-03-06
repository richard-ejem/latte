<?php

/**
 * Test: Latte\Engine: {extends ...} test V.
 */

use Tester\Assert;


require __DIR__ . '/../bootstrap.php';



$latte = new Latte\Engine;

Assert::matchFile(
	__DIR__ . '/expected/macros.inheritance.child5.phtml',
	$latte->compile(__DIR__ . '/templates/inheritance.child5.latte')
);
Assert::matchFile(
	__DIR__ . '/expected/macros.inheritance.child5.html',
	$latte->renderToString(
		__DIR__ . '/templates/inheritance.child5.latte',
		['ext' => 'inheritance.parent.latte']
	)
);
