<?php
session_start();

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username === "admin" && $password === "12345"){

        $_SESSION["admin"] = "admin";

        header("Location: adminform.php");
        exit();

    }else{

        $error = "Invalid username or password!";

    }

}
?>

<!DOCTYPE html>
<html>

<head>

<title>JOESHEMAR Resort | Admin Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
height:100vh;
overflow:hidden;
background:#071d2b;
color:white;
}

.bg-video{
position:fixed;
width:100%;
height:100%;
object-fit:cover;
z-index:-3;
}

.overlay{
position:fixed;
inset:0;
background:rgba(0,0,0,.65);
z-index:-2;
}

nav{
position:fixed;
top:20px;
left:50%;
transform:translateX(-50%);
width:92%;
padding:15px 30px;
display:flex;
justify-content:space-between;
align-items:center;
background:rgba(255,255,255,.08);
backdrop-filter:blur(15px);
border:1px solid rgba(255,255,255,.15);
border-radius:20px;
z-index:999;
}

.logo{
display:flex;
align-items:center;
gap:15px;
}

.logo img{
height:85px;
width:auto;
object-fit:contain;
filter:drop-shadow(0 0 15px rgba(0,245,212,.4));
}

.logo-text{
display:flex;
flex-direction:column;
justify-content:center;
line-height:1;
}

.logo-text h2{
font-size:28px;
font-weight:700;
letter-spacing:2px;
color:#fff;
}

.logo-text span{
margin-top:5px;
font-size:14px;
letter-spacing:4px;
color:#00f5d4;
}

.menu{
display:flex;
gap:25px;
}

.menu a{
text-decoration:none;
color:white;
font-weight:500;
transition:.3s;
}

.menu a:hover{
color:#00f5d4;
}

.container{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.admin-box{
width:420px;
padding:45px;
background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);
border-radius:30px;
border:1px solid rgba(255,255,255,.15);
box-shadow:0 30px 60px rgba(0,0,0,.5);
}

h1{
text-align:center;
margin-bottom:30px;
color:#00f5d4;
}

.input-box{
margin-bottom:20px;
}

label{
display:block;
margin-bottom:8px;
font-weight:600;
}

input{
width:100%;
padding:15px;
border:none;
outline:none;
border-radius:15px;
}

button{
width:100%;
padding:16px;
border:none;
border-radius:40px;
background:linear-gradient(45deg,#00f5d4,#0077ff);
color:white;
font-size:18px;
font-weight:bold;
cursor:pointer;
transition:.4s;
}

button:hover{
transform:translateY(-5px);
box-shadow:0 15px 40px #00f5d4;
}

.error{
background:rgba(255,0,0,.15);
border:1px solid rgba(255,0,0,.4);
padding:12px;
border-radius:10px;
margin-bottom:15px;
text-align:center;
color:#ff9d9d;
}

.signup-link{
margin-top:20px;
text-align:center;
}

.signup-link a{
color:#00f5d4;
text-decoration:none;
font-weight:600;
}

.signup-link a:hover{
text-decoration:underline;
}

footer{
position:absolute;
bottom:0;
width:100%;
padding:20px;
text-align:center;
background:#020617;
}

@media(max-width:800px){

nav{
flex-direction:column;
gap:15px;
}

.menu{
flex-wrap:wrap;
justify-content:center;
}

.admin-box{
width:90%;
}

}

</style>

</head>

<body>

<video autoplay muted loop class="bg-video">
<source src="videos/211152_medium.mp4" type="video/mp4">
</video>

<div class="overlay"></div>

<nav>

<div class="logo">

<img src="images/joeshemar_resort-removebg-preview.png" alt="Logo">

<div class="logo-text">
<h2>JOESHEMAR</h2>
<span>RESORT</span>
</div>

</div>

<div class="menu">
<a href="Resort.php">Home</a>
<a href="about.php">About</a>
<a href="bookings.php">Bookings</a>
<a href="contact.php">Contact</a>
<a href="admin.php">Admin</a>
</div>

</nav>

<div class="container">

<div class="admin-box">

<h1>Admin Login</h1>

<?php if($error!=""){ ?>
<div class="error">
<?= $error ?>
</div>
<?php } ?>

<form method="POST">

<div class="input-box">
<label>Username</label>
<input type="text" name="username" required>
</div>

<div class="input-box">
<label>Password</label>
<input type="password" name="password" required>
</div>

<button type="submit">Login</button>

<div class="signup-link">
Don't have an account?
<a href="signup.php">Sign Up</a>
</div>

</form>

</div>

</div>

<footer>
© <?= date('Y') ?> JOESHEMAR Resort Admin System
</footer>

</body>
</html>