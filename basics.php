<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    </div>This is my first php website <br>
    <?php
    echo "hello world";
    echo "<br>";
   
    //variable declaration
    $variable1 = 34;
    $variable2 = 35;
    echo  $variable1;
    echo "<br>";
    
    //operators
    //1.arithmetic
    echo  " adding variable1 and variable 2 ";
    echo "<br>";
    echo $variable1+$variable2;

    //2.assignment operators
      $newvar= $variable1;
      $newvar+=1;
      echo $newvar;
      echo "<br>";

    //3.comparison operators(returns boolean)
    echo "the value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";
    //4.incre/decre operators
        echo $variable1++;
        echo "<br>";
        echo $variable1;
    //5.logical operators &&,||,xor,|
         $myvar = (true) and (true);
         echo "<br>";
         echo var_dump($myvar);

    //DATA TYPES
          /* 1.string
             2.integer
             3.float
             4.booleam
             5.array
             6.object */

    echo "<br> data types";
    echo "<br>";
    $var1 =67;
    $var2 =6.7;
    $var3 =true;

    echo "<br>";
    echo var_dump($var1);
    echo var_dump($var2);
    echo var_dump($var3);
    ?>
</body>
</html>