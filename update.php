<?php require 'library.php';
$author = new Author();
$answerA = $author->showAllAuthors();

if (isset($_POST['author_id'])){
  $resultA = $author->updateAuthor($_POST['author_id'], $_POST['fio'],$_POST['count']);
}


$book = new Book(); 
$answerB = $book->showAllBooks();
if (isset($_POST['book_id'])){
  $resultB = $book->updateBook($_POST['book_id'],$_POST['title'],$_POST['price'],$_POST['author']);
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
    <a class='btn btn-danger' href="/delete.php">Удалить автора/книгу</a>
    <a class='btn btn-warning' href="/add.php">Добавить автора/книгу</a>
  </div>
	<div class="wrap">
		<div class="list-authors" style="padding: 20px;">
      <h2>Авторы</h2>
      <form action="#" method="POST" class='form-group'>
        <label for="author_id">Выберете автора</label>
        <select class="custom-select" name="author_id">
          <?php 
          
          while ($row = $answerA->fetch())
          {?>
          
          <option value="<?php echo $row['id']?>"><?php echo $row['FIO']?></option> 

          <?php }
          ?>
        </select>
        <label for="fio">Введите новое Ф.И.О.:</label><br>
        <input type="text" class='input' name='fio'><br>
        <label for="count">Введите количество книг автора:</label><br>
        <input type="text" class='input' name='count'><br>
        <button type="submit" class='btn btn-primary'>Обновить данные автора</button>:
      </form>

      <?php if($resultA){echo "<div style='color: green'>Данные успешно обновлены</div>";}?>

      <span style="color: red; ">* Если поля оставить пустыми, то записанные данные сотруться</span>
		</div>



		<div class="list-books" style="padding: 20px;">
      <h2>Книги</h2>
           <form action="#" method="POST" class='form-group'>
             <label for="book_id">Выберете книгу</label><br>
             <select class="custom-select" name="book_id"><br>
               <?php  
               while ($row = $answerB->fetch())
               {?>
               
               <option value="<?php echo $row['id']?>"><?php echo $row['title']?></option> 
               
               <?php }
               ?>
             </select>
             <label for="title">Название книги:</label><br>
             <input type="text" class='input' name='title'><br>
             <label for="title">Цена:</label> <br>
             <input type="text" class='input' name='price'> <br>
             <label for="title">Автор:</label> <br>
             <input type="text" class='input' name='author'> <br>
             <button type="submit" class='btn btn-primary' >Обновить данные книги</button>
           </form>
           <?php if($resultB){echo "<div style='color: green'>Данные успешно обновлены</div>";}?>

           <span style="color: red; ">* Если поля оставить пустыми, то записанные данные сотруться</span>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>