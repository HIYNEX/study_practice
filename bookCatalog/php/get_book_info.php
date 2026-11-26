<?php
    session_start();
     
    $_SESSION["book_id"] = $_GET["book_id"];

    require_once "../db/connection.php";

    $book_info = $conn -> prepare("SELECT * FROM books WHERE id = :id");
    $book_info -> execute([
        ":id" => $_GET["book_id"]
    ]);

    $_SESSION["book_info"] = $book_info;

    header("location:../change_book_current_page");
    exit();
    
?>