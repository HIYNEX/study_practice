<?php
    require_once "db/connection.php";
    $genres = $conn -> prepare("SELECT * FROM genres");
    $genres -> execute();
    foreach($genres as $genre){?>
        <option value="<?=$genre["id"]?>"><?=$genre["genre"]?></option>
    <?}

?>