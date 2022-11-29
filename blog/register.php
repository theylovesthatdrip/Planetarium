<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
</head>
<body>
    <form action="register_script.php" 
          method="POST" 
          onsubmit="validate_form()"
    >
        E-mail: <input type="email" name="email-form" required>
        Nazwa użytkownika: <input type="text" name="username-form" required>
        Hasło: <input type="password" name="password1-form" required>
        Powtórz hasło: <input type="password" name="password2-form" required>
        <input type="submit" value="Zarejestruj">
    </form>
</body>
</html>