<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="style.css"/>

</head>
<body>
    
<form action="calculator.php" method="post">

<div class="allform">
Salary in USD
<input type="text" name="Salary" placeholder="Salary in USD" />

<br/>

<label for="Yearly">Yearly</label><br>
<input type="radio" name="radio" value="Yearly"/>
<br/>
<label for="monthly">monthly</label><br>
<input type="radio" name="radio" value="monthly"/>
<br/>

Tax Free Allowance in USD
<input type="text" name="taxfree" placeholder="Tax Free Allowance in USD" />
<br/>

<input type="submit" value="Calculate" name="Calculate"/>

</div>
</form>
</body>
</html>