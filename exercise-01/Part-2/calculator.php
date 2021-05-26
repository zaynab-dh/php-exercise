<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="csss.css"/>

    <title></title>
</head>
<body>
    <table > 
<tr> 
<td colspan="2"></td> 
<td>monthly</td>  

  <td>yearly </td> 

   </tr>

   <tr> 
   <td>Total salary</td> 
   <td><?php echo $_POST["Salary"]?> </td>
   <td><?php echo $_POST["Salary"]?> </td>

   </tr>
   <tr> 

   <td>Tax amount</td> 

 </tr>
 <tr> 
<td>Social security fee</td> 
</tr>
<tr> 
   <td>Salary after tax  </td> 

   </tr>


    </table>

    
    <?php

// if (isset($_POST['Calculate']))
// {
//     $salary = $_POST["Salary"];
//     $taxfree = $_POST["taxfree"];
//     $radioVal = $_POST["radio"];

//     if($radioVal == "Yearly")
//     {
//         $salary=$_POST["Salary"]*12;
//         $taxfree = $_POST["taxfree"]*12;
//     }
//     else if ($radioVal == "monthly")
//     {
//     $salary=$_POST["Salary"];
//     $taxfree = $_POST["taxfree"];
//     }
// }
//     class MyCalculator {
        
//         public function __construct($salary, $taxfree,$radioVal)
//         {
//             $this->salary= $salary;
//             $this->taxfree = $taxfree;
//         }
//         public function monthtotalsalary() {
//             return $this->salary;
//         }
//         public function tax() {
//             return $this->taxfree;
//         }
//         public function salaryaftertax() {
//             return $this->salary - ($this->taxfree * $this->salary /100 );
//         }
//         public function divide() {
//             return $this->value1 / $this->value2;
//         }
//     }

?>

</body>
</html>

