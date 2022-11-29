<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <script>
        function sprawdz_form() {
            let username = document.getElementById("username-form").value
            let password = document.getElementById("password-form").value

            if(username == "" || password == "") {
                alert("Wszystkie pola muszą być wypełnione.")
                return false
            }

            
        }
    </script>
    <form action="login_script.php" method="POST" onsubmit="sprawdz_form()">
        Nazwa użytkownika: <input type="text" name="username-form" id="username-form" required>
        Hasło: <input type="password" name="password-form" id="password-form" required>
        <input type="submit" value="Zaloguj">
</form>
<?php 
echo $_SESSION["USERNAME"];
echo $_SESSION["USERID"];
?>
</body>
</html>