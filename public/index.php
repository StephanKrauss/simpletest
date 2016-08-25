<?php
	include_once('../vendor/autoload.php');

	if(isset($_SERVER['REDIRECT_URL'])){
		$url = $_SERVER['REDIRECT_URL'];
		$itemUrl = parse_url($url);
		$path = substr($itemUrl['path'],1,-1);

		$call = explode('/',$path);

		if($call[0] == 'src'){
			$aufruf = "\\controller\\".$call[1];
			$controller = new $aufruf();
			$controller->$call[2]();
		}
		elseif( ($call[0] == 'tests') and (isset($call[1])) ){
			$link = "../src/".$call[0]."/".$call[1].".php";
			include_once($link);
		}
		elseif( ($call[0] == 'tests') and !isset($call[1]) ){
			$uniteTest = new TestSuite('alle Test');

			$link = "../src/tests/";
			$files = scandir($link);

			foreach($files as $datei){

				if(false !== strpos($datei, 'Test')){
					$uniteTest->addFile('../src/tests/'.$datei);
				}
			}
		}
	}
	else{
		$controller = new \controller\start();
		$controller->leer();
	}