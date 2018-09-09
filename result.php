<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// define variables and set to empty values
$name = $surname = $pass = $bday = $gender = $address ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  //$name = trim($_POST["name"]);
  $surname = test_input($_POST["surname"]);
  $pass  = test_input($_POST["pass"]);
  $bday = test_input($_POST["bday"]);
  $gender = test_input($_POST["gender"]);
  $address = test_input($_POST["address"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name."<br>".$surname."<br>".$pass."<br>".$bday."<br>".$gender."<br>".$address."<br>";

//insert data
$sql = "INSERT INTO dataRe (name, surname, pass, bday, gender,address) 
VALUES ('$name', '$surname', '$pass', '$bday', '$gender','$address')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>