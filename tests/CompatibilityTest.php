<?php

use Aws\Api\Validator;
use PHPUnit\Framework\TestCase;

class CompatibilityTest extends TestCase
{
	public function testItReturnsWhetherCurrenciesAreTheSame()
	{
		$test = new Validator();

		$this->assertInstanceOf(Validator::class, $test);
	}
}