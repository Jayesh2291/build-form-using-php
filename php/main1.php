<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
        }
    </style>
    <script src="login.js"></script>
</head>

<body>
    <img src="image2.jpg" alt="">
    <h2>
        <center>Login Form</center>
    </h2>
    <div style="text-align: center;">

        <form action="login.php" method="post">
            <form method="POST" action="process_login.php" onsubmit="return validateForm()">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br><br>
                <input type="submit" value="Login">
                <input type="reset" value="Reset">


            </form>
            <br>

</body>
</div>

</html>