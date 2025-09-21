<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation Example</title>
    <style>
        .error {color: #FF0000;}
        body {font-family: Arial, sans-serif; margin: 20px;}
        form {background: #f4f4f4; padding: 20px; border-radius: 5px;}
        input, textarea {padding: 5px; margin: 5px 0;}
        input[type="submit"] {background: #007cba; color: white; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer;}
    </style>
</head>
<body>

<?php
$namaErr = $emailErr = $genderErr = $websiteErr = "";
$nama = $email = $gender = $website = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pengecekan required field dan validasi nama
    if (empty($_POST["nama"])) {
        $namaErr = "Name is required";
    } else {
        $nama = test_input($_POST["nama"]);
        // Validasi nama: hanya huruf dan spasi yang diperbolehkan
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nama)) {
            $namaErr = "Only letters and white space allowed";
        }
    }

    // Pengecekan validasi email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Validasi format email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Pengecekan validasi URL/website
    if (empty($_POST["website"])) {
        $websiteErr = "Website is required";
    } else {
        $website = test_input($_POST["website"]);
        // Validasi format URL
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL format";
        }
    }

    // Pengecekan validasi komentar
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
        // Validasi komentar: tidak boleh mengandung karakter khusus berbahaya
        if (strlen($comment) > 500) {
            $comment = substr($comment, 0, 500) . "...";
        }
    }

    // Pengecekan validasi jenis kelamin
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
        // Validasi gender: hanya male atau female yang diperbolehkan
        if (!in_array($gender, ["male", "female"])) {
            $genderErr = "Please select a valid gender";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nama">Name:</label>
    <input type="text" name="nama" id="nama" value="<?php echo $nama;?>" placeholder="Enter your full name">
    <span class="error">* <?php echo $namaErr;?></span>
    <br><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" value="<?php echo $email;?>" placeholder="Enter your email address">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>

    <label for="website">Website:</label>
    <input type="url" name="website" id="website" value="<?php echo $website;?>" placeholder="https://www.example.com">
    <span class="error">* <?php echo $websiteErr;?></span>
    <br><br>

    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" rows="5" cols="40" placeholder="Enter your comments (max 500 characters)"><?php echo $comment;?></textarea>
    <br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="female" id="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>
    <label for="female">Female</label>
    <input type="radio" name="gender" value="male" id="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>
    <label for="male">Male</label>
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($namaErr) && empty($emailErr) && empty($websiteErr) && empty($genderErr)) {
    echo "<div style='background: #d4edda; color: #155724; padding: 15px; margin-top: 20px; border-radius: 5px;'>";
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<h3>Your Input:</h3>";
    echo "<strong>Name:</strong> " . $nama . "<br>";
    echo "<strong>Email:</strong> " . $email . "<br>";
    echo "<strong>Website:</strong> " . $website . "<br>";
    echo "<strong>Comment:</strong> " . $comment . "<br>";
    echo "<strong>Gender:</strong> " . $gender . "<br>";
    echo "</div>";
}
?>

</body>
</html>