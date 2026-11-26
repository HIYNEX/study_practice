<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление книги</title>
</head>
<body>
    <div>
        <p><?=$_SESSION["message"]?></p>
        <form action="php/add_book.php" method="POST" enctype="multipart/form-data">
            <label for="cover">Обложка</label>
            <input type="file" name="cover" class="filePic" required placeholder="Выберите картинку/обложку книги">

            <label for="title">Название</label>
            <input type="text" name="title" required>

            <label for="author">Автор</label>
            <input type="text" name="author" placeholder="" required>

            <label for="genre">Жанр</label>
            <select name="genre">
                <?include "php/get_genres.php";?>
            </select>
            

            <label for="amount_of_pages">Кол-во страниц</label>
            <input type="text" name="amount_of_pages" placeholder="введите кол-во страниц" required>

            <input type="submit" value="Добавить книгу">
        </form>
        <a href="index.php"><button>На главную</button></a>
    </div>

</body>
</html>