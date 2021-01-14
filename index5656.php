<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .carousel-inner img{
  width: 100%;
  height: 100%;
  }
  </style>
  </head>
  <body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Trello</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav m1-auto ">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="about.php">Reservations</a></li>
            <li><a href="#">Commandes</a></li>
          </ul>
        </li>
        <li><a href="Menu.php">Menu</a>/li>
        <li><a href="#">Galerie</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/image1.jpg" style="width:100%;height: 50%;" >
        <div class="carousel-caption">
        	<h3>Welcome to the Greatest Restaurant</h3>
        </div>
      </div>

      <div class="item ">
        <img src="images/image2.jpg"  style="width:100%;height: 50%;">
        <div class="carousel-caption">
        	<h3>Welcome to the Greatest Restaurant </h3>
        </div>
      </div>
       <div class="item">
        <img src="images/image9.jpg"  style="width:100%;height: 50%;">
        <div class="carousel-caption">
        	<h3>Welcome to the Greatest Restaurant </h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

		<h2 style="text-align: center">About Us</h2>
			<p style="text-align: center"> <i> Triloo will be unique to the Long Branch area. International creative food, and a style of service that will make everyone feel welcome and special. Our food products will be of the finest quality and prepared with sensitivity and care. We will 'go all the way' to satisfy our guests. We will change our menu every 3-4 months, but we'll keep 'your favorite.' Portions will be modestly sized with an attractive presentation.<br>

			Our wine list will be modest in size and primarily focused on wines from California, France, New Zealand and Argentina. Approximately 25% will be exclusively available by the glass and the remaining labels will be available by the bottle.  We will also feature a moderate international beer selection on tap and in bottles. The comfortable softly-lit bar features a comprehensive selection of the finest Vodkas, homemade Aquavits and single malt Scotches.<br>

			During the busy summer months customers can also sit outside on our patio and we will offer a special summer menu, featuring lighter fare, exotic drinks, as well as non-alcoholic offerings. The patio and garden setting will be a fun and casual atmosphere for the summer crowd.<br>

			The kitchen staff will have the best in culinary education and work experience. Our creative talents will compliment one another. The lounge and restaurant staff will offer the finest service in a cozy atmosphere and offer customers an extraordinarily successful evening.<br></i>
		</p>

    <footer style="background-color: #000;">
      
<div class="row">
  <div class="col-sm-4">
    <i class="fa fa-facebook" style="color: white;font-size: 2.5em;padding: 50px;"></i>
  </div>
  <div class="col-sm-6">
    <i class="fa fa-facebook" style="color: white;"></i>
  </div>
  
</div>
  <span><i class="fa fa-facebook" style="color: white;"></i></span> <span><i class="fa fa-facebook" style="color: white;"></i></span> 
      
 
    </footer>


</body>
</html>
