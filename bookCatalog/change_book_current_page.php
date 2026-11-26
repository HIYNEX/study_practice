<?php
    session_start();
    $book_info = $_SESSION["book_info"];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение текущей страницы</title>
</head>
<body>
    <?foreach($book_info as $info){?>
        <div class="info_block">
            <p>Название: <?=$info["title"]?></p>
            <p>Кол-во страниц: <?=$info["pages"]?></p>
            <p>Текущая страница: <?=$info["current_page"]?></p>
        </div>
    <?}?>
    <form action="php/change_book_page.php" method="POST">
        <input type="text" placeholder="Введите вашу текущую страницу" required name="current_page">
        <input type="submit" value="изменить">
    </form>
        <form action="php/delete_book.php" method="POST">
            <input type="hidden" value="<?=$_SESSION["book_id"]?>" name="book_id">
            <input type="submit" value="Удалить книгу">
        </form>            
</body>
</html>