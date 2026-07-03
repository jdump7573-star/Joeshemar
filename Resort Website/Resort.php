<?php

$resorts = [

[
"name"=>"Paradise Resort",
"location"=>"Davao City",
"image"=>"images/ChatGPT Image Nov 20, 2025, 01_44_48 PM.png",
"description"=>"Experience luxury and relaxation with stunning pool views and modern amenities.",
"price"=>"₱4,500/night"
],

[
"name"=>"Ocean Breeze Villa",
"location"=>"Samal Island",
"image"=>"images/ChatGPT Image Nov 20, 2025, 01_21_08 PM.png",
"description"=>"A peaceful beachfront retreat perfect for family vacations and weekend escapes.",
"price"=>"₱6,000/night"
],

[
"name"=>"Mountain View Resort",
"location"=>"Bukidnon",
"image"=>"images/Nov 20, 2025, 01_30_04 PM.png",
"description"=>"Enjoy fresh mountain air and breathtaking scenery in a serene environment.",
"price"=>"₱3,800/night"
]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>JOESHEMAR Resort</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

html{
scroll-behavior:smooth;
}

body{
background:#0f172a;
overflow-x:hidden;
color:white;
}

body::before{
content:"";
position:fixed;
inset:0;
background:
radial-gradient(circle at 20% 20%, rgba(0,255,212,.25), transparent 30%),
radial-gradient(circle at 80% 80%, rgba(255,0,128,.25), transparent 30%);
animation:bgMove 12s infinite alternate;
z-index:-3;
}

@keyframes bgMove{
from{transform:translateY(0);}
to{transform:translateY(-120px);}
}

/* HEADER */

header{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
text-align:center;
position:relative;
overflow:hidden;
}

.bg-video{
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
object-fit:cover;
z-index:-2;
}

header::after{
content:"";
position:absolute;
inset:0;
background:rgba(0,0,0,.55);
z-index:-1;
}

/* NAVIGATION */

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
transition:.3s ease;
}

.logo img:hover{
transform:scale(1.05);
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
color:#fff;
letter-spacing:2px;
text-shadow:0 0 15px rgba(0,245,212,.5);
}

.logo-text span{
margin-top:5px;
font-size:14px;
font-weight:500;
letter-spacing:4px;
color:#00f5d4;
}

.menu{
display:flex;
gap:20px;
align-items:center;
}

.menu a{
text-decoration:none;
color:white;
font-weight:500;
transition:.4s;
position:relative;
}

.menu a::after{
content:"";
position:absolute;
width:0;
height:2px;
left:0;
bottom:-5px;
background:#00f5d4;
transition:.4s;
}

.menu a:hover::after{
width:100%;
}

.menu a:hover{
color:#00f5d4;
}


/* HERO */

.hero{
z-index:2;
animation:fadeUp 2s ease;
}

.hero h1{
font-size:5rem;
text-shadow:0 0 30px rgba(255,255,255,.5);
}

.hero p{
font-size:1.3rem;
margin-top:15px;
}

@keyframes fadeUp{
from{
opacity:0;
transform:translateY(50px);
}
to{
opacity:1;
transform:translateY(0);
}
}

.section-title{
text-align:center;
margin:80px 0 40px;
font-size:3rem;
color:#00f5d4;
}

.resort-container{
width:90%;
max-width:1300px;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
gap:30px;
}

.card{
background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);
border:1px solid rgba(255,255,255,.15);
border-radius:25px;
overflow:hidden;
transition:.5s;
}

.card:hover{
transform:translateY(-10px) scale(1.03);
box-shadow:0 20px 50px rgba(0,255,212,.35);
}

.card img{
width:100%;
height:250px;
object-fit:cover;
transition:.5s;
}

.card:hover img{
transform:scale(1.1);
}

.card-content{
padding:25px;
}

.card h3{
font-size:24px;
color:#00f5d4;
margin-bottom:10px;
}

.card p{
line-height:1.7;
}

.price{
margin-top:15px;
font-size:20px;
font-weight:bold;
color:#ffd166;
}

.btn{
display:inline-block;
margin-top:20px;
padding:12px 30px;
border-radius:50px;
text-decoration:none;
color:white;
font-weight:600;
background:linear-gradient(135deg,#00f5d4,#0077ff);
transition:.4s;
}

.btn:hover{
transform:translateY(-5px);
box-shadow:0 10px 25px rgba(0,255,212,.5);
}

.about{
width:90%;
max-width:1200px;
margin:80px auto;
padding:60px;
text-align:center;
background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);
border-radius:25px;
border:1px solid rgba(255,255,255,.15);
}

.about h2{
font-size:2.5rem;
margin-bottom:15px;
color:#00f5d4;
}

.about p{
font-size:1.1rem;
line-height:1.8;
}

footer{
margin-top:50px;
padding:25px;
text-align:center;
background:#020617;
}

@media(max-width:768px){

nav{
flex-direction:column;
gap:15px;
}

.logo img{
height:70px;
}

.menu{
flex-wrap:wrap;
justify-content:center;
}

.hero h1{
font-size:3rem;
}

.hero p{
font-size:1rem;
}

.section-title{
font-size:2rem;
}

}

/* TOP LEFT HOME BUTTON */

.side-home-btn{
position:fixed;
top:35px;
left:10px;
width:40px;
height:40px;
display:flex;
align-items:center;
justify-content:center;
background:linear-gradient(135deg,#00f5d4,#0077ff);
color:white;
text-decoration:none;
font-size:18px;
font-weight:bold;
border-radius:50%;
box-shadow:0 5px 12px rgba(0,255,212,.3);
z-index:1001;
transition:.3s;
}

.side-home-btn:hover{
transform:scale(1.1);
}
</style>

</head>

<body>

<a href="Home.php" class="side-home-btn">⬅</a>

<header>

<video autoplay muted loop playsinline class="bg-video">
<source src="videos/resort-video.mp4" type="video/mp4">
</video>

<nav>

<div class="logo">
<img src="images/joeshemar_resort-removebg-preview.png" alt="JOESHEMAR Resort Logo">

<div class="logo-text">
<h2>JOESHEMAR</h2>
<span>RESORT</span>
</div>
</div>

<div class="menu">

<a href="Resort.php">Home</a>
<a href="About.php">About</a>
<a href="Bookings.php">Bookings</a>
<a href="Contact.php">Contact</a>
<a href="Admin.php">Admin</a>
</div>

</nav>

<div class="hero">
<h1>JOESHEMAR Resort</h1>
<p>Your Perfect Vacation Destination</p>
<a href="#resorts" class="btn">Explore Resorts</a>
</div>

</header>

<h2 class="section-title" id="resorts">Featured Resorts</h2>

<div class="resort-container">

<?php foreach($resorts as $resort): ?>

<div class="card">

<img src="<?= htmlspecialchars($resort['image']); ?>" alt="<?= htmlspecialchars($resort['name']); ?>">

<div class="card-content">

<h3><?= htmlspecialchars($resort['name']); ?></h3>

<p>📍 <?= htmlspecialchars($resort['location']); ?></p>

<br>

<p><?= htmlspecialchars($resort['description']); ?></p>

<p class="price"><?= htmlspecialchars($resort['price']); ?></p>

<a href="Bookings.php?resort=<?= urlencode($resort['name']); ?>" class="btn">
Book Now
</a>

</div>

</div>

<?php endforeach; ?>

</div>

<div class="about">

<h2>Welcome To JOESHEMAR Resort</h2>

<p>
Enjoy luxury rooms, breathtaking views, world-class amenities,
and unforgettable vacation experiences with our premium resort services.
Whether you're looking for a relaxing getaway or an adventurous escape,
JOESHEMAR Resort offers the perfect destination for every traveler.
</p>

<a href="Bookings.php" class="btn">
Reserve Your Stay
</a>

</div>

<footer>
© <?= date('Y'); ?> JOESHEMAR Resort | Your Perfect Escape
</footer>

</body>
</html>