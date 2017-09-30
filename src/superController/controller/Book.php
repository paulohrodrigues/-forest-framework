<?php
namespace src\superController\controller;
class Book extends Controller
{	
	public function findBook($request, $response,$args){
		$this->instance::setInstance("bookStock");
		$this->instance::getObject()->findBook();
	}
	public function insertBook($request, $response,$args){
		$this->instance::setInstance("bookStock");
		$this->instance::getObject()->insertBook(array(
			"name"  =>$args["name"],
			"price" =>$args["price"]
		));
	}
}