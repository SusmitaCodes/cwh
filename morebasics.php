<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: grey;
            margin: auto;
            padding: 23px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's learn about php</h1>
       <p>Your party status is here.</p>
        <?php
           $age=7;
           if($age>18){
            echo "you can go to the party.";
           }
           else{
            echo "you cannot go to the party.";
           }
           echo "<br>";

           //arrays in php
           $languages= array("python", "c++", "node.js");
           echo $languages[1];
           echo "<br>";
          // echo "no of elements in the array";
          // echo "<br>";
          // echo count($languages);

           //loops in php
          $a=0;
          do{

            echo " the value of languages ";
          
            echo $languages[$a];
            $a++;
            echo "<br>";

           } while($a<count($languages));

           //for loop

           for ($a=0; $a <10 ; $a++) { 
            echo " <br> the value of a from for loop : ";
            echo $a;
           }
             
           foreach ($languages as $value) {
            echo "<br>The value from foreach loop is";
            echo $value;
           }
        ?>

    

    </div>
</body>
</html>