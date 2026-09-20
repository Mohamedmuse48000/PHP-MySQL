# Week 2 — PHP Control Structures & Functions

This section contains practical PHP examples covering constants, conditional statements, loops, nested loops, switch statements, and the ternary operator.

---

## 01. Define Function / Constant

![Define Function](./Define%20Function.png)

### Code

```php
// Costant Function : Define Function
define("Age", 20);

echo Age;
```

### Explanation

`define()` is used in PHP to create a **constant**. A constant stores a value that cannot be changed after it has been defined.

- `define("Age", 20);` creates a constant named `Age`.
- `echo Age;` displays the value of the constant.
- The output is:

```text
20
```

---
## 02. If-Else Conditions

![If Else Conditions](./if-else%20conditions.png)

### Code

```php
// if-else conditions
$Age = 20;

if ($Age > 18)
    echo "Adult";
else
    echo "child";
```

### Explanation

`if-else` is a conditional structure used to execute different code depending on whether a condition is true or false.

- If `$Age > 18` is true, `"Adult"` is displayed.
- Otherwise, `"child"` is displayed.

For `$Age = 20`, the output is:

```text
Adult
```

---

## 03. Switch Statement

![Switch](./switch.png)

### Code

```php
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
```

### Explanation

A `switch` statement can be used to select one block of code from several possible cases.

In this example, `switch (true)` allows each `case` to contain a comparison:

- `$Marks >= 90` → Grade `A`
- `$Marks >= 80` → Grade `B`
- `$Marks >= 70` → Grade `C`
- `$Marks >= 60` → Grade `D`
- If none of the conditions are true → Grade `F`

The `break` statement stops the switch after a matching case is executed.

For:

```php
$Marks = 100;
```

the output is:

```text
A
```

---


## 04. Ternary Operator

![Ternary Operator](./Ternary%20Operator.png)

### Code

```php
// Ternary Operator
$fuel = 1;

echo $fuel < 1 ? "Low Tank" : "Full Thank";
```

### Explanation

The **ternary operator** is a short form of an `if-else` statement.

Its general syntax is:

```php
condition ? value_if_true : value_if_false;
```

In this example:

```php
$fuel < 1
```

is the condition.

- If the condition is `true`, `"Low Tank"` is displayed.
- If the condition is `false`, `"Full Thank"` is displayed.

Because `$fuel` is `1`, the condition `$fuel < 1` is false, so the output is:

```text
Full Thank
```

> **Note:** `"Full Thank"` in the screenshot is written with `Thank`. If the intended meaning is the fuel container, the more appropriate text is `"Full Tank"`.

---


## 05. While Loop

![While Loop](./while%20loop.png)

### Code

```php
// Loop Control Structure

// 1. while loop
$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}
```

### Explanation

A `while` loop executes a block of code **as long as the condition is true**.

- `$count = 1;` initializes the counter.
- `while ($count <= 5)` checks whether the counter is less than or equal to `5`.
- `echo $count . "<br>";` prints the current value.
- `$count++;` increases the value by `1`.

### Output

```text
1
2
3
4
5
```

---


## 06. Do-While Loop

![Do While Loop](./Do-while%20loop.png)

### Code

```php
// 2. Do-while loop
$count = 1;

do {
    echo $count . "<br>";
    $count++;
} while ($count < 5);
```

### Explanation

A `do-while` loop executes its code **at least once**, because the code block runs before the condition is checked.

- `$count = 1;` starts the counter.
- The `do` block prints the current value.
- `$count++;` increases the counter.
- `while ($count < 5)` checks the condition after execution.

### Output

```text
1
2
3
4
```

---


## 07. For Loop

![For Loop](./For%20loop.png)

### Code

```php
// 3. For loop
for ($count = 1; $count < 5; $count++) {
    echo $count . "<br>";
}
```

### Explanation

A `for` loop is commonly used when the number of repetitions is known or controlled by a counter.

The `for` statement contains three parts:

```php
for (initialization; condition; increment)
```

In this example:

- `$count = 1` → initialization
- `$count < 5` → condition
- `$count++` → increment

### Output

```text
1
2
3
4
```

---


## 08. Nested Loop

![Nested Loop](./Nested%20loop.png)

### Code

```php
// 4. Nested loop
for ($i = 1; $i <= 5; $i++) { // row loop

    for ($j = 1; $j <= 5; $j++) { // column loop

        echo "$i * $j = " . ($i * $j) . "<br>";
        // print the product of the row and column
    }

    echo "<br>";
}
```

### Explanation

A **nested loop** is a loop inside another loop.

- The outer loop uses `$i` and represents the rows.
- The inner loop uses `$j` and represents the columns.
- For every value of `$i`, the inner loop runs from `1` to `5`.
- `($i * $j)` calculates the multiplication result.
- `<br>` moves the output to a new line.

For example, part of the output will look like:

```text
1 * 1 = 1
1 * 2 = 2
1 * 3 = 3
1 * 4 = 4
1 * 5 = 5

2 * 1 = 2
2 * 2 = 4
2 * 3 = 6
2 * 4 = 8
2 * 5 = 10
```

This structure can be used to create multiplication tables and other row-and-column patterns.

---

## Summary

| Topic | Purpose |
|---|---|
| `define()` | Creates a constant |
| `if-else` | Makes a decision based on a condition |
| `switch` | Selects one case from multiple conditions |
| Ternary `? :` | Short form of an `if-else` condition |
| `while` | Repeats code while a condition is true |
| `do-while` | Executes code first, then checks the condition |
| `for` | Repeats code using initialization, condition, and increment |
| Nested loop | Places one loop inside another loop |




---

## Screenshot Files

The examples above are demonstrated using the following screenshots:

- `01 Define Function.png`
- `02 if-else conditions.png`
- `03 switch.png`
- `04 Ternary Operator.png`
- `05 while loop.png`
- `06 Do-while loop.png`
- `07 For loop.png`
- `08 Nested loop.png`





