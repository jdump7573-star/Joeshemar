<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>JOESHEMAR Resort</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    overflow:hidden;
    height:100vh;
    background:#000;
}

/* VIDEO BACKGROUND */

.video-bg{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    object-fit:cover;
    z-index:-3;
}

.overlay{
    position:fixed;
    inset:0;
    background:
    linear-gradient(
    135deg,
    rgba(0,20,40,.75),
    rgba(0,0,0,.55)
    );
    z-index:-2;
}

/* NAVBAR */

.navbar{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    padding:25px 80px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    z-index:10;
}

.logo{
display:flex;
align-items:center;
gap:15px;
position:absolute;
top:25px;
left:50px;
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
margin-left:-13px; /* move text left */
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
    gap:35px;
}

.menu a{
    text-decoration:none;
    color:white;
    font-weight:500;
    transition:.3s;
}

.menu a:hover{
    color:#FFD700;
}

/* HERO */

.hero{
    width:100%;
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:40px;
}

/* GLASS CARD */

.card{
    width:900px;
    max-width:95%;
    padding:60px;

    background:rgba(255,255,255,.08);

    backdrop-filter:blur(20px);

    border:1px solid rgba(255,255,255,.15);

    border-radius:35px;

    text-align:center;

    box-shadow:
    0 20px 50px rgba(0,0,0,.45);

    animation:fadeUp 1.8s ease;

    position:relative;

    overflow:hidden;
}

.card::before{
    content:'';
    position:absolute;
    width:300px;
    height:300px;
    background:rgba(255,215,0,.15);
    border-radius:50%;
    top:-100px;
    right:-100px;
    filter:blur(40px);
}

.card::after{
    content:'';
    position:absolute;
    width:250px;
    height:250px;
    background:rgba(0,255,255,.10);
    border-radius:50%;
    bottom:-100px;
    left:-100px;
    filter:blur(50px);
}

.subtitle{
    color:#FFD700;
    letter-spacing:4px;
    text-transform:uppercase;
    font-size:.9rem;
    margin-bottom:15px;
}

.card h1{
    color:white;
    font-size:4.5rem;
    line-height:1.1;
    margin-bottom:20px;
}

.card p{
    color:#f0f0f0;
    font-size:1.15rem;
    line-height:1.8;
    max-width:700px;
    margin:auto;
}

/* BUTTONS */

.buttons{
    margin-top:40px;
    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
}

.btn{
    text-decoration:none;
    padding:16px 40px;
    border-radius:50px;
    font-weight:600;
    transition:.4s;
}

.primary{
    background:linear-gradient(135deg,#FFD700,#FF9900);
    color:white;
    box-shadow:0 10px 30px rgba(255,170,0,.5);
}

.primary:hover{
    transform:translateY(-6px);
}

.secondary{
    border:2px solid rgba(255,255,255,.3);
    color:white;
    backdrop-filter:blur(10px);
}

.secondary:hover{
    background:white;
    color:#000;
}

/* STATS */

.stats{
    margin-top:50px;
    display:flex;
    justify-content:center;
    gap:50px;
    flex-wrap:wrap;
}

.stat h2{
    color:#FFD700;
    font-size:2rem;
}

.stat span{
    color:white;
}

/* FLOATING ICONS */

.float{
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(10px);
    animation:float 8s infinite ease-in-out;
}

.f1{
    width:90px;
    height:90px;
    top:15%;
    left:10%;
}

.f2{
    width:130px;
    height:130px;
    right:8%;
    top:25%;
    animation-delay:2s;
}

.f3{
    width:70px;
    height:70px;
    bottom:15%;
    left:20%;
    animation-delay:4s;
}

@keyframes float{
    0%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-30px);
    }
    100%{
        transform:translateY(0);
    }
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(60px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* MOBILE */

@media(max-width:768px){

.navbar{
    padding:20px;
}

.menu{
    display:none;
}

.card{
    padding:35px;
}

.card h1{
    font-size:2.5rem;
}

.card p{
    font-size:1rem;
}

.stats{
    gap:25px;
}

}

</style>

</head>

<body>

<!-- VIDEO BACKGROUND -->
<video autoplay muted loop playsinline class="video-bg">
    <source src="videos/51296-464062973_medium.mp4" type="video/mp4">
</video>

<div class="overlay"></div>

<!-- FLOATING SHAPES -->
<div class="float f1"></div>
<div class="float f2"></div>
<div class="float f3"></div>

<!-- NAVBAR -->
<div class="logo">
<img src="images/joeshemar_resort-removebg-preview.png" alt="JOESHEMAR Resort Logo">

<div class="logo-text">
<h2>JOESHEMAR</h2>
<span>RESORT</span>
</div>

   
</div>

<!-- HERO -->
<div class="hero">

    <div class="card">

        <div class="subtitle">
            Welcome To Paradise
        </div>

        <h1>
            JOESHEMAR<br>
            RESORT
        </h1>

        <p>
            Escape to luxury and discover breathtaking views,
            world-class accommodations, crystal-clear pools,
            and unforgettable experiences designed for relaxation.
        </p>

        <div class="buttons">

            <a href="Resort.php" class="btn primary">
                Explore Resort
            </a>

            <a href="Bookings.php" class="btn secondary">
                Book Now
            </a>

        </div>

        <div class="stats">

            <div class="stat">
                <h2>50+</h2>
                <span>Luxury Rooms</span>
            </div>

            <div class="stat">
                <h2>5★</h2>
                <span>Resort Service</span>
            </div>

            <div class="stat">
                <h2>100%</h2>
                <span>Guest Satisfaction</span>
            </div>

        </div>

    </div>

</div>

<script>

const card = document.querySelector('.card');

document.addEventListener('mousemove', e => {

    let x = (window.innerWidth/2 - e.clientX)/40;
    let y = (window.innerHeight/2 - e.clientY)/40;

    card.style.transform =
    `rotateY(${x}deg) rotateX(${-y}deg)`;

});

</script>

</body>
</html>