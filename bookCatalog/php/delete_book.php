<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] !== "POST"){
        http_response_code(405);
        exit();
    }

    $book_id = $_POST["book_id"];

    require_once "../db/connection.php";

    $delete = $conn -> prepare("DELETE FROM books WHERE id = :id");
    $delete -> execute([
        ":id" => $book_id
    ]);

    $_SESSION["message"] = ("Книга была успешно удалена");
    header("location:../index.php?stat=ok");
    exit();
?>