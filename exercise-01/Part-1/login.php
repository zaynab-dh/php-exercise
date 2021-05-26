<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
</div>

<?php
$logins = array(
    'username1' => 'password1',
    'username2' => 'password2',
    'username3' => 'password3',
);

$username = isset($_POST['username']) ? strtolower($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ( ! isset($logins[$username]) or $logins[$username] != $password)
{
    echo "Wrong Username/Password";
}
?>

</body>
</html>