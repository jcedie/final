<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=deivce-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="wrapper">
    <form action="databaselogin.php" method="post">
        <h1>Log In</h1>
        <div class="input-box">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox"> Remember me</label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="sumbit" class="btn">Log in</button>
        
        <div class="register-link">
            <p> Don't have an account? <a href="SignUp.php"> Register</a></p>
        </div>
    </form>
</div>
</body>
</html>