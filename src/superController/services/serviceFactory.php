<?php
namespace src\superController\services;

class ServiceFactory{

	private function __construct(){}

	private static $instance;

	public static function setInstance($option){
		switch ($option) {
			case 'bookStock':
				self::setLocalInstance((new book\BookStock()));
				break;
			default:
				echo "Erro!";
				break;
		}
	}

	private static function setLocalInstance($object){
		self::$instance = $object;
	}

	public static function getObject(){
		return self::$instance;
	}

	public static function getInstance(){
		return (new ServiceFactory());
	}


}



