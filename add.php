<?php require 'library.php';
$author = new Author();
$answerShow = $author->showAllAuthors();

if(isset($_POST['fio_a'])){
  $resultA = $author->addAuthor($_POST['fio_a'],$_POST['count']);
  header('location: add.php');
}

$book = new Book();
if(isset($_POST['fio_b'])){
  $resultB = $book->addBook($_POST['title'],$_POST['price'],$_POST['fio_b']);
  header('location: add.php');
  
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

    <title>Library</title>
  </head>
  <body>
    
  <div class="panel">
    <a class='btn btn-info' href="/index.php">Главная страница</a>
    <a class='btn btn-danger' href="/delete.php">Удалить автора/книгу</a>
    <a class='btn btn-success' href="/update.php">Изменить автора/книгу</a>
    
  </div>
	<div class="wrap">
		<div class="list-authors" style="padding: 20px;">
      <h2>Добавить автора</h2>
       <form action="" method="post">
        <label for="fio_a">Ф.И.О. автора (формат: Пушкин А.С.):</label><br> 
         <input type="text" name='fio_a' required  placeholder="Пушкин А.С."><br>
        <label for="count">Количество книг автора:</label><br>  
         <input type="text" name='count' required><br>
         <button type="submit" class="btn btn-success">Добавить автора</button>
         <?php if($resultA){echo "<div style='color: green'>Данные успешно добавлены</div>";}?>
       </form>
		</div>
		<div class="list-books" style="padding: 20px;">
      <h2>Добавить книгу</h2>
			   <form action="" method="post">
          <label for="title">Название книги:</label><br> 
           <input type="text" name='title' required><br>
          <label for="price">Цена:</label><br>  
           <input type="text" name='price' required><br>

           <select name="fio_b" style="margin: 15px 0px">
             <?php 
             
             while ($row = $answerShow->fetch())
             {?>
             
             <option value="<?php echo $row['FIO']?>"><?php echo $row['FIO']?></option> 

             <?php }
             ?>
           </select><br>
           <button type="submit" class="btn btn-success">Добавить автора</button>
           <?php if($resultB){echo "<div style='color: green'>Данные успешно добавлены</div>";}?>
         </form>    
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>