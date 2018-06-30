<html>
<head>  
<title>Web</title>
<link rel="stylesheet" href="zil.css" />
</head>
<body>

<div id="header">
  <img src="lalala.jpg" ><br /><br /> 
</div>
<div id="body">
 <div id="menu">
  <nav>
   <ul id="nav">
    <li><a href="home.html">Home</a></li>
    <li><a href="#">About</a>
    <ul>
      <li><a href="me.html">About me</a></li>
      <li><a href="yes.html">About Futsal</a></li>
  </ul>
  </li>
    <li><a href="index.php">Sewa</a></li>
     </ul>
 </nav>
</div>
<div>
  <style type='text/css'>
.slide {
position:relative;
margin:0 auto;
width:1000px;
height:490px;
overflow:hidden
}

.slide input {
display:block;
position:absolute;
width:960px;
height:450px;
left:0;
top:0;
opacity:0;
cursor:pointer;
margin:0;
padding:0
}

.slide img {
visibility:hidden;
opacity:0;
height:350px;
position:absolute;
left:0;
top:0;
width:520px;
  margin-left: 230px; 
  margin-top: 15px;
border:10px solid #ddd;
border-radius:20px;
transition:all .5s ease-out
}

.slide input:checked + img {
visibility:visible;
opacity:1
}

.slide input:checked { display:none }

.slide input:nth-child(1) { z-index:13 }
.slide input:nth-child(3) { z-index:12 }
.slide input:nth-child(5) { z-index:11 }
.slide input:nth-child(7) { z-index:10 }

.slide input:nth-child(1):checked ~ input:nth-child(3),
.slide input:nth-child(3):checked ~ input:nth-child(5),
.slide input:nth-child(5):checked ~ input:nth-child(7) { z-index:15 }
</style>
<h1>SELAMAT DATANG<br/><h2>DI ZUL FUTSAL</h2></h1><br/>
<div class='slide'>
  <input type='radio' name='radio-set' checked='checked' />
  <img src='Futsal1.jpg'/>

  <input type='radio' name='radio-set' />
  <img src='Fustal2.jpg'/>
</div>
<video width="520" height="240" controls autoplay>
  <source src="a.mp4" type="video/mp4">
</video>
<h3>SKIL FUTSAL KAKEK KAKEK</h3>
</div>
</div>

<div id="fooder">
<b><marquee>ig @zulfikaryunus1</marquee></b>
</div>
</body>
</html>