<?php 
    require 'db_conect.php';

    $nazwaFolderu = 'media/';
    $sciezkaDocelowa = $nazwaFolderu . $_FILES["add-image-file"]["name"];
    $title = $_POST["add-image-title"];
    $content = $_POST["add-image-content"];
    $userID = $_SESSION["USER-ID"];

    $sql = "INSERT INTO posts (user_id, title, content, file_path)
            VALUES ('$userID', '$title', '$content', '$sciezkaDocelowa')";

    if(mysqli_query($conn, $sql)) {
        move_uploaded_file($_FILES["add-image-file"]["tmp_name"], $sciezkaDocelowa);
    }

    // media/obraz1.png
?>