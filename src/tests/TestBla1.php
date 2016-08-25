<?php
	class TestBla1 extends \UnitTestCase
	{
		/** @var $obj \bla\bla1 */
		protected $bla1 = null;

		public function __construct()
		{
			$this->bla1 = new \bla\bla1();
		}

		function setUp()
		{
			$this->bla1->setWert1('aaa');
		}

		public function testGetWert1(){

			$this->assertTrue($this->bla1->getWert1() == 'aaa');

			// eine Behauptung ist falsch
			$this->assertFalse($this->bla1->getWert1() == 'xxx');
		}

		public function testMock()
		{
			$mock = \Mock::generate('myMock');
			$mock->ex

			$test = 123;

		}
	}

	$testBla1 = new \TestBla1();
	$testBla1->run(new \HtmlReporter());

