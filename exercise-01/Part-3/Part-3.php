<?php

$pln_ = $REQUEST['word'];

function check_palindrome($string) 
{
  if ($string == strrev($string))
    echo "is palindrome";
  else
    {echo "not palindrome";
    }
}
echo check_palindrome($pln_);
?>