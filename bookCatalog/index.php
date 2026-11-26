<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя библиотека</title>
    <link rel="stylesheet" href="styles\style_index.css">
</head>
<body>
    <header>
        <h2>Архив старообрядцев</h2>

        <div>
            <p id="goal"></p>
            <button>Изменить годовую цель</button>       
        </div>

        <div class="nav">
                <a href="add_book_page.php"><button>Добавить книгу</button></a>
                <div>
                    <input type="text">
                    <select name="" id="">
                        <option value=""></option>
                    </select>            
                </div>
            </div>
    </header>


    


    
    <main>
        <div class="catalog">
            <div class="wrapper">
                <?include "php/get_books.php";?>
            </div>
        </div>
    </main>

    <footer></footer>
</body>
</html>