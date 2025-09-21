<!-- PHP command TIDAK CASE SENSITIVE -->
<?php
    ECHO "PENS JOSS <br>";
    EcHo "PENS JOSS <br>";
    echo "PENS JOSS <br>";
?>

<br>
<br>

<!-- PHP nama variable case sensitive -->
<?php
    $color="green";
    echo "My House is $color <br>";
    echo "My bike is $COLOR <br>";
    echo "My basikal is $CoLor <br>";
?>

<br>
<br>

<!-- VARIABLE $GLOBALS pada PHP -->
<?php
    $x=42;
    $y=73;

    function addition(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z;
?>

<br>
<br>

<!-- Variable $_SERVER pada PHP -->
<?php
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['SERVER_SOFTWARE'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo $_SERVER['SERVER_PORT'];
?>

<?php
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
?>
<br>
<br>

<!-- Penanganan form menggunakan method GET -->
<form action="welcome_get.php" method="get">
    Name: <input type="text" name="name"><br>
    E-Mail: <input type="email" name="email">
    <input type="submit" >
</form>


<br>
<br>

<!-- Penanganan from menggunakan method POST -->
<form action="welcome_post.php" method="post">
    name: <input type="name" name="name"> <br>
    E-Mail: <input type="email" name="email">
    <input type="submit">
</form>

<br>
<br>



<br>
<br>

<!-- VALIDASI FORM -> REQUIRED FIELD -->

<?php
    // $name = $email = $gender = $comment = $website = "";

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     $name = test_input($_POST["nama"]);
    //     $email = test_input($_POST["email"]);
    //     $gender = test_input($_POST["gender"]);
    //     $comment = test_input($_POST["comment"]);
    //     $website = test_input($_POST["website"]);
    // }
    // function test_input($data){
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     // $data = htmlspecialchars($data);
    //     return $data;
    // }
?>

<style>
    .error {color: #FF0000;}
</style>    
<?php
$namaErr = $emailErr = $genderErr = $websiteErr = "";
$nama = $email = $gender = $website = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $namaErr = "Name is required";
  } else {
    $nama = test_input($_POST["nama"]);
  }

  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
};

function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!-- Menampilkan form -->
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="nama" value="<?php echo $nama;?>">
    <span class="error">* <?php echo $namaErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error">* <?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    Gender: 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    echo "<h2>Your Input:</h2>";
    echo $nama;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?> 


<!-- VALIDASI FORM -> REQUIRED FIELD END -->

<br>
<br>

<!-- Include File -->
<!-- footer -->
<h1>Welcome To My Page</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime iusto voluptas similique assumenda debitis delectus laborum quas nesciunt harum beatae ad veritatis, cupiditate rem mollitia ipsa odio repudiandae ab vel!</p>
<?php include 'footer.php'; ?>

<!-- variabel -->
<h1>Welcome to my home</h1>
<?php include 'variabel.php'; ?>
<p>My car is <?php echo $car; ?> and the color is <?php echo $color; ?>.</p>


<br>
<br>

<!-- Read FIle -->
<?php
    $myfile=fopen("pens.txt","r") or die("Unable to open file!");
    echo fread($myfile,filesize("pens.txt"));
    fclose($myfile);
?>

<br>
<br>

<!-- Membuat FIle -->
<?php
    $myfile=fopen("newfile.txt","w") or die("Unable to open file!");
    $txt="POLITEKNIK ELEKTRONIKA NEGERI SURABAYA JOSJIS\n";
    fwrite($myfile,$txt);
    $txt="Fahmi Ilham Bagaskara\n";
    fwrite($myfile,$txt);
    fclose($myfile);
?>

<br>
<br>

<!-- upload file -->
<h1>UPLOAD FILE BEBAS</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="Submit" name="submit">
</form>

<br>
<br>

<!-- Upload dibatasi tipe dan ukuran file -->
<h1>UPLOAD FILE DIBATASI</h1>
<form action="uploadDibatasi.php" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="Submit" name="submit">
</form>

<br>
<br>

<!-- Upload dibatasi tipe dan ukuran file -->
<h1>UPLOAD FILE DISIMPAN</h1>
<form action="uploadSave.php" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="Submit" name="submit">
</form>