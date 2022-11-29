<?php require "db_connect.php";
    $username = $_POST["username-form"];
    $pass = $_POST["password-form"];

    if($username == "" or $pass == "") {
    
    } else {
        $hashedPass = hash("sha256", $pass);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashedPass'";
        // echo $sql;
        if($wynik = mysqli_query($conn, $sql)) {
            if(mysqli_num_rows($wynik) == 0) {
                // nie ma użytkownika, zajerestruj.
                header("Location: register.php");
            } else {
                while($wiersz = mysqli_fetch_assoc($wynik)) {
                    $userid = $wiersz["id"];
                }
            }
            $_SESSION["USERNAME"] = $username;
            $_SESSION["USERID"] = $userid;
        }
    }
mysqli_close($conn);
?>