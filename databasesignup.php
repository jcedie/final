<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_tbl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


if (strlen($password) < 8 || !preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
    echo "<script>alert('Password must be at least 8 characters long and contain both letters and numbers!'); window.location='signup.php';</script>";
    exit();
}

if ($password !== $confirmpassword) {
    echo "<script>alert('Passwords do not match!'); window.location='signup.php';</script>";
    exit();
}

$check_user_sql = $conn->prepare("SELECT * FROM info WHERE username = ?");
$check_user_sql->bind_param("s", $username);
$check_user_sql->execute();
$result = $check_user_sql->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Some Data already exists!'); window.location='signup.php';</script>";
    $check_user_sql->close();
    $conn->close();
    exit();
}

$check_user_sql->close();

$check_pass_sql = $conn->prepare("SELECT * FROM info WHERE password = ?");
$check_pass_sql->bind_param("s", $password);
$check_pass_sql->execute();
$result = $check_pass_sql->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Password already used by another username!'); window.location='signup.php';</script>";
    $check_pass_sql->close();
    $conn->close();
    exit();
}

$check_pass_sql->close();

$insert_sql = $conn->prepare("INSERT INTO info (fullname, username, email, phonenumber, password) VALUES (?, ?, ?, ?, ?)");
$insert_sql->bind_param("sssss", $fullname, $username, $email, $phonenumber, $password);

if ($insert_sql->execute() === TRUE) {
    echo "<script>alert('Registration successful!'); window.location='LogIn.php';</script>";
} else {
    echo "Error: " . $insert_sql->error;
}

$insert_sql->close();
$conn->close();

?>
