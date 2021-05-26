<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="safe.php" method="post">
Salary in USD:
<input type="text" name="salary"  placeholder="salary in USD"  />
<br/>
yearly
<input type="radio" name="radio1" value="yearly"/>
<br/>
monthly
<input type="radio" name="radio2" value="monthly"/>
<br/>
<input type="text" name="taxfree"  placeholder="tax free allowance"  />
<input name="submit" type="submit" value="submit" />
</form>

<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
</div>
</body>
</html>