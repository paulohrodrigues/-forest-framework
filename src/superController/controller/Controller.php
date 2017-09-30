<?php
namespace src\superController\controller;
class Controller{
	protected $app;
	protected $instance;
	function __construct($app){
	
		$this->app 		= $app;
		$this->instance = \src\superController\services\ServiceFactory::getInstance();

	}

	protected function getToken($request){
		$nameKey  =$this->app->csrf->getTokenNameKey();
	    $valueKey =$this->app->csrf->getTokenValueKey();
	    $name = $request->getAttribute($nameKey);
	    $value = $request->getAttribute($valueKey);

	    return array(
	    	"name"     => $name,
	    	"value"    => $value,
	    	"namekey"  => $nameKey,
	    	"valuekey" => $valueKey
	    );
	}





}