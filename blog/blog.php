<?php
    session_start();
    require 'db_connect.php';
    if(
        !isset($_SESSION["USERNAME"])
    or
        !isset($_SESSION["USER_ID"])
    ) {
        header("Location; login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            background-color: crimson;
            border: 5px solid black;
            height: 100px;
            padding: 10px;
        }
            #user-avatar {
                width: 80px;
                height: 80px;
                background-color: blue;
        }
            #lewy {
                border: 2px solid white;
                width: 30%;
                margin-top: 20px;
            }
            #prawy {
                border: 2px solid white;
                width: 60%;
                margin-top: 20px;
                margin-left: 20px;
                float: left;
            }


        </style>
</head>
<body>
    <header>
        <div id="user-awatar">
        </div>
        <div id="user-name">
            <?php echo $_SESSION["USERNAME"]; ?>
        </div>
    </header>

    <section id="lewy">
    <form action="add_image.php" method="POST" enctype="multipart/form-data">
        Plik: <input type="file" name="add-image-file"><br>
        Tytuł: <input type="text" name="add-image-title"><br>
        Treść: <input type="text" name="add-image-content"><br>
        <input type="submit" value="Dodaj">
    </form>
    </section>
    <section id="prawy">
            <?php
                $id = $_SESSION["USER_ID"];

                $sql = "SELECT title, content, file_path
                        FROM posts
                        WHERE user_id='$id'";

                        $wynik = mysqli_query($conn, $sql);
                        while($wiersz = mysqli_fetch_assoc($wynik)) {
                            $title = $wiersz["title"];
                            $content = $wiersz["cpmtemt"];
                            $file_path = $wiesz["file_path"];

                            echo "<div class='post'>";
                            echo "<h1>$title</h1><br>";
                            echo "<img src='$file_path'<br>";
                            echo "<p>$content</p>";
                            echo "</div>";
                        }
            ?>
    </section>
</body>
</html>