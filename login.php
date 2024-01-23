<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<div class="container">
    <h1>Student Record Panel</h1>
    <h2>Admin Login</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label>
            <input type="text" name="username" placeholder="Username" required>
        </label><br>
        <label>
            <input type="password" name="password" placeholder="Password" required>
        </label><br>
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hardcoded_username = "admin";
    $hardcoded_password = password_hash("admin", PASSWORD_DEFAULT); 

    if ($username === $hardcoded_username && password_verify($password, $hardcoded_password)) {
       header("Location: main.php");
        exit();
    } else {
        echo "Incorrect username or password!";
    }
}
?>



