<?php

$message = "";

if(isset($_POST['signup'])){

    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $message = "Account created successfully for <b>$fullname</b>!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sign Up</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    overflow:hidden;
}

/* Animated Background */

.circle{
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    animation:float 8s infinite ease-in-out;
}

.circle:nth-child(1){
    width:250px;
    height:250px;
    top:-80px;
    left:-80px;
}

.circle:nth-child(2){
    width:180px;
    height:180px;
    bottom:-50px;
    right:-50px;
    animation-delay:2s;
}

.circle:nth-child(3){
    width:120px;
    height:120px;
    top:20%;
    right:15%;
    animation-delay:4s;
}

@keyframes float{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-25px);
    }
}

.container{
    width:100%;
    max-width:430px;
    padding:20px;
    position:relative;
    z-index:10;
}

.card{
    background:rgba(255,255,255,.1);
    backdrop-filter:blur(15px);
    border:1px solid rgba(255,255,255,.2);
    border-radius:25px;
    padding:40px;
    box-shadow:0 10px 40px rgba(0,0,0,.3);
    animation:slideUp .8s ease;
}

@keyframes slideUp{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.logo{
    text-align:center;
    color:white;
    font-size:32px;
    font-weight:700;
    margin-bottom:10px;
}

.subtitle{
    text-align:center;
    color:#ddd;
    margin-bottom:30px;
    font-size:14px;
}

.input-group{
    margin-bottom:18px;
}

.input-group input{
    width:100%;
    padding:14px 18px;
    border:none;
    outline:none;
    border-radius:12px;
    background:rgba(255,255,255,.15);
    color:white;
    font-size:15px;
    transition:.3s;
}

.input-group input::placeholder{
    color:#ddd;
}

.input-group input:focus{
    background:rgba(255,255,255,.25);
    transform:scale(1.02);
}

.btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:linear-gradient(135deg,#00c6ff,#0072ff);
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(0,114,255,.4);
}

.login-link{
    text-align:center;
    margin-top:20px;
    color:white;
    font-size:14px;
}

.login-link a{
    color:#00c6ff;
    text-decoration:none;
    font-weight:600;
}

.success{
    background:rgba(0,255,127,.15);
    border:1px solid rgba(0,255,127,.4);
    color:#7CFFB2;
    padding:12px;
    border-radius:10px;
    margin-bottom:20px;
    text-align:center;
}

</style>

</head>

<body>

<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>

<div class="container">

    <div class="card">

        <div class="logo">Create Account</div>

        <div class="subtitle">
            Join our platform today
        </div>

        <?php if($message): ?>
            <div class="success">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form method="POST">

            <div class="input-group">
                <input type="text" name="fullname" placeholder="Full Name" required>
            </div>

            <div class="input-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" name="signup" class="btn">
                Sign Up
            </button>

        </form>

        <div class="login-link">
            Already have an account?
            <a href="admin.php">Login</a>
        </div>

    </div>

</div>

</body>
</html>