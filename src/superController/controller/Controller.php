<?php
namespace src\superController\controller;
class Controller{
	protected $app;
	protected $instance;
	function __construct($app){
		$this->app 		= $app;
		$this->instance = \src\superController\services\ServiceFactory::getInstance();
	}

}