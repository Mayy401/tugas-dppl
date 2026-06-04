<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="card">
    <h2>Register</h2>
    <form action="proses_daftar.php" method="POST">
        <label>Username</label><br>
        <input type="text" name="username" required>
        <br><br>
        <label>Password</label><br>
        <input type="password" name="password" required>
        <br><br>
        <a href="login.php" style="color: black">Already have an account?Log In</a>
        <button type="submit">Register</button>
        </div>
    </form>

</body>
</html>