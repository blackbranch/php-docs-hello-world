<?php

echo "Hello FYP DADDY!";
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Handle the form submission
  $username = $_POST['username'];
  // Do something with the username, such as authenticate the user
  // ...
  // Redirect the user to another page after successful authentication
  header('Location: welcome.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>

  <h2>Login</h2>

  <form method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Login">
  </form>

</body>
</html>
