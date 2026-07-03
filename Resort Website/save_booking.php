<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "joeshemar_resort";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$message = "";
$success = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room = mysqli_real_escape_string($conn, $_POST['room']);
    $guests = (int)$_POST['guests'];
    $request = mysqli_real_escape_string($conn, $_POST['request']);

    $sql = "INSERT INTO bookings
            (name,email,checkin,checkout,room,guests,request)
            VALUES
            ('$name','$email','$checkin','$checkout','$room','$guests','$request')";

    if(mysqli_query($conn, $sql)){
        $success = true;
        $message = "Booking Successfully Saved!";
    }else{
        $message = "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Booking Confirmation</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

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
background:#071d2b;
overflow:hidden;
}

body::before{
content:"";
position:absolute;
inset:0;
background:
radial-gradient(circle at top left,#00f5d4,transparent 30%),
radial-gradient(circle at bottom right,#0077ff,transparent 30%);
z-index:-1;
}

.card{

width:90%;
max-width:700px;

background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);

border:1px solid rgba(255,255,255,.15);

border-radius:30px;

padding:40px;

text-align:center;

color:white;

box-shadow:0 20px 50px rgba(0,0,0,.3);

animation:show .8s ease;
}

@keyframes show{
from{
opacity:0;
transform:translateY(50px);
}
to{
opacity:1;
transform:translateY(0);
}
}

.icon{
font-size:90px;
margin-bottom:20px;
}

.success{
color:#00f5d4;
}

.error{
color:#ff6b6b;
}

h1{
margin-bottom:20px;
}

.info{
text-align:left;
margin-top:30px;
padding:20px;
background:rgba(255,255,255,.05);
border-radius:20px;
}

.info p{
margin:10px 0;
}

.btn{
display:inline-block;
margin-top:30px;
padding:15px 35px;
border-radius:50px;
text-decoration:none;
color:white;
font-weight:600;
background:linear-gradient(135deg,#00f5d4,#0077ff);
transition:.4s;
}

.btn:hover{
transform:translateY(-5px);
box-shadow:0 10px 25px rgba(0,245,212,.4);
}

</style>

</head>

<body>

<div class="card">

<?php if($success): ?>

<div class="icon success">✓</div>

<h1>Booking Confirmed!</h1>

<p>Your reservation has been successfully submitted.</p>

<div class="info">

<p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>

<p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>

<p><strong>Check-In:</strong> <?= htmlspecialchars($checkin) ?></p>

<p><strong>Check-Out:</strong> <?= htmlspecialchars($checkout) ?></p>

<p><strong>Room:</strong> <?= htmlspecialchars($room) ?></p>

<p><strong>Guests:</strong> <?= htmlspecialchars($guests) ?></p>

<p><strong>Special Request:</strong> <?= htmlspecialchars($request) ?></p>

</div>

<?php else: ?>

<div class="icon error">✖</div>

<h1>Booking Failed</h1>

<p><?= $message ?></p>

<?php endif; ?>

<a href="bookings.php" class="btn">Back to Booking Page</a>

</div>

</body>
</html>

<?php mysqli_close($conn); ?>