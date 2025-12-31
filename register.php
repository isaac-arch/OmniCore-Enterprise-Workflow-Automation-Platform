<?php include "../config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="container">
<div class="card">
<form method="POST">
<input name="name" placeholder="Name"><br><br>
<input name="email" placeholder="Email"><br><br>
<input name="password" type="password" placeholder="Password"><br><br>
<button name="register">Register</button>
</form>

<?php
if(isset($_POST['register'])){
  $p = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $conn->query("INSERT INTO users(name,email,password) VALUES('{$_POST['name']}','{$_POST['email']}','$p')");
  echo "Registered successfully";
}
?>
</div>
</div>
</body>
</html>