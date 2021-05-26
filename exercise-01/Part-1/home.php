<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date_of_birth = $_POST['date_of_birth'];
        $social_security_number = $_POST['social_security_number'];
$registration = array(
        "fullname" => $fullname,
        "username" => $username,
        "password" => $password ,
        "email" => $email,
        "phone" => $phone ,
        "date_of_birth" => $date_of_birth,
        "social_security_number" => $social_security_number,
    );
    foreach($registration as $key => $value){
            echo `$key => $value`;
    };
}

// if ( isset($registration[$username]) or isset($registration[$email]))
// {
//     echo "Username already exists";

// }

// function display()
// {
//     echo "hello " . $_POST["username"];

// }
// if (isset($_POST['submit'])) {
//     display();
// }

// $logins = array(
//         'username1' => 'password1',
//         'username2' => 'password2',
//         'username3' => 'password3',
//     );

//     $username = isset($_POST['username']) ? strtolower($_POST['username']) : '';
//     $password = isset($_POST['password']) ? $_POST['password'] : '';

//     if ( ! isset($logins[$username]) or $logins[$username] != $password)
//     {
//         echo "Wrong Username/Password";
//     }

?>

<div class="form1">
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="fullname" placeholder="Full Name" required />
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input type="password" name="confirm_password" placeholder="Confirm Password" required />
<input type="email" name="email" placeholder="Email" required />
<input type="tel" name="phone" placeholder="Phone" required />
<input type="date" name="date_of_birth" placeholder="Date of Birth" required />
<input type="tel" name="social_security_number" placeholder="Social Security Number" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>

<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
</div>
</div>
</body>
</html>