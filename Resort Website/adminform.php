<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>JOESHEMAR Resort | Admin Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
scroll-behavior:smooth;
}

body{
overflow-x:hidden;
color:white;
}

/* VIDEO BACKGROUND */

.video-bg{
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
z-index:-3;
overflow:hidden;
}

.video-bg video{
width:100%;
height:100%;
object-fit:cover;
}

.overlay{
position:fixed;
inset:0;
background:linear-gradient(
135deg,
rgba(0,0,0,.75),
rgba(7,29,43,.75),
rgba(0,119,255,.25)
);
z-index:-2;
}

/* SIDEBAR */

.sidebar{
position:fixed;
left:20px;
top:20px;
bottom:20px;
width:280px;
background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);
border:1px solid rgba(255,255,255,.15);
border-radius:30px;
padding:25px;
box-shadow:0 15px 40px rgba(0,0,0,.4);
animation:slideLeft 1s ease;
}

@keyframes slideLeft{
from{
opacity:0;
transform:translateX(-80px);
}
to{
opacity:1;
transform:translateX(0);
}
}

.logo{
display:flex;
align-items:center;
gap:15px;
margin-bottom:40px;
}

.logo img{
width:90px;
transition:.5s;
filter:drop-shadow(0 0 20px rgba(0,245,212,.6));
}

.logo img:hover{
transform:rotate(5deg) scale(1.08);
}

.logo-text h2{
font-size:28px;
font-weight:800;
letter-spacing:2px;
}

.logo-text span{
color:#00f5d4;
letter-spacing:5px;
font-size:13px;
}

.sidebar a{
display:flex;
align-items:center;
gap:15px;
text-decoration:none;
color:white;
padding:16px;
margin:12px 0;
border-radius:18px;
transition:.4s;
font-weight:500;
}

.sidebar a:hover{
background:linear-gradient(135deg,#00f5d4,#00b4ff);
color:#071d2b;
transform:translateX(10px);
box-shadow:0 0 25px rgba(0,245,212,.5);
}

/* MAIN */

.main{
margin-left:330px;
padding:30px;
}

/* HEADER */

.header{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:30px;
animation:fadeDown 1s ease;
}

@keyframes fadeDown{
from{
opacity:0;
transform:translateY(-50px);
}
to{
opacity:1;
transform:translateY(0);
}
}

.header h1{
font-size:42px;
font-weight:800;
}

.header span{
color:#00f5d4;
}

/* CARDS */

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
gap:25px;
}

.card{
background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);
padding:30px;
border-radius:25px;
border:1px solid rgba(255,255,255,.15);
transition:.5s;
position:relative;
overflow:hidden;
animation:floatUp 1s ease;
}

@keyframes floatUp{
from{
opacity:0;
transform:translateY(60px);
}
to{
opacity:1;
transform:translateY(0);
}
}

.card::before{
content:'';
position:absolute;
width:200px;
height:200px;
background:rgba(0,245,212,.15);
border-radius:50%;
top:-100px;
right:-100px;
}

.card:hover{
transform:translateY(-12px) scale(1.03);
box-shadow:0 20px 40px rgba(0,245,212,.35);
}

.card h2{
font-size:50px;
color:#00f5d4;
}

.card p{
margin-top:10px;
font-size:17px;
}

/* SECTION */

.section{
margin-top:35px;
background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);
border:1px solid rgba(255,255,255,.15);
padding:30px;
border-radius:30px;
animation:fadeIn 1.2s ease;
}

@keyframes fadeIn{
from{
opacity:0;
}
to{
opacity:1;
}
}

.section h2{
margin-bottom:20px;
color:#00f5d4;
}

/* TABLE */

table{
width:100%;
border-collapse:collapse;
overflow:hidden;
border-radius:20px;
}

th{
background:linear-gradient(135deg,#00f5d4,#00b4ff);
color:#071d2b;
padding:16px;
}

td{
padding:16px;
text-align:center;
background:rgba(255,255,255,.06);
}

tr:hover td{
background:rgba(0,245,212,.12);
}

/* REPORTS */

.report-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:20px;
}

.report{
padding:25px;
border-radius:25px;
background:linear-gradient(
135deg,
rgba(0,245,212,.15),
rgba(0,119,255,.15)
);
text-align:center;
transition:.4s;
}

.report:hover{
transform:scale(1.05);
}

.report h3{
font-size:40px;
color:#00f5d4;
}

/* RESPONSIVE */

@media(max-width:900px){

.sidebar{
position:relative;
width:95%;
height:auto;
margin:15px auto;
left:0;
top:0;
bottom:auto;
}

.main{
margin-left:0;
padding:20px;
}

.header{
flex-direction:column;
gap:15px;
}

}

</style>

</head>

<body>

<!-- VIDEO BACKGROUND -->
<div class="video-bg">
<video autoplay muted loop playsinline>
<source src="videos/istockphoto-1209606008-640_adpp_is.mp4" type="video/mp4">
</video>
</div>

<div class="overlay"></div>

<!-- SIDEBAR -->

<div class="sidebar">

<div class="logo">
<img src="images/joeshemar_resort-removebg-preview.png">
<div class="logo-text">
<h2>JOESHEMAR</h2>
<span>RESORT</span>
</div>
</div>

<a href="#dashboard">🏠 Dashboard</a>
<a href="#bookings">📅 Bookings</a>
<a href="#reports">📊 Reports</a>
<a href="#logs">📜 Logs</a>
<a href="Resort.php">🌴 Website</a>
<a href="Home.php" onclick="return logoutConfirm()">🚪 Logout</a>

</div>

<!-- MAIN -->

<div class="main">

<div class="header">
<h1>Admin <span>Dashboard</span></h1>
<h3><?php echo date("F d, Y"); ?></h3>
</div>

<section id="dashboard">

<div class="cards">

<div class="card">
<h2>150</h2>
<p>Total Bookings</p>
</div>

<div class="card">
<h2>85%</h2>
<p>Room Occupancy</p>
</div>

<div class="card">
<h2>₱350K</h2>
<p>Total Income</p>
</div>

<div class="card">
<h2>₱85K</h2>
<p>Monthly Revenue</p>
</div>

</div>

</section>

<section id="bookings" class="section">

<h2>📅 Booking Management</h2>

<table>

<tr>
<th>Guest</th>
<th>Room</th>
<th>Date</th>
<th>Status</th>
</tr>

<tr>
<td>Juan Dela Cruz</td>
<td>Ocean Villa</td>
<td>July 15, 2026</td>
<td>Confirmed</td>
</tr>

<tr>
<td>Maria Santos</td>
<td>Family Suite</td>
<td>July 18, 2026</td>
<td>Pending</td>
</tr>

</table>

</section>

<section id="reports" class="section">

<h2>📊 Reports</h2>

<div class="report-grid">

<div class="report">
<h3>120</h3>
<p>Monthly Guests</p>
</div>

<div class="report">
<h3>50</h3>
<p>Total Rooms</p>
</div>

<div class="report">
<h3>+25%</h3>
<p>Revenue Growth</p>
</div>

</div>

</section>

<section id="logs" class="section">

<h2>📜 Activity Logs</h2>

<table>

<tr>
<th>Activity</th>
<th>Admin</th>
<th>Time</th>
</tr>

<tr>
<td>Added New Room</td>
<td>Administrator</td>
<td>10:30 AM</td>
</tr>

<tr>
<td>Approved Booking</td>
<td>Administrator</td>
<td>11:45 AM</td>
</tr>

<tr>
<td>Updated Resort Gallery</td>
<td>Administrator</td>
<td>1:20 PM</td>
</tr>

</table>

</section>

</div>

<script>

function logoutConfirm(){
return confirm("Are you sure you want to logout?");
}

</script>

</body>
</html>