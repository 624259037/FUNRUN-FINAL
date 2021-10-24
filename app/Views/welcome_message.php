<!DOCTYPE html>
<html lang="en">
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
    crossorigin="anonymous"/>
    <link href="welcome_message.css" rel="stylesheet"/>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<title>FUNRUN 2021</title>

    <nav class="navbar navbar-light" style="background-color: #2c2828b4;">
    <ul>
		<li><a href="\login">Login</a></li>
        <li><a href="\register">Register</a></li>
        <li><a href="\register">Register for run program</a></li>
        <li><a href="\welcome_message.php" >Home </a></li>
    </ul>
</nav>

	<style>
		body {
 		 margin: 0;
 		 padding: 2rem 5rem;
 		 text-align: center;
 		 background-image: url(http://streetwill.co/uploads/post/photo/85/show_wp4Ff1Dn_UlPhP8RIpfXtoRRMyBhH-03DRS1wsE3Brg.jpg);
		 color: rgb(0, 0, 0);
 		 font-family: "helvetica neue", sans-serif;
 		 font-weight: 100;
 		 font-size: 16px;
	  
	}
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: none;
    }
    li {
        float: right;
    }
    li a {
        display: block;
        color: rgb(250, 249, 249);
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: rgba(29, 24, 24, 0.733);
     color: white;
     text-align: center;
}
.bgcontainer {
  position: relative;
  width: 320px;
  margin: 100px auto 0 auto;
  perspective: 1000px;
}

.carousel {
  position: absolute;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d; 
  animation: rotate360 60s infinite forwards linear;
}
.carousel__face { 
  position: absolute;
  width: 300px;
  height: 187px;
  top: 20px;
  left: 10px;
  right: 10px;
  background-size: cover;
  box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);
  display: flex;
}

span {
  margin: auto;
  font-size: 2rem;
}


.carousel__face:nth-child(1) {
  background-image: url("https://parkrunthailand.com/static/media/imgparkrun04.6c0bc05c.jpg");
  transform: rotateY(  0deg) translateZ(430px); }
.carousel__face:nth-child(2) { 
  background-image: url("https://parkrunthailand.com/static/media/imgparkrun02.7f334eb0.jpg");
    transform: rotateY( 40deg) translateZ(430px); }
.carousel__face:nth-child(3) {
  background-image: url("https://bk.asia-city.com/sites/default/files/u142691/running_box_content2.jpg");
  transform: rotateY( 80deg) translateZ(430px); }
.carousel__face:nth-child(4) {
  background-image: url("https://www.justrunlah.com/wp-content/uploads/2018/04/11-Top-marathon-in-Thailand.png");
  transform: rotateY(120deg) translateZ(430px); }
.carousel__face:nth-child(5) { 
  background-image: url("https://bk.asia-city.com/sites/default/files/u142691/cnx_marathon_content.jpg");
 transform: rotateY(160deg) translateZ(430px); }
.carousel__face:nth-child(6) { 
  background-image: url("https://expatlifeinthailand.com//assets/media/2018/01/laguna-phuket-marathon-ft.jpeg");
 transform: rotateY(200deg) translateZ(430px); }
.carousel__face:nth-child(7) { 
  background-image: url("https://www.ryt9.com/img/files/20200128/iq2b091068f63f818d41d58feeaab98217-0.jpg");
 transform: rotateY(240deg) translateZ(430px); }
.carousel__face:nth-child(8) {
  background-image: url("https://www.worldvarietynews.com/wp-content/uploads/2020/02/Run-Ultra-Trail-Thailand-2020-4.jpg");
  transform: rotateY(280deg) translateZ(430px); }
.carousel__face:nth-child(9) {
  background-image: url("https://www.prbuffet.com/wp-content/themes/stylebook/timthumb.php?src=https%3A%2F%2Fwww.prbuffet.com%2Fwp-content%2Fuploads%2F2018%2F07%2FWeb-Pattaya-Marathon-2018-Hotel-Baraquda-Pattaya-MGallery-by-Sofitel-Mercure-Pattaya-Hotel-3-Cover.jpg&q=90&w=795&h=470&zc=1");
  transform: rotateY(320deg) translateZ(430px); }



@keyframes rotate360 {
  from {
    transform: rotateY(0deg);
  }
  to {
    transform: rotateY(-360deg);
  }
} 
    </style>
    
 
</head>
<body>
<div class="bgcontainer">
        <div class="carousel">
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
        </div>
      </div> 
	  
 
</body>
<footer>
<div class="footer">
      <p>Creator by <br>
      Abhisit Saikraikra</p>
    </div>

</footer>
</html>
