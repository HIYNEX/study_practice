<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] !== "POST"){
        http_response_code(405);
        exit();
    }


$inputs = [
    "title",
    "author",
    "genre",
    "amount_of_pages",
];

foreach($inputs as $input){
    if(!isset($_POST[$input]) or empty($_POST[$input])){
        $_SESSION["message"] = ("Заполните все поля");
        header("location:../addCarPage.php?stat=err");
        exit();
    }
}

$title = $_POST["title"];
$author = $_POST["author"];
$genre = $_POST["genre"];
$amount_of_pages = $_POST["amount_of_pages"];

$extension = pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
$newName = uniqid('book_cover_', true).'.'.strtolower($extension);
$pictureDir = "../media/book_cover/".$newName;

$pictureMoved = move_uploaded_file($_FILES['cover']['tmp_name'], $pictureDir);

if($pictureMoved){
    require_once "../db/connection.php";

    $add_book = $conn -> prepare("INSERT INTO books (book_cover, title, author, id_genre, pages) VALUES(:cover, :title, :author, :genre, :pages)");
    $add_book -> execute([
        ":cover" => $pictureDir,
        ":title" => $title,
        ":author" => $author,
        ":genre" => $genre,
        ":pages" =>$amount_of_pages
    ]);

    header("location:../index.php");
}else{
     $_SESSION['message'] = "Файл не отправлен";
    header("location:../add_book_page.php?stat=error");
    exit();
}
?>