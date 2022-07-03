<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="registerform.css">

</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Registration Form</h3>
            <input type="text" name="name" required placeholder="Enter your Name">
            <br>
            <br>
            <input type="text" name="email" required placeholder="Enter your Email">
            <br>
            <br>
            <input type="text" name="password" required placeholder="Enter your Password">
            <br>
            <br>
            <input type="text" name="cpassword" required placeholder="Confirm Password">
            <br>
            <br>
            <select name="user_type" id="user">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <br>
            <br>
            <input type="submit" name="submit" value="Register Now!" class="btn">
            <p>Already have an account? <a href="login.php">Login </a></p>
        </form>
    </div>
    
</body>
</html>