<?php
include("config1.php");


if(isset($_POST['login_user']))
{
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT * FROM test WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db,$sql);
    $active = $row['active'];
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        session_register("username");
        $_SESSION['login_user'] = $username;

        header("location: index.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
    <link rel="stylesheet" type="text/css" href="static/css/login-style.css">
</head>
<body>

<div class="header">
    <h2>Login</h2>
</div>
<form method="post" action="login_page.php">
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>
</form>
</body>
</html>