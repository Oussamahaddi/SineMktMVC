<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Itim&display=swap" rel="stylesheet">
    <!--style.css-->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/login.css">
    <title>Login</title>
</head>

<body class="login_body" style="overflow: unset;">

    <div class="logo">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>/index"><img src="<?php echo URLROOT; ?>/assets/logo/black logo.png" alt="" width="30px" class="logo"></a>
    </div>

    <div class="login">
        
        <form action="<?php echo URLROOT; ?>/Authentification/login" method="POST">
            <div class="text-1">
                <h1>ACOUNT LOGIN</h1>
            </div>
            <div class="us">
                <label for="usernam">Email</label>
                <input type="email" name="Email" value="<?= $data['Email'] ?>" placeholder="Enter email" id="usernam">
                
                <!-- error message if email empty or not found -->
                <span style='color:red; padding: .5rem; border-radius: 3px;'><?php echo $data['Email_err'] ?></span>
            </div>
            <div class="ps">
                <label for="password">Password</label>
                <input type="password" name="Password" placeholder="Password" id="password"> <br>
                
                <!-- error message if email empty or not found -->
                <span style='color:red; padding: .5rem; border-radius: 3px;'><?php echo $data['Password_err'] ?></span>
            </div>
            <span style='color:red; padding: .5rem; border-radius: 3px;'><?php echo $data['Email_Password_err'] ?></span>
            <div class="go">
                <input class="ok" type="submit">
            </div>
            <div class="back">
                <a href="<?= URLROOT; ?>"><i class="fa-solid fa-arrow-left-long"></i><li class="Back">Back To Home</li></a>
            </div>
        </form>
        
    </div>


</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
</html>