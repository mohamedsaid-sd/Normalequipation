<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Eqipation | إيكوبيشن </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
    /* استهداف الـ Carousel باستخدام معرف محدد */
    #verticalCarousel .carousel-item {
      height: 400px; /* تعديل ارتفاع السلايدر */
    }

    #verticalCarousel .carousel-item img {
      width: 100%;
      height: 100%;
      align-self: flex-end;
      object-fit:cover;

    }

    /* الحركة العمودية: الصور تنتقل من الأسفل للأعلى */
    #verticalCarousel .carousel-inner {
      position: relative;
      height: 500px; /* ضبط ارتفاع السلايدر */
    }

    #verticalCarousel .carousel-item-next, 
    #verticalCarousel .carousel-item-prev {
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
      transition: transform 0.6s ease-in-out;
    }

    /* إعداد حركة الصورة القادمة من الأسفل */
    #verticalCarousel .carousel-item-next {
      transform: translateY(100%);
    }

    /* إعداد حركة الصورة السابقة من الأعلى */
    #verticalCarousel .carousel-item-prev {
      transform: translateY(-100%);
    }

    /* إعداد الصورة الحالية */
    #verticalCarousel .carousel-item.active {
      transform: translateY(0);
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
      transition: transform 0.6s ease-in-out;
    }

    /* حركة الصور عند التبديل */
    #verticalCarousel .carousel-item-next.active,
    #verticalCarousel .carousel-item-prev.active {
      transform: translateY(0);
    }

    #verticalCarousel .carousel-item.active.carousel-item-left,
    #verticalCarousel .carousel-item.active.carousel-item-right {
      transform: translateY(-100%);
    }

    #verticalCarousel .carousel-item-next.carousel-item-left,
    #verticalCarousel .carousel-item-prev.carousel-item-right {
      transform: translateY(0);
    }
  </style>
<body>
<div class="container">
	
	<div class="row">
		<div class="col-lg-12">
			<img src="images/cube/eq.png" class="img-fluid"/>
		</div>	

		<center>
		<div class="cube-container">
  			<div class="cube">
    			<div class="face front"><img src="images/cube/1.jpg" alt="Front"></div>
    			<div class="face back"><img src="images/cube/2.jpg" alt="Back"></div>
    			<div class="face left"><img src="images/cube/3.jpg" alt="Left"></div>
    			<div class="face right"><img src="images/cube/4.jpg" alt="Right"></div>
    			<div class="face top"><img src="images/cube/5.jpg" alt="Top"></div>
    			<div class="face bottom"><img src="images/cube/6.jpg" alt="Bottom"></div>
  		</div>
  		</center>

	</div>


<section id="welcome">
	<div class="row">
		<div style="padding-right: 10px;" class="col-lg-12">
			<img src="images/welcome/welcome.png" class="custom-image" />
			<br/><br/>
		</div>
	</div>

	<div id="welcome" style="background:url('images/backgrounds/back.png');background-size: 100%;background-repeat: no-repeat;margin-right: 50px;margin-left:50px;color: #fff;" class="row">
		<div class="col-sm-4">
			<br/><br/>
			<h4> to the Equipation <br/>
			 electronic platform </h4>
			 <img class="arrow" src="images/welcome/social.png"/>
			 <p> hthjthj kth kjhjdhjhdjkas
			 aksjh sajdhj jashjkashdkjahdkja djkash dkjashd jksad
			 sakj dasjdhjashdkas sdahasdjhdkjhasjhakds
			 saj ahsjdkhasjdkhadskj </p>
		</div>	
		<div class="col-sm-4">
			<img id="miner" src="images/welcome/miner.png"/>
		</div>	
		<div class="col-sm-4">
			<img id="gallary" src="images/welcome/gallary.png"/>
			<br/>
			<img  id="arrow" src="images/welcome/arrow.png"/>
		</div>	
	</div>
</section>


<div id="carouselExample" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExample" data-slide-to="1"></li>
    <li data-target="#carouselExample" data-slide-to="2"></li>
    <li data-target="#carouselExample" data-slide-to="3"></li>
    <li data-target="#carouselExample" data-slide-to="4"></li>
    <li data-target="#carouselExample" data-slide-to="5"></li>
    <li data-target="#carouselExample" data-slide-to="6"></li>
    <li data-target="#carouselExample" data-slide-to="7"></li>
  </ol>
  
  <div style="background:url('images/services/bg.jpg');background-size: 100%;" class="carousel-inner">
    
    <div class="carousel-item active">
      <div class="row">
        <div class="col-md-12">
          <img src="images/services/services0.png" class="d-block w-100" alt="Image 1">
        </div>
      </div>
    </div>
    <div class="carousel-item">
    	<div class="row">
    		<div class="col-lg-12">
    			<img src="images/services/services1.png" class="d-block w-100" alt="Image 4">
    		</div>
    	</div>
    </div>
    <div class="carousel-item">
    	<div class="row">
    		<div class="col-lg-12">
    			<img src="images/services/services2.png" class="d-block w-100" alt="Image 4">
    		</div>
    	</div>
    </div>
    <div class="carousel-item">
    	<div class="row">
    		<div class="col-lg-12">
    			<img src="images/services/services3.png" class="d-block w-100" alt="Image 4">
    		</div>
    	</div>
    </div>
     <div class="carousel-item">
    	<div class="row">
    		<div class="col-lg-12">
    			<img src="images/services/services4.png" class="d-block w-100" alt="Image 4">
    		</div>
    	</div>
    </div>
     <div class="carousel-item">
    	<div class="row">
    		<div class="col-lg-12">
    			<img src="images/services/services5.png" class="d-block w-100" alt="Image 4">
    		</div>
    	</div>
    </div>
     <div class="carousel-item">
    	<div class="row">
    		<div class="col-lg-12">
    			<img src="images/services/services6.png" class="d-block w-100" alt="Image 4">
    		</div>
    	</div>
    </div>
     <div class="carousel-item">
    	<div class="row">
    		<div class="col-lg-12">
    			<img src="images/services/services7.png" class="d-block w-100" alt="Image 4">
    		</div>
    	</div>
    </div>
    <div class="carousel-item">
    	<div class="row">
    		<div class="col-lg-12">
    			<img src="images/services/services8.png" class="d-block w-100" alt="Image 4">
    		</div>
    	</div>
    </div>



  </div>

  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div id="verticalCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/statistics/statistics-02.jpg" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="images/statistics/statistics-03.jpg" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="images/statistics/statistics-04.jpg" alt="Image 3">
    </div>
    <div class="carousel-item">
      <img src="images/statistics/statistics-05.jpg" alt="Image 3">
    </div>
    <div class="carousel-item">
      <img src="images/statistics/statistics-06.jpg" alt="Image 3">
    </div>
    <div class="carousel-item">
      <img src="images/statistics/statistics-07.jpg" alt="Image 3">
    </div>
  </div>

  <a class="carousel-control-prev" href="#verticalCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#verticalCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>
</body>
<!-- Bootstrap JS and dependencies -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>