<?php

class Book {
	
	private $author = "not specified";
	private $tital = "not specified";
	private $year = "not specified";

	public function __construct() {

		$args = func_get_args();

		foreach(["title", "author", "year"] as $item) {

			if(empty($args)) {
				break;
			}

			$this->$item = array_shift($args);
		}
	}

	public function __toString() {
		return "Author: $this->author\nTitle: $this->title\npublished: $this->year\n\n";
	}
}

$book1 = new Book("Stephen prata", "C primer plus"); echo $book1;

$book2 = new Book("Joshua Bloch", "Effective Java",2008); echo $book2;

?>