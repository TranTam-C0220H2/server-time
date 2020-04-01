<!DOCTYPE HTML>
<html>
<head>
    <title></title>
</head>
<body>
<div style="border: cornflowerblue solid 2px; width: 250px">
    <form method="post">
        <fieldset style="width: 200px; margin: auto; margin-top: 9px">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="username">
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <input type="submit">
        </fieldset>
    </form>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password == 'admin') {
        echo '<h2>WelCome <span style="color: red">' . $username . '</span> to website</2>';
    } else {
        echo '<h2 style="color: red">Login Error</h2>';
    }
}
?>
</body>
</html>
