<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
       
    //creating array - numeric array

    //first way to create array
     $names = array();

    //second way to initialize array
     $names  [0] = "CA233";
     $names  [1] = 123;
     $names  [] = 12.34;
     echo $names [0] ."<br>";
     echo $names [1] ."<br>";
     echo $names [2] ."<br>";

    //display the array values using var_dump() function
     var_dump ($names);

    //display the array values using pre tag 

    echo "<pre>";
    print_r($names);
    echo "</pre>";

    echo "<br>";

    echo "<pre>";
    var_dump($names);
    echo "</pre>";

    //Display the array values Using  For Loop
     for ($i = 0; $i < count ($names); $i++){
     echo $names[$i] . "<br>";
     };

    //example of assciative array 
     $info = array (
        "id"=>"101",
        "name" => "mohamed muse ahmed",
        "age" =>20,
        "addres" =>"hodan district",
        "status"=>"single",
        "weight"=>160.5
    );

    //displaying the information stored in the associative array
     echo "<pr>";
     echo "information about the person: <br>";
     print_r($info);
     var_dump($info);
     echo "</pre>";

    //Displaying information using for loop
     echo "<h3> Using for loop </h3> <br>";
     $keys = array_keys($info);

     for ($i = 0; $i < count ($keys); $i++){
        $key = $keys[$i];
        echo $key . ": " . $info[$key] . "<br>";
     }
    ?>


    ?>
</head>
<body>
    
</body>
</html>