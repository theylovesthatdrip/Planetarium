<?php require "db_connect.php";
    $email = $_POST["email-form"];
    $username = $_POST["username-form"];
    $pas1 = $_POST["password1-form"];
    $pas2 = $_POST["password2-form"];

    echo $email;
    echo $username;
    echo $pas1;
    echo $pas2;

    if($pas1 == $pas2) {
        if($email == "" or 
           $username == "" or 
           $pas1 == "" or 
           $pas2 == "") {
            header("Location: register.php"); 
        } else {
            
            $sql = mysqli_prepare($conn, "INSERT INTO users(username, password, email) VALUES (?,?,?)")or die(mysqli_error($conn));
            mysqli_stmt_bind_param($sql, "sss", $username, hash("sha256",$pas1), $email);

            if(mysqli_stmt_execute($sql)) {
                echo "dodano rekord";
            } else {
                echo "błąd";
            }
            // if(mysqli_query($conn, $sql)) {
            //     echo "dodano rekord";
            // } else {
            //     echo "błąd";
            // }
        
        }
    } else {
        header("Location: register.php");
    }
mysqli_close($conn);
?>