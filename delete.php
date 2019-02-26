<?php require 'library.php';
$author = new Author();
$answerA = $author->showAllAuthors();

if (isset($_POST['author'])){
  $author->deleteAuthor($_POST['author']);
}


$book = new Book(); 
$answerB = $book->showAllBooks();
if (isset($_POST['book'])){
  $book->deleteBook($_POST['book']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Library.Delete</title>
  </head>
  <body>
    
  <div class="panel">
    <a class='btn btn-info' href="/index.php">На главную</a>
    <a class='btn btn-success' href="/update.php">Изменить автора/книгу</a>
    <a class='btn btn-warning' href="/add.php">Добавить автора/книгу</a>
  </div>
	<div class="wrap">
		<div class="list-authors" style="padding: 20px;">
      <h2>Авторы</h2>
      <form action="#" method="POST" class='form-group'>
        <label for="author">Выберете автора</label>
        <select class="custom-select" name="author">
          <?php 
          
          while ($row = $answerA->fetch())
          {?>
          
          <option value="<?php echo $row['id']?>"><?php echo $row['FIO']?></option> 

          <?php }
          ?>
        </select>
        <button type="submit" class='btn btn-danger'>Удалить автора</button>
      </form>
		</div>
		<div class="list-books" style="padding: 20px;">
      <h2>Книги</h2>
           <form action="#" method="POST" class='form-group'>
             <label for="book">Выберете книгу</label>
             <select class="custom-select" name="book">
               <?php  
               while ($row = $answerB->fetch())
               {?>
               
               <option value="<?php echo $row['id']?>"><?php echo $row['title']?></option> 
               
               <?php }
               ?>
             </select>
             <button type="submit" class='btn btn-danger' >Удалить книгу</button>
           </form>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>