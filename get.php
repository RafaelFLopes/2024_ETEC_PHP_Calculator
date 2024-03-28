<?php
   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
      if($op == '+')
         $resultado = $a + $b;
      else if($op == '-')
         $resultado = $a - $b;
      else if($op == '*')
         $resultado = $a*$b;
      else
         $resultado = $a/$b;

      echo "O resultado é: $resultado";

    }
?>       