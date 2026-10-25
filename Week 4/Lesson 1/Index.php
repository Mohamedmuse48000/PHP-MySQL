<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Textbox, Password, Radio, Checkbox and Textarea</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 50px;
        }

        .container {
            width: 400px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #ddd;
        }

        h2 {
            text-align: center;
            color: #444;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 8px;
            font-size: 18px;
        }

        input[type="text"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #aaa;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Radio buttons */
        .gender {
            margin-top: 15px;
        }

        .gender label {
            display: inline;
            margin-right: 20px;
            font-size: 16px;
        }

        /* Checkbox fields */
        .faculties {
            margin-top: 20px;
        }

        .faculties label {
            display: block;
            font-size: 16px;
            margin-top: 8px;
        }

        /* Textarea */
        .comment {
            margin-top: 20px;
        }

        input[type="reset"],
        input[type="submit"] {
            margin-top: 20px;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        
        }

        input[type="reset"] {
            background-color: #ddd;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        .result {
            margin-top: 25px;
            padding: 15px;
            background-color: #eee;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>Registration Form</h2>

        <!-- Form Data -->
        <form method="post">

            <!-- Textbox -->
            <label for="name">Enter Full Name</label>

            <input type="text" id="name" name="name">


            <!-- Password -->
            <label for="pass">Enter Password</label>

            <input type="password" id="pass" name="pass">


            <!-- Radio Button Fields -->
            <div class="gender">

                <label>
                    <input type="radio" name="sex" value="male">
                    Male
                </label>

                <label>
                    <input type="radio" name="sex" value="female">
                    Female
                </label>

            </div>


            <!-- Checkbox Fields -->
            <div class="faculties">

                <label>
                    <input type="checkbox"
                           name="faculties[]"
                           value="engineering">
                    Engineering
                </label>

                <label>
                    <input type="checkbox"
                           name="faculties[]"
                           value="medicine">
                    Medicine
                </label>

                <label>
                    <input type="checkbox"
                           name="faculties[]"
                           value="computer sciences">
                    Computer Sciences
                </label>

            </div>


            <!-- Textarea -->
            <div class="comment">

                <label for="comment">Enter Comment</label>

                <textarea
                    name="comment"
                    id="comment"
                    cols="30"
                    rows="6"></textarea>

            </div>


            <!-- Buttons -->
            <input type="reset" value="Reset form">

            <input type="submit"
                   name="submit"
                   value="Register">

        </form>


        <?php

        if (isset($_POST['submit'])) {

            echo "<div class='result'>";

            // Full Name
            echo "User name: " . $_POST['name'];

            // Password
            echo "<br>Password: " . $_POST['pass'];


            // Radio Button
            if (!empty($_POST['sex'])) {

                echo "<br>Sex: " . $_POST['sex'];

            }


            // Checkbox
            if (!empty($_POST['faculties'])) {

                echo "<br>Faculties:";

                foreach ($_POST['faculties'] as $faculty) {

                    echo "<br>" . $faculty;

                }
            }


            // Textarea
            if (!empty($_POST['comment'])) {

                echo "<br>Comment: " . $_POST['comment'];

            }


            echo "</div>";
        }

        ?>

    </div>

</body>

</html>