<?php

	namespace bla;

	/**
	 * Beschreibung der Klasse
	 * Ausführliche Beschreibung der Klasse
	 * Ausführliche Beschreibung der Klasse
	 * Ausführliche Beschreibung der Klasse
	 *
	 * @author User
	 * @date 22.08.2016
	 * @file bla1.php
	 * @package front | admin | tabelle | data | tools | plugins
	 * @subpackage model | controller | filter | validator
	 */
	class bla1
	{
		protected $wert1 = null;
		protected $wert2 = null;

		public function setWert1($wert1)
		{
			$this->wert1 = $wert1;

			return $this;
		}

		public function setWert2($wert2)
		{
			$this->wert2 = $wert2;

			return $this;
		}

		public function getWert1(){
			return $this->wert1;
		}

	} // end class
