<?php
namespace src;
use Slim\Http\Request;
use Slim\Http\Response;
use Model\Book;


$app->get('/profile/{page}', function (Request $request, Response $response, array $args) {
	return $this->view->render($response, 'profile.twig',["page"=>$args["page"]]);
});

$app->get("/find","src\superController\controller\Book:findBook")->setName("db");

$app->get("/insert/{name}/{price}","src\superController\controller\Book:insertBook")->setName("insert");



$app->get('/', function (Request $request, Response $response, array $args) {
	echo "--Hello World--<br>";
	echo "Pages Examples:<br>";
	echo "/find<br>";
	echo "/insert/{name}/{price}<br>";
	echo "/profile/{id}<br>";
	

});