<?php 
include 'db_conf.php'; 
 
		


class Author{
	protected $fio;
	protected $count;  
	public function showAllAuthors(){ 
		$db = new dataBase();
		$pdo = $db->db_connect();

		$query = $pdo->query("SELECT * FROM authors ORDER BY id");   
		
		return $query;
	}
	public function deleteAuthor($id){
		$db = new dataBase();
		$pdo = $db->db_connect();
		$query = $pdo->query("DELETE FROM authors WHERE id=$id"); 
	}
	public function updateAuthor($id,$fio,$count){
		$db = new dataBase();
		$pdo = $db->db_connect(); 
		$query = ("UPDATE authors SET  FIO = '$fio', count = $count WHERE id = $id"); 
		$stmt = $pdo->prepare($query); 
    	
    	return $stmt->execute();
	}
	public function addAuthor($fio,$count){
		$db = new dataBase();
		$pdo = $db->db_connect(); 
		$query = ("INSERT INTO authors (FIO,count) VALUES ('$fio',$count)"); 
		$stmt = $pdo->prepare($query); 
    	
    	return $stmt->execute();
	}

}

class Book{
	protected $title;
	protected $price;
	protected $author; 

	public function showAllBooks(){ 
		$db = new dataBase();
		$pdo = $db->db_connect();

		$query = $pdo->query("SELECT * FROM books ORDER BY id");   
		
		return $query;
	}

	public function deleteBook($id){
		$db = new dataBase();
		$pdo = $db->db_connect();
		$query = $pdo->query("DELETE FROM books WHERE id=$id");
	}
	public function updateBook($id,$title,$price,$author){
		$db = new dataBase();
		$pdo = $db->db_connect();

		$query = ("UPDATE books SET  title = '$title', price = $price, author = '$author' WHERE id = $id");
		$stmt = $pdo->prepare($query); 
    	
    	return $stmt->execute();
	}

	public function addBook($title,$price,$fio){
		$db = new dataBase();
		$pdo = $db->db_connect(); 
		$query = ("INSERT INTO books (title, price, author) VALUES ('$title', $price, '$fio')"); 
		$stmt = $pdo->prepare($query); 
    	
    	return $stmt->execute();
	}
}