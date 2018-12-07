<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class singleton extends TestCase
{
    public function testSingleton() {
		$instance = MyHelloClass::getInstance('world');
		$this->assertEquals($instance->who, 'world');
	}
	public function testSingletonCallesMultipleTimes() {
		$instance = MyHelloClass::getInstance('world');
		$instance1 = MyHelloClass::getInstance();
		$this->assertEquals($instance1->who, 'world');
	}
	public function testSingletonWithNoArguments() {
		$instance = MyClass::getInstance();
		$this->assertEquals($instance->who, 'world');
	}
}

class MyClass extends \Thorin\Singleton {
	public $who;
	public function __construct() {
		$this->who = 'world';
	}
}

class MyHelloClass extends \Thorin\Singleton {
	public $who;
	public function __construct($who) {
		$this->who = $who;
	}
}
