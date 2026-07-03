<!DOCTYPE html>
<html>

<head>

<title>JOESHEMAR Resort | Contact</title>

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

background:#061b2b;

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


animation:bgmove 10s infinite alternate;


z-index:-2;

}



@keyframes bgmove{


from{

transform:translateY(0);

}


to{

transform:translateY(-120px);

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







/* CONTACT BOX */


.info{


display:flex;


gap:30px;


flex-wrap:wrap;


}




.box{


flex:1;


min-width:250px;


padding:40px;


text-align:center;


background:rgba(255,255,255,.08);


backdrop-filter:blur(20px);


border-radius:30px;


border:1px solid rgba(255,255,255,.2);


transition:.5s;


}




.box:hover{


transform:translateY(-20px) rotateY(15deg);


box-shadow:

0 20px 50px rgba(0,255,212,.3);


}



.box h2{


color:#00f5d4;


margin-bottom:15px;


}









/* FORM */


.contact-form{


margin-top:70px;


padding:45px;


background:rgba(255,255,255,.08);


backdrop-filter:blur(20px);


border-radius:35px;


border:1px solid rgba(255,255,255,.2);


}




.contact-form h2{


text-align:center;


font-size:35px;


color:#00f5d4;


margin-bottom:35px;


}



.row{


display:flex;


gap:20px;


}



.input{


flex:1;


}




label{


display:block;


margin-bottom:8px;


font-weight:bold;


}



input,
textarea{


width:100%;


padding:15px;


border:none;


border-radius:15px;


outline:none;


}




textarea{


height:140px;


}





button{


margin-top:25px;


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


transform:

translateY(-10px)

scale(1.05);


box-shadow:

0 20px 40px #00f5d4;


}








/* MAP */


.map{


margin-top:70px;


}



.map h2{


color:#00f5d4;


margin-bottom:20px;


}




iframe{


width:100%;


height:350px;


border:none;


border-radius:30px;


box-shadow:

0 20px 50px rgba(0,0,0,.5);


}







footer{


margin-top:70px;


padding:25px;


background:#020617;


text-align:center;


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

Contact JOESHEMAR Resort

</h1>



<p>

We are here to help plan your perfect vacation

</p>


</div>




</header>









<div class="container">







<div class="info">





<div class="box">


<h2>

📍 Location

</h2>


<p>

Pangi, Davao, Philippines

</p>


</div>






<div class="box">


<h2>

📞 Phone

</h2>


<p>

+63 912 345 6789

</p>


</div>







<div class="box">


<h2>

✉ Email

</h2>


<p>

info@joeshemarresort.com

</p>


</div>





</div>









<div class="contact-form">



<h2>

Send Us A Message

</h2>





<form action="send_message.php" method="POST">





<div class="row">



<div class="input">


<label>Name</label>


<input type="text" name="name" required>


</div>






<div class="input">


<label>Email</label>


<input type="email" name="email" required>


</div>



</div>







<br>




<label>

Message

</label>



<textarea name="message" placeholder="Write your message..."></textarea>





<button>

Send Message

</button>




</form>




</div>









<div class="map">


<h2>

Find Us

</h2>




<iframe

src="https://maps.google.com/maps?q=Davao%20Philippines&t=&z=13&ie=UTF8&iwloc=&output=embed">

</iframe>




</div>







</div>









<footer>


© <?=date('Y')?> JOESHEMAR Resort | Luxury Vacation Experience


</footer>







</body>


</html>