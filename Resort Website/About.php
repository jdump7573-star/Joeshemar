<!DOCTYPE html>
<html>

<head>

<title>About | JOESHEMAR Resort</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


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

background:#081b29;

color:white;

overflow-x:hidden;

}



/* ANIMATED BACKGROUND */


body::before{


content:"";

position:fixed;

inset:0;


background:


radial-gradient(circle at top left,#00f5d4,transparent 30%),

radial-gradient(circle at bottom right,#0077ff,transparent 30%);


opacity:.25;


animation:bgMove 10s infinite alternate;


z-index:-2;


}



@keyframes bgMove{


from{

transform:translateY(0);

}


to{

transform:translateY(-100px);

}

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


width:100%;


height:100%;


object-fit:cover;


z-index:-3;


}



.overlay{


position:absolute;


inset:0;


background:rgba(0,0,0,.55);


z-index:-2;


}







/* NAVBAR SAME AS RESORT.PHP */


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
margin:0;
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

gap:25px;


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

.back-btn{
padding:10px 22px;
border-radius:50px;
background:linear-gradient(135deg,#00f5d4,#0077ff);
color:white !important;
font-weight:600;
box-shadow:0 5px 20px rgba(0,255,212,.3);
}

.back-btn::after{
display:none;
}

.back-btn:hover{
transform:translateY(-3px);
box-shadow:0 10px 25px rgba(0,255,212,.5);
}





/* HERO */


.hero h1{


font-size:65px;


text-shadow:

0 0 30px black;


animation:zoom 1.5s;


}



.hero p{


font-size:25px;


margin-top:20px;


}



.hero-btn{


display:inline-block;


margin-top:35px;


padding:15px 45px;


border-radius:40px;


background:

linear-gradient(45deg,#00f5d4,#0077ff);


color:white;


text-decoration:none;


font-weight:bold;


transition:.5s;


}



.hero-btn:hover{


transform:

scale(1.1)

translateY(-10px);


box-shadow:

0 15px 40px #00f5d4;


}



@keyframes zoom{


from{


opacity:0;

transform:scale(.5);


}



to{


opacity:1;


transform:scale(1);


}


}






/* CONTENT */


.container{


width:90%;


max-width:1200px;


margin:80px auto;


}





.about-card{


display:flex;


gap:50px;


align-items:center;


padding:50px;


background:rgba(255,255,255,.08);


backdrop-filter:blur(20px);


border-radius:35px;


border:1px solid rgba(255,255,255,.2);


}



.image-box{


width:50%;


}



.image-box img{


width:100%;


height:420px;


object-fit:cover;


border-radius:35px;


transition:.6s;


box-shadow:

0 30px 60px rgba(0,0,0,.5);


}



.image-box img:hover{


transform:

scale(1.08)

rotateY(12deg);


}





.text-box{


width:50%;


}



.text-box h2{


font-size:42px;


color:#00f5d4;


margin-bottom:20px;


}



.text-box p{


font-size:18px;


line-height:1.8;


}







.btn{


display:inline-block;


margin-top:30px;


padding:15px 40px;


border-radius:40px;


background:

linear-gradient(45deg,#00f5d4,#0077ff);


color:white;


text-decoration:none;


transition:.5s;


}



.btn:hover{


transform:

translateY(-10px)

scale(1.1);


}






/* FEATURES */


.features{


display:flex;


gap:30px;


margin-top:60px;


}





.feature-box{


flex:1;


padding:35px;


text-align:center;


background:rgba(255,255,255,.08);


backdrop-filter:blur(20px);


border-radius:25px;


border:1px solid rgba(255,255,255,.15);


transition:.5s;


}



.feature-box:hover{


transform:

translateY(-20px)

rotateY(15deg);


box-shadow:

0 20px 40px rgba(0,255,212,.3);


}





.feature-box h3{


color:#00f5d4;


margin-bottom:15px;


}







footer{


margin-top:70px;


padding:25px;


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



.hero h1{


font-size:38px;


}



.about-card{


flex-direction:column;


}



.image-box,

.text-box{


width:100%;


}



.features{


flex-direction:column;


}


}

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



<div class="overlay"></div>





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


<a href="about.php">About</a>


<a href="bookings.php">Bookings</a>


<a href="contact.php">Contact</a>


<a href="admin.php">Admin</a>



</div>


</nav>







<div class="hero">


<h1>

About JOESHEMAR Resort

</h1>



<p>

Relax • Explore • Create Memories

</p>



<a href="bookings.php" class="hero-btn">

Book Your Stay

</a>


</div>





</header>







<div class="container">





<div class="about-card">





<div class="image-box">


<img src="images/JR.jpg">


</div>







<div class="text-box">


<h2>

Luxury Tropical Escape

</h2>





<p>


Welcome to JOESHEMAR Resort, a premium destination
where comfort, nature, and relaxation meet.

Enjoy beautiful scenery, luxury accommodations,
amazing facilities, and unforgettable experiences
perfect for families, friends, and couples.


</p>





<a href="bookings.php" class="btn">

Reserve Now

</a>




</div>





</div>







<div class="features">





<div class="feature-box">


<h3>

🏝 Beautiful Location

</h3>



<p>

Amazing tropical views and peaceful surroundings.

</p>



</div>







<div class="feature-box">


<h3>

🏨 Luxury Rooms

</h3>



<p>

Modern rooms designed for comfort and relaxation.

</p>



</div>







<div class="feature-box">


<h3>

🍹 Premium Service

</h3>



<p>

Friendly service for the perfect vacation.

</p>



</div>



</div>






</div>







<footer>


© <?=date('Y')?> JOESHEMAR Resort | Your Perfect Escape


</footer>





</body>

</html>