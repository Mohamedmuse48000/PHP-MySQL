# PHP Arrays – Lesson 2

This README explains the PHP array examples shown in the screenshots.

## 1. Creating a Numeric Array

A numeric array uses numeric indexes such as `0`, `1`, `2`, etc.

![Creating Array](01-creating-array.png)

### Code

```php
<?php

// Creating an empty numeric array
$names = array();
```

### Explanation

- `array()` creates an empty PHP array.
- `$names` is the variable that stores the array.
- Numeric indexes normally start from `0`.

---

## 2. Initializing the Array

Values can be added to the array by assigning them to indexes.

![Initializing Array](02-initializing-array.png)

### Code

```php
<?php

$names[0] = "CA233";
$names[1] = 123;
$names[] = 12.34;

echo $names[0] . "<br>";
echo $names[1] . "<br>";
echo $names[2] . "<br>";
```

### Explanation

- `$names[0]` stores the string `"CA233"`.
- `$names[1]` stores the integer `123`.
- `$names[]` adds a new value automatically using the next available index.
- `<br>` creates a line break in HTML.

The resulting indexes are:

| Index | Value |
|---|---|
| `0` | `CA233` |
| `1` | `123` |
| `2` | `12.34` |

---

## 3. Displaying an Array with `var_dump()`

`var_dump()` displays detailed information about a variable, including its type, length, indexes, and values.

![var_dump](03-var-dump.png)

### Code

```php
<?php

var_dump($names);
```

### Explanation

`var_dump()` is useful when debugging because it shows both the **data type** and the **value** stored in the array.

For example, an integer is shown differently from a string or a floating-point number.

---

## 4. Displaying an Array with the `<pre>` Tag

The `<pre>` HTML tag keeps spacing and line breaks, making array output easier to read.

![Pre Tag](04-pre-tag.png)

### Code

```php
<?php

echo "<pre>";
print_r($names);
echo "</pre>";

echo "<br>";

echo "<pre>";
var_dump($names);
echo "</pre>";
```

### Explanation

- `print_r()` displays the contents of an array in a readable format.
- `var_dump()` displays more detailed type information.
- `<pre>` preserves formatting in the browser.

### `print_r()` vs `var_dump()`

| Function | Main purpose |
|---|---|
| `print_r()` | Readable display of array contents |
| `var_dump()` | Detailed debugging information, including data types |

---

## 5. Displaying a Numeric Array with a `for` Loop

A `for` loop can be used to visit every numeric index in the array.

![For Loop](05-for-loop.png)

### Code

```php
<?php

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}
```

### Explanation

- `$i = 0` starts from the first index.
- `$i < count($names)` continues while `$i` is smaller than the number of elements.
- `$i++` increases the index by one after every iteration.
- `$names[$i]` gets the current value.

`count($names)` returns the number of elements in the array.

---

## 6. Creating an Associative Array

An associative array uses **named keys** instead of only numeric indexes.

![Associative Array](06-associative-array.png)

### Code

```php
<?php

$info = array(
    "id"     => "101",
    "name"   => "mohamed muse ahmed",
    "age"    => 20,
    "address" => "hodan district",
    "status" => "single",
    "weight" => 160.5
);
```

### Explanation

Each value is connected to a descriptive key:

- `id` → `"101"`
- `name` → `"mohamed muse ahmed"`
- `age` → `20`
- `address` → `"hodan district"`
- `status` → `"single"`
- `weight` → `160.5`

The `=>` operator connects a key to its value.

---

## 7. Displaying an Associative Array

The associative array can be displayed with `print_r()` and `var_dump()`.

![Display Associative Array](07-display-associative-array.png)

### Code

```php
<?php

echo "<pre>";

echo "Information about the person:<br>";

print_r($info);

var_dump($info);

echo "</pre>";
```

### Explanation

- `print_r($info)` displays the keys and values in a readable way.
- `var_dump($info)` provides additional type information.
- `<pre>` makes the output easier to read in the browser.

---

## 8. Displaying an Associative Array with a `for` Loop

For an associative array, we can first get its keys using `array_keys()` and then use those keys in a loop.

![Associative Array For Loop](08-associative-for-loop.png)

### Code

```php
<?php

echo "<h3>Using for loop</h3><br>";

$keys = array_keys($info);

for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];

    echo $key . ": " . $info[$key] . "<br>";
}
```

### Explanation

1. `array_keys($info)` creates an array containing all keys from `$info`.
2. The `for` loop goes through the keys one by one.
3. `$key = $keys[$i]` stores the current key.
4. `$info[$key]` retrieves the value belonging to that key.

For example:

```text
name: mohamed muse ahmed
age: 20
address: hodan district
```

---

## Complete Example

The following example combines the main ideas from the screenshots:

```php
<?php

// Numeric array
$names = array();

$names[0] = "CA233";
$names[1] = 123;
$names[] = 12.34;

echo "<h3>Numeric Array</h3>";

echo "<pre>";
print_r($names);
echo "</pre>";

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}

// Associative array
$info = array(
    "id"      => "101",
    "name"    => "mohamed muse ahmed",
    "age"     => 20,
    "address" => "hodan district",
    "status"  => "single",
    "weight"  => 160.5
);

echo "<h3>Associative Array</h3>";

echo "<pre>";
print_r($info);
echo "</pre>";

$keys = array_keys($info);

for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    echo $key . ": " . $info[$key] . "<br>";
}
```

## Important PHP Functions Used

| Function / Syntax | Purpose |
|---|---|
| `array()` | Creates an array |
| `$array[] = value` | Adds a value using the next numeric index |
| `print_r()` | Displays array contents in a readable format |
| `var_dump()` | Displays detailed value and type information |
| `count()` | Returns the number of elements |
| `array_keys()` | Returns the keys of an array |
| `for` | Repeats code while a condition is true |
| `=>` | Connects a key to a value in an associative array |
| `<pre>` | Preserves formatting in HTML |

