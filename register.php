<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendess Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container" id ="register" style="display: block;">
        <h1>Register</h1>
<form method="POST" action="register.php">
   <div class="input-group">
    <i class="fas fa-envelop"></i>
    <input type="text" name="name" placeholder="Name">
    <label for="name">Name</label>
   </div>
   <div class="input-group">
        <i class="fas fa-envelop"></i>
        <input type="email" name="email" placeholder="Email" required>
        <label for="email"> Email </label>
    </div>
       <div class="input-group">
       <i class="fas fa-lock"></i>
       <input type="password" name="password" placeholder="Password" required>
       <label for="password"> Password </label>
    </div>
    <input type="submit" class="btn" value="Register" name="login">
</form>
<?php
$conn = new mysqli("localhost", "root", "", "event_management");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
    <a href="index.php">BACK MENU</a>
</body>
</html>
