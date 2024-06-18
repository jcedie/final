<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=deivce-width, initial-scale=1.0">
    <title>Sign up Now!</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="databasesignup.php" method="post">
            <h1>Sign up</h1>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                    <i class='bx bxs-user' ></i>
                </div>
                <div class="input-field">
                    <input type="text" id="username" name="username" placeholder="Username" required>
                    <i class='bx bxs-user' ></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <i class='bx bxl-gmail' ></i>
                </div>
                <div class="input-field">
                    <input type="text" maxlength="11" id="phonenumber" name="phonenumber" placeholder="Phone Number" required>
                    <i class='bx bxs-phone' ></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="input-field">
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
            </div>
            <label><input type="checkbox" required>I hereby declare that the information above is true and correct. </label>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p> Already have an account? <a href="LogIn.php"> Log in</a></p>
            </div>
        </form>
    </div>
</body>


</html>