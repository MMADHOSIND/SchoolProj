<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
   <body>
</head>
<body style="background-image: url('1.jpg');">
    <div class="fdiv">
        <form action="actionSignin.php" class="fback" method="POST" name="form">
            <div class="title">Sign in</div>
            <div>
                <p>Name</p>
                <input type="text" name="Name" minlength="2" maxlength="20" required>
                
                <p>Username</p>
                <input type="text" name="UserName"  maxlength="20" required>
                <p>Password</p>
                <input type="password" class="pas" name="Pass" minlength="8" maxlength="20" required>
                <p>Email</p>
                <input type="Email" name="Email">
            </div>
            <button type="submit" >Sign in</button>
        </form>
    </div>
   
</body>
</html>