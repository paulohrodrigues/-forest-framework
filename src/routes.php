<?php
namespace src;
use Slim\Http\Request;
use Slim\Http\Response;
use Model\Book;

//id pages example
$app->get('/profile/{page}', function (Request $request, Response $response, array $args) {
	return $this->view->render($response, 'profile.twig',["page"=>$args["page"]]);
});

//database example
$app->get("/find","src\superController\controller\Book:findBook")->setName("find");
$app->get("/insert/{name}/{price}","src\superController\controller\Book:insertBook")->setName("insert");

// //form CSRF example
$app->get("/formView","src\superController\controller\Book:viewBook")->setName("view");
$app->post("/formCreate","src\superController\controller\Book:createBook")->setName("create");



$app->get('/', function (Request $request, Response $response, array $args) {
	echo "--Hello World--<br>";
	echo "Pages Examples:<br>";
	echo "/find<br>";
	echo "/insert/{name}/{price}<br>";
	echo "/formView<br>";
	echo "/profile/{id}<br>";
	

});