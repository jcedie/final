<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_tbl";
    
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM info WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: home.html"); 
        exit();
    } else {
        echo "<script>alert('Invalid username or password!'); window.location='login.php';</script>";
    }
}

$conn->close();

?>
