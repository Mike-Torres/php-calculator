<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form>
  <input type="text" name="num1" placeholder="Number 1">
  <input type="text" name="num2" placeholder="Number 2">
  <select name="operator">
    <option value="None">None</option>
    <option value="Add">Add</option>
    <option value="Subtract">Substract</option>
    <option value="Multiply">Multiply</option>
    <option value="Divide">Divide</option>
  </select>
  <br>
  <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>Here is the answer:</p>
<?php
   if(isset($_GET["submit"])){
     $result1 = $_GET['num1'];
     $result2 = $_GET['num2'];
     $operator = $_GET['operator'];
     switch($operator){
       case "None":
          echo "ERROR";
       break;
       case "Add":
          echo $result1 + $result2;
       break;
       case "Subtract":
          echo $result1 - $result2;
       break;
       case "Multiply":
           echo $result1 * $result2;
       break;
       case "Divide":
           echo $result1 / $result2;
       break;
     }
   }


?>

  </body>
</html>
