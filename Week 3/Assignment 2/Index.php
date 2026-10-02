<?php

// 1. A program that declares a one-dimensional array, prints all elements, calculates the total,
// total of even elements, total of odd elements, and finds the minimum and maximum elements with their positions.

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

echo "1. All elements of the array:<br>";
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "<br><br>";

$total = 0;
foreach ($numbers as $number) {
    $total += $number;
}
echo "Total of all elements: " . $total . "<br>";

$evenTotal = 0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenTotal += $number;
    }
}
echo "Total of even elements: " . $evenTotal . "<br>";

$oddTotal = 0;
foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        $oddTotal += $number;
    }
}
echo "Total of odd elements: " . $oddTotal . "<br>";

$minimum = $numbers[0];
$minimumPositions = array();
foreach ($numbers as $index => $number) {
    if ($number < $minimum) {
        $minimum = $number;
        $minimumPositions = array($index);
    } elseif ($number == $minimum) {
        $minimumPositions[] = $index;
    }
}

echo "Minimum element: " . $minimum . "<br>";
echo "Minimum element positions: ";
foreach ($minimumPositions as $position) {
    echo $position . " ";
}
echo "<br>";

$maximum = $numbers[0];
$maximumPositions = array();
foreach ($numbers as $index => $number) {
    if ($number > $maximum) {
        $maximum = $number;
        $maximumPositions = array($index);
    } elseif ($number == $maximum) {
        $maximumPositions[] = $index;
    }
}

echo "Maximum element: " . $maximum . "<br>";
echo "Maximum element positions: ";
foreach ($maximumPositions as $position) {
    echo $position . " ";
}
echo "<br><br>";


// 2. A program that declares a two-dimensional associative array with rows Light, Normal, Dark
// and columns Red, Green, Blue, then prints the array elements in a table.

$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),
    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),
    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

echo "2. Light, Normal and Dark Color Array:<br><br>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";

foreach ($colors as $rowName => $row) {
    echo "<tr>";
    echo "<th>" . $rowName . "</th>";
    foreach ($row as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}

echo "</table><br><br>";


// 3. A program that declares a two-dimensional associative array containing student information
// with Name, Phone, and Address, then prints the array elements in a table.

$students = array(
    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),
    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),
    "CA221-2" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);

echo "3. Student Information:<br><br>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Student ID</th><th>Name</th><th>Phone</th><th>Address</th></tr>";

foreach ($students as $studentID => $student) {
    echo "<tr>";
    echo "<td>" . $studentID . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
