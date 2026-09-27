<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 1. A program that compares three integers and prints the greatest and smallest one.
$num1 = 25;
$num2 = 10;
$num3 = 40;

$greatest = $num1;
$smallest = $num1;

if ($num2 > $greatest) {
    $greatest = $num2;
}
if ($num3 > $greatest) {
    $greatest = $num3;
}

if ($num2 < $smallest) {
    $smallest = $num2;
}
if ($num3 < $smallest) {
    $smallest = $num3;
}

echo "1. Greatest number: " . $greatest . "<br>";
echo "2. Smallest number: " . $smallest . "<br><br>";


// 2. A program that checks whether a number is divisible by 3, 5, both, or none.
$number = 15;

if ($number % 3 == 0 && $number % 5 == 0) {
    echo " $number is divisible by both 3 and 5.<br><br>";
} elseif ($number % 3 == 0) {
    echo " $number is divisible by 3.<br><br>";
} elseif ($number % 5 == 0) {
    echo " $number is divisible by 5.<br><br>";
} else {
    echo " $number is divisible by neither 3 nor 5.<br><br>";
}


// 3. A program that prints odd numbers from 2 to 20 and even numbers from 35 to 7.
echo " Odd numbers from 2 to 20: ";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br>Even numbers from 35 to 7: ";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br><br>";


// 4. A program that prints numbers divisible by both 2 and 5 from 50 to 2.
echo " Numbers divisible by both 2 and 5 from 50 to 2: ";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}
echo "<br><br>";


// 5. A program that finds the reverse of a given number without using strrev().
$number = 12345;
$reverse = 0;
$temp = $number;

while ($temp > 0) {
    $digit = $temp % 10;
    $reverse = ($reverse * 10) + $digit;
    $temp = intdiv($temp, 10);
}

echo " Reverse of $number = $reverse<br><br>";


// 6. A program that calculates the LCM of two positive integers.
$num1 = 8;
$num2 = 12;

$greater = ($num1 > $num2) ? $num1 : $num2;
$lcm = $greater;

while ($lcm % $num1 != 0 || $lcm % $num2 != 0) {
    $lcm++;
}

echo " LCM of $num1 and $num2 = $lcm<br><br>";


// 7. A program that calculates the HCF of two integer numbers.
$num1 = 18;
$num2 = 24;

$a = abs($num1);
$b = abs($num2);

while ($b != 0) {
    $remainder = $a % $b;
    $a = $b;
    $b = $remainder;
}

echo " HCF of $num1 and $num2 = $a<br><br>";


// 8. A program that prints a multiplication table from 1*1 up to 12*12 using nested loops.
echo " Multiplication Table (1 to 12):<br><br>";

echo "<table border='1' cellpadding='6' cellspacing='0'>";

for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table><br>";


// 9. A program that checks whether a number is prime or non-prime.
$number = 29;
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo " $number is a prime number.<br><br>";
} else {
    echo " $number is a non-prime number.<br><br>";
}


// 10. A program that prints prime numbers from 10 to 50.
echo " Prime numbers from 10 to 50: ";

for ($number = 10; $number <= 50; $number++) {
    $isPrime = true;

    if ($number < 2) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo $number . " ";
    }
}

echo "<br>";



    ?>
</body>
</html>