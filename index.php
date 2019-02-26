<?php require 'library.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Library</title>
  </head>
  <body>
    
  <div class="panel">
    <a class='btn btn-danger' href="/delete.php">Удалить автора/книгу</a>
    <a class='btn btn-success' href="/update.php">Изменить автора/книгу</a>
    <a class='btn btn-warning' href="/add.php">Добавить автора/книгу</a>
  </div>
	<div class="wrap">
		<div class="list-authors" style="padding: 20px;">
      <h2>Авторы</h2>
      <ul class="ul-authors list-group list-group-flush">
         
			 <?php 
          $author = new Author();
          $answerA = $author->showAllAuthors();
          while ($row = $answerA->fetch())
          {?>
          
          <li class="list-group-item"><?php echo $row['id'].". ".$row['FIO'].", книг имеется ".$row['count']?></li>  
          <?php }
       ?>
     </ul>
		</div>
		<div class="list-books" style="padding: 20px;">
      <h2>Книги</h2>
			      <ul class="ul-authors list-group list-group-flush">
               
             <?php 
                $book = new Book();
                $answerB = $book->showAllBooks();
                while ($row = $answerB->fetch())
                {?>
                
                <li class="list-group-item"><?php echo $row['title']."<br>".$row['author']."<br>Цена: ".$row['price']." руб."?></li>  
                <?php }
             ?>
           </ul>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>