<?php
	class TestBla1 extends \UnitTestCase
	{
		/** @var $obj \bla\bla1 */
		protected $bla1 = null;

		public function __construct()
		{
			$this->bla1 = new \bla\bla1();
		}

		public function testGetWert1(){

			$this->assertTrue($this->bla1->getWert1() == 'wert1');

			// eine Behauptung ist falsch
			$this->assertFalse($this->bla1->getWert1() == 'xxx');
		}
	}

	$testBla1 = new \TestBla1();
	$testBla1->run(new \HtmlReporter());

