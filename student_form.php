<!DOCTYPE html>
<html>

<head>
    <title>Student Registration</title>
</head>

<body>

    <h2>Student Registration Form</h2>

    <?php

    $name = "";
    $email = "";
    $age = "";
    $gender = "";

    $nameErr = "";
    $emailErr = "";
    $ageErr = "";
    $genderErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Validate Name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = trim($_POST["name"]);
            $name = htmlspecialchars($name);
        }

        // Validate Email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = trim($_POST["email"]);
            $email = htmlspecialchars($email);
        }

        // Validate Age
        if (empty($_POST["age"])) {
            $ageErr = "Age is required";
        } elseif (!is_numeric($_POST["age"])) {
            $ageErr = "Age must be a number";
        } else {
            $age = htmlspecialchars($_POST["age"]);
        }

        // Validate Gender
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = htmlspecialchars($_POST["gender"]);
        }
    }

    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Name:
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span><?php echo $nameErr; ?></span>
        <br><br>

        Email:
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span><?php echo $emailErr; ?></span>
        <br><br>

        Age:
        <input type="text" name="age" value="<?php echo $age; ?>">
        <span><?php echo $ageErr; ?></span>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female

        <span><?php echo $genderErr; ?></span>
        <br><br>

        <input type="submit" value="Register">
        <input type="reset" value="Clear">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (
            $nameErr == "" &&
            $emailErr == "" &&
            $ageErr == "" &&
            $genderErr == ""
        ) {

            echo "<h3>Registration Successful!</h3>";

            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Age: " . $age . "<br>";
            echo "Gender: " . $gender . "<br>";
        }
    }

    ?>

</body>

</html>