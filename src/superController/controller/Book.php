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

	public function viewBook($request, $response,$args){

		return $this->app->view->render($response, 'form.twig',["token"=>$this->getToken($request)]);
	}

	public function createBook($request, $response,$args){
		if (false === $request->getAttribute('csrf_status')) {
    		echo "Erro!";	
	    } else {

			$this->instance::setInstance("bookStock");
			$this->instance::getObject()->insertBook(array(
				"name"  =>$request->getParsedBody()['name'],
				"price" =>$request->getParsedBody()['price']
			));
		}
	}


	
}