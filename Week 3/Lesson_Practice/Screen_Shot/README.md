# Week 3 – PHP Arrays

This README explains the **four screenshots** included in this project. All examples are written in **PHP** and focus on arrays, multidimensional arrays, `foreach`, `is_array()`, `in_array()`, and `count()`.

## 1. Multidimensional Array

![Multidimensional array](01%20Multidimensional%20array.png)

### Code

```php
// creating multidimensional array
$info = array(
    array(10,20,"CA233","90.12"),
    array(123,"Mohamed Muse","CA233",90.12)
);

// display for each
foreach($info as $list)
    echo $list[0] , $list[1];
```

### Explanation

```php
$info = array(
    array(10,20,"CA233","90.12"),
    array(123,"Mohamed Muse","CA233",90.12)
);
```

- `$info` is a **multidimensional array** because the main array contains other arrays.
- There are two inner arrays:
  - `array(10, 20, "CA233", "90.12")`
  - `array(123, "Mohamed Muse", "CA233", 90.12)`
- Each inner array has indexes starting from `0`.
- For example, `$info[0][0]` is `10`, while `$info[1][1]` is `"Mohamed Muse"`.

### `foreach`

```php
foreach($info as $list)
```

- `foreach` goes through each inner array.
- During the first iteration, `$list` contains:
  ```php
  array(10,20,"CA233","90.12")
  ```
- During the second iteration, `$list` contains:
  ```php
  array(123,"Mohamed Muse","CA233",90.12)
  ```

Then:

```php
echo $list[0], $list[1];
```

displays the first two elements of each inner array.

**Note:** `echo` does not automatically add a space or a new line, so the output may appear joined together unless additional formatting such as `<br>` is used.

---

## 2. Two-Dimensional Numerical Indexed Array

![Two-dimensional numerical indexed array](02%20Two-dimensional%20numerical%20indexed%20array.png)

### Code

```php
// Two-dimensional numerical indexed array

$student = array(
    array("Mohamed", 1980, "Hodan", "0608124390"),
    array("Maryam", 2008, "Yaaqshiid", "0608124391"),
    array("Hassan", 1987, "Shangaani", "0608124392")
);

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th>Index</th>";
echo "<th>Name</th>";
echo "<th>Year Of Birth</th>";
echo "<th>Address</th>";
echo "<th>Phone Number</th>";
echo "</tr>";

foreach ($student as $index => $s) {
    echo "<tr>";
    echo "<td>$index</td>";
    echo "<td>$s[0]</td>";
    echo "<td>$s[1]</td>";
    echo "<td>$s[2]</td>";
    echo "<td>$s[3]</td>";
    echo "</tr>";
}

echo "</table>";
```

### Explanation

`$student` is a **two-dimensional numerical indexed array**.

There are three student records, and each record is a separate array:

```php
array("Mohamed", 1980, "Hodan", "0608124390")
array("Maryam", 2008, "Yaaqshiid", "0608124391")
array("Hassan", 1987, "Shangaani", "0608124392")
```

The indexes inside each student record are:

| Index | Meaning |
|---:|---|
| `0` | Name |
| `1` | Year of Birth |
| `2` | Address |
| `3` | Phone Number |

For example:

```php
$student[0][0]
```

returns:

```text
Mohamed
```

While:

```php
$student[1][2]
```

returns:

```text
Yaaqshiid
```

### `foreach ($student as $index => $s)`

```php
foreach ($student as $index => $s)
```

- `$index` contains the index of the current student record: `0`, `1`, or `2`.
- `$s` contains the current student array.
- Therefore:
  - `$s[0]` is the name.
  - `$s[1]` is the year of birth.
  - `$s[2]` is the address.
  - `$s[3]` is the phone number.

### HTML Table

This code:

```php
echo "<table border='1' cellpadding='10'>";
```

starts an HTML table.

The `<tr>` element creates a table row, while `<th>` creates table headers:

```text
Index | Name | Year Of Birth | Address | Phone Number
```

The `<td>` elements inside the `foreach` loop display the information for each student.

---

## 3. `is_array()` Function

![is_array function](03%20is_array%20fuction.png)

### Code

```php
// checks whether the variable contains an array using the is_array() function

$info = array(
    10,
    "Mohamed",
    "Muse",
    90
);

if(is_array($info))
{
    echo "waa soo helay";
}else{
    echo "masoo helin";
}
```

### Explanation

First, an array is created:

```php
$info = array(
    10,
    "Mohamed",
    "Muse",
    90
);
```

Therefore, `$info` is an array.

### `is_array()`

```php
is_array($info)
```

The `is_array()` function checks whether the given variable is an array.

- If `$info` is an array → `true`
- If `$info` is not an array → `false`

This code:

```php
if(is_array($info))
```

means:

> If `$info` is an array, execute the code inside the `if` statement.

In this example, the condition is true, so the following message is displayed:

```text
waa soo helay
```

If `$info` were not an array, the `else` block would run:

```text
masoo helin
```

### Another Example

```php
$name = "Mohamed";

if (is_array($name)) {
    echo "It is an array";
} else {
    echo "It is not an array";
}
```

Output:

```text
It is not an array
```

---

## 4. Finding a Specific Value in a Multidimensional Array

![Specific value in multidimensional array](04%20Multidimensional%20array%20for%20specific%20value.png)

### Code

```php
// checks for a specific value in a multidimensional array.

$info = array(
    10,
    "Mohamed",
    "Muse",
    90
);

$multi = array(
    array(10, 90, 100),
    array(35, 90, 60)
);

if (in_array(90, $multi[1]))
{
    echo "The size of array \$info is " . count($info);
}
```

### Explanation

There are two arrays in this example:

```php
$info = array(
    10,
    "Mohamed",
    "Muse",
    90
);
```

This is a **one-dimensional array** containing four elements.

The second array is:

```php
$multi = array(
    array(10, 90, 100),
    array(35, 90, 60)
);
```

This is a **two-dimensional / multidimensional array**.

### `in_array()`

This code:

```php
in_array(90, $multi[1])
```

searches for the value `90` inside:

```php
$multi[1]
```

`$multi[1]` is:

```php
array(35, 90, 60)
```

Since `90` exists in this array, `in_array()` returns `true`.

Therefore:

```php
if (in_array(90, $multi[1]))
```

will execute the code inside the `if` statement.

### `count()`

The code then uses:

```php
count($info)
```

The `$info` array contains four elements:

```text
10
Mohamed
Muse
90
```

Therefore:

```php
count($info)
```

returns:

```text
4
```

The output is:

```text
The size of array $info is 4
```

### Important Point

It is important to understand that:

```php
in_array(90, $multi[1])
```

does not search the entire `$multi` array directly. It searches the **inner array at index `1`**.

```php
$multi[1] = array(35, 90, 60);
```

Therefore, `90` is found.

---

# Quick Summary

| Function / Concept | What It Does |
|---|---|
| `array()` | Creates an array |
| Multidimensional array | An array that contains other arrays |
| `foreach` | Loops through the elements of an array |
| `is_array()` | Checks whether a variable is an array |
| `in_array()` | Searches for a specific value inside an array |
| `count()` | Counts the number of elements in an array |
| `$array[0]` | Accesses the element at index `0` |
| `$array[1][2]` | Accesses an element inside a two-dimensional array |

## Conclusion

The screenshots demonstrate how PHP arrays can be created, accessed, checked, searched, and displayed:

1. **Multidimensional arrays** are used to organize data inside arrays within arrays.
2. **Two-dimensional arrays** are useful for structured data such as student records.
3. **`foreach`** is used to loop through array data.
4. **`is_array()`** checks whether a variable is an array.
5. **`in_array()`** searches for a specific value in an array.
6. **`count()`** counts the number of elements in an array.

