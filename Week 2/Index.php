<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Costant Function : Define Function
     define ("Age",20);
      echo Age;

    // if-else conditions
     $Age = 20;
     if ($Age>=18)
        echo"Adult";
    else
        echo"child";

    // switch
     $Marks = 100;
     switch (true) {

    case ($Marks >= 90):
        echo "A";
        break;

    case ($Marks >= 80):
        echo "B";
        break;

    case ($Marks >= 70):
        echo "C";
        break;

    case ($Marks >= 60):
        echo "D";
        break;

    default:
        echo "F";
        break;
}

    // Ternary Operator
    $fuel = 1;
    echo $fuel <=1? "Low Tank" : "Full Thank";

    // Loop Control Structure

    // 1.while loop
     $count=1;
     while($count<=5){
        echo $count . "<br>";
        $count++;
    }
    
    // 2.Do-while loop
      $count = 1;
      do
      {
        echo $count . "<br>";
        $count++;
        } while ($count <= 5);

    // 3.For loop
     for($count=1;$count<=5;$count++){
        echo $count . "<br>";
        }
        
    // 4.Nested loop
    for ($i = 1; $i <= 5; $i++)//row loop
         {
        for ($j = 1; $j <= 5; $j++)//column loop
             {
            echo "$i * $j = " . ($i * $j) . "<br>"; // print the product of
            //  the row and column
        }
        echo "<br>";
    }

    ?>
</body>
</html>