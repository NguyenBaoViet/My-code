<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            text-align: center;
        }
        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <table cellpadding="5" cellspacing="10" text-align="center">
        <h3>Login Form using session and cookies with Remember Me</h3>
        <form action="validate.php" method="post" name = "mainform" id = "login">
            <tr>
                <th id="emeail">Email</th>
                <td>
                    <input type = "text" id="email" name = "email">
                </td>
            </tr>
            <tr>
                <th id="password">Password</th>
                <td>
                    <input type = "password" id="password" name = "password">
                </td>
            </tr>
            <tr>
                <td colspan = "2" text-align = "center">
                    <input type = "checkbox" id="remember" name = "remember" value = "1">
                    Remember me
                </td>
            </tr>
            <tr>
                <td colspan = "2" text-align = "right">
                    <input type = "submit" value = "Login" name = "login">
                </td>
            </tr>
        </form>    
    </table>
    <?php
        if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
            $email = $_COOKIE['email'];
            $pass  = $_COOKIE['password'];
            if ($_COOKIE['remember'] == 1) {
                $str = "
                    <script>
                        x = document.getElementById('remember');
                        document.getElementById(`email`).value = '$email';
                        document.getElementById(`password`).value = '$pass';
                        x.checked = true;
                    </script>";
            } else {$str = "";}
            echo $str;
        }
    ?>
</body>
</html>