<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <style>
        .form{
            margin: 10% 0 0 25%;
            float: left;
            width: 50%;
        }
        .input{
            padding: 1%;
            color: #777777;
            font-size: 14pt;
            float: left;
            width: 80%;
            margin-bottom: 1%;
        }
        .submit{
            padding: 1%;
            color: #fff;
            background-color: #B0E0E6;
            font-size: 14pt;
            float: left;
            width: 25%;
        }
        .welcome{
            color: #B0E0E6;
            font-size: 20pt;
            font-weight: 900;
        }
    </style>
</head>
<body>
    <div class="form">
        <span class="welcome"> LOGIN </span>
        <form action="login.php" method="post">
            <!--<input class="input" type="text" name="username" placeholder="username"><br>-->
            <input class="input" type="text" name="email" placeholder="email"><br>
            <input class="input" type="text" name="password" placeholder="password"><br>
            <input class="submit" type="submit" name="login" value="Login"><br>
            <br><br>
        </form>
        <a href="register.php" class="submit">daftar?</a>
    </div>    
</body>
</html>