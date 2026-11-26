<?
require_once "db/connection.php";
$books = $conn -> prepare("SELECT * FROM books JOIN genres ON books.id_genre = genres.id");
$books -> execute();

foreach($books as $book){
    if($book["current_page"] == 0){
        $percent = 0;
    }else{
        $difference = $book["pages"] - $book["current_page"];
        $percent = $difference / 100;
    }
    
    
    ?>
    <div class="book">
        <img src="<?=$book["book_cover"]?>">
        <p><?=$percent?></p>
        <h3><?=$book["title"]?></h3>
        <p><?=$book["author"]?></p>
        <p><?=$book["genre"]?></p>
        <p><?=$book["status"]?></p>
        <p><?=$book["current_page"]?>/<?=$book["pages"]?></p>
        <form action="php/delete_book.php">
            <input type="submit" value="Удалить">
        </form>            
    </div>
<?}

?>