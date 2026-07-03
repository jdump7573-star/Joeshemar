<!DOCTYPE html>
<html>

<head>

<title>JOESHEMAR Resort | Booking</title>

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

background:#071d2b;
color:white;
overflow-x:hidden;

}


/* BACKGROUND */

body::before{

content:"";

position:fixed;

inset:0;

background:

radial-gradient(circle at top left,#00f5d4,transparent 30%),

radial-gradient(circle at bottom right,#0077ff,transparent 30%);

animation:bg 10s infinite alternate;

z-index:-2;

}


@keyframes bg{

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

position:relative;

display:flex;

justify-content:center;

align-items:center;

text-align:center;

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

background:rgba(0,0,0,.6);

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

text-shadow:0 0 30px black;

animation:zoom 1.5s;

}


.hero p{

font-size:25px;

margin-top:20px;

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





.container{

width:90%;

max-width:1200px;

margin:80px auto;

}



.title{

text-align:center;

font-size:40px;

color:#00f5d4;

margin-bottom:50px;

}





/* ROOM CARDS */


.cards{

display:flex;

gap:30px;

flex-wrap:wrap;

}



.card{

flex:1;

min-width:280px;

background:rgba(255,255,255,.08);

backdrop-filter:blur(20px);

border-radius:30px;

overflow:hidden;

border:1px solid rgba(255,255,255,.15);

transition:.5s;

}



.card:hover{

transform:translateY(-15px) scale(1.05);

box-shadow:

0 20px 50px rgba(0,255,212,.4);

}



.card img{

width:100%;

height:230px;

object-fit:cover;

}



.card-content{

padding:25px;

}



.card h2{

color:#00f5d4;

}



.price{

color:#ffd166;

font-size:20px;

font-weight:bold;

}





/* BOOKING FORM */


.booking{

margin-top:70px;

padding:45px;

background:rgba(255,255,255,.08);

backdrop-filter:blur(20px);

border-radius:35px;

border:1px solid rgba(255,255,255,.2);

}



.booking h2{

text-align:center;

font-size:35px;

color:#00f5d4;

margin-bottom:35px;

}



.row{

display:flex;

gap:20px;

margin-bottom:20px;

}



.input-box{

flex:1;

}



label{

display:block;

margin-bottom:8px;

font-weight:bold;

}



input,
select,
textarea{


width:100%;

padding:15px;

border:none;

outline:none;

border-radius:15px;

background:white;

}



textarea{

height:130px;

}



button{

width:100%;

padding:18px;

border:none;

border-radius:40px;

background:

linear-gradient(45deg,#00f5d4,#0077ff);


color:white;

font-size:20px;

font-weight:bold;

cursor:pointer;

transition:.5s;

}



button:hover{

transform:translateY(-10px) scale(1.05);

box-shadow:0 20px 40px #00f5d4;

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

padding:15px 20px;

}


.menu{

flex-wrap:wrap;

justify-content:center;

}


.hero h1{

font-size:38px;

}


.row{

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

Book Your Dream Vacation

</h1>


<p>

Reserve your perfect resort experience

</p>


</div>



</header>







<div class="container">


<h2 class="title">

Available Rooms

</h2>




<div class="cards">



<div class="card">

<img src="images/ChatGPT Image Nov 20, 2025, 01_21_08 PM.png">


<div class="card-content">

<h2>Ocean Villa</h2>

<p>Private pool, ocean view, luxury service.</p>

<br>

<p class="price">

₱8,500 / night

</p>


</div>

</div>







<div class="card">


<img src="images/ChatGPT Image Nov 20, 2025, 01_44_48 PM.png">


<div class="card-content">


<h2>Family Suite</h2>


<p>Perfect room for family vacations.</p>


<br>


<p class="price">

₱5,000 / night

</p>


</div>

</div>








<div class="card">


<img src="images/Nov 20, 2025, 01_30_04 PM.png">


<div class="card-content">


<h2>Garden Room</h2>


<p>Relaxing room surrounded by nature.</p>


<br>


<p class="price">

₱3,500 / night

</p>


</div>

</div>



</div>








<div class="booking">


<h2>

Complete Your Reservation

</h2>





<form action="save_booking.php" method="POST">


<div class="row">


<div class="input-box">

<label>Name</label>

<input type="text" name="name" required>

</div>



<div class="input-box">

<label>Email</label>

<input type="email" name="email" required>

</div>


</div>







<div class="row">


<div class="input-box">

<label>Check In</label>

<input type="date" name="checkin">

</div>



<div class="input-box">

<label>Check Out</label>

<input type="date" name="checkout">

</div>


</div>







<div class="row">


<div class="input-box">

<label>Room Type</label>


<select name="room">


<option>Ocean Villa</option>

<option>Family Suite</option>

<option>Garden Room</option>


</select>


</div>




<div class="input-box">


<label>Guests</label>


<input type="number" name="guests">


</div>


</div>






<label>

Special Request

</label>


<textarea name="request"></textarea>


<br><br>


<button>

Confirm Booking

</button>



</form>


</div>



</div>







<footer>


© <?=date('Y')?> JOESHEMAR Resort | Luxury Stay Experience


</footer>




</body>

</html>