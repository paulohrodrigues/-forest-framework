<?php
namespace src\superController\services\book;
use \src\model\Book;

class BookStock{
	
	public function findBook(){
		var_dump(json_encode(Book::all()));
	}
	public function insertBook($array){
		$book = new Book();
        $book->name  	   = $array["name"];
        $book->price 	   = $array["price"];
        $book->description = "description Test"; 
        if($book->save()){
        	echo "Successful!";
        }
	}

}