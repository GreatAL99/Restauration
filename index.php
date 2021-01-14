<?php
session_start();
if(isset($_POST["submit"])){
// Create connection
$conn = new PDO('mysql:host=localhost;dbname=restaurant','root','');

  $FirstName=$_POST["FirstName"];
  $LastName=$_POST["LastName"];
  $UserName=$_POST["UserName"];
  $Email=$_POST["Email"];
  $Password=$_POST["Password"];
  
$sql= "INSERT INTO user  VALUES ('$FirstName', '$LastName', '$UserName','$Email','$Password')";
$req=$conn->prepare($sql);
$req->execute();


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>NorthStreet</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Northstreet Restaurant">
  <meta name="author" content="A.K.">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <style>
    html, body {
  overflow-x: hidden;
  font-family: 'Lato', sans-serif;
  width: 100%;
  scroll-behavior: smooth;
  
}

a {
  text-decoration: none;
}

ul {
  list-style-type: none;
}

a:hover,
a:focus {
  text-decoration: none;
}


h1,
h2,
h3,
h4,
h5,
h6 {
  text-transform: none;
  font-weight: 600;
  font-family: 'Lato', sans-serif;
  text-align: center;
}

hr {
  border-color: #ffc266;
  border-width: 5px;
  max-width: 100%;
}


.container-h1 {
    font-family: 'Lora', serif;
    text-align: center;
    font-size: 50px;
    font-weight: 700;
    margin: 50px auto;
    color: #333;
    font-family: 'Ubuntu', sans-serif;
    
}

.btn {
  color: #fff;
  background-color: #182c39;
  margin: 20px auto;
  border-radius: 0;
  font-weight: 500;
  display: table;
  padding: 10px;

  
}

.btn:hover{
  color: #182c39;
  background-color: transparent;
  border: 1px solid #182c39;
}


.hr-h3s {
  border: 3px solid #E94B3C;
  width: 70px;
  margin: 0 auto 35px auto;
}


textarea {
  resize: none;
}

section {
  align-items: center;
  padding: 50px 60px;
  
}
.bg-section h2 {
  font-family: 'Montserrat', sans-serif;
  text-transform: none;
  color: #ffc266;
  background-color: #182c39;
  margin: 50px 0;
  padding: 25px 20px;
  border-radius: 50px;
}

.slideanim {
  visibility: hidden;
}

.slide {
  animation-name: slide;
  -webkit-animation-name: slide;
  -moz-animation-name: slide;
  animation-duration: 1.5s;
  -webkit-animation-duration: 1.5s;
  -moz-animation-duration: 1.5s;
  visibility: visible;
}

@keyframes slide {
  0% {
    opacity: 0;
    transform: translateX(50%);
  }

  100% {
    opacity: 1;
    transform: translateX(0%);
  }
}

@-webkit-keyframes slide {
  0% {
    opacity: 0;
    -webkit-transform: translateX(50%);
    transform: translateX(50%);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0%);
    transform: translateX(0%);
  }
}


/*  ******* Header + Navigation ******* */

.navbar {
  background-color: #182c39;
    border-color: rgb(51, 17, 0);
  border-color: rgba(51, 17, 0, 0.2);
  font-family: ;
  font-weight: 700;
  padding: 15px 0;
  transition: padding .5s;
}

.navbar .navbar-brand {
  color: #fff;
  font-family: 'Leckerli One', cursive;
  font-weight: 500;
  text-transform: none;
  font-size: 25px;
  padding-left: 15px;
  text-shadow: black 0.3em 0.3em 0.3em;
}

.navbar .navbar-brand:hover,
.navbar .navbar-brand:focus {
  color: #ffc266;
  transition: color 1s;
}

.navbar .navbar-nav {
  padding-right: 50px;
}

.navbar .navbar-nav > li > a {
  text-transform: uppercase;
  font-weight: 600;
  font-size: 14px;
  color: #fff;
  margin: auto 5px;
    font-family: 'Lato', sans-serif; 
    text-shadow: #222 0.3em 0.3em 0.3em;   
}

.navbar .navbar-nav > li > a:hover,
.navbar .navbar-nav > li > a:focus:hover {
  color: #ffc266;
  transition: color 1s; 
}


.navbar .navbar-nav > li.active > a:hover,
.navbar .navbar-nav > li.active > a:focus:hover {
  background-color: transparent;
}

.navbar.scrolled {
  box-shadow: 0 3px 3px rgba(0,0,0,0.1);
  padding: 5px 0;
  opacity: 0.9;
}

.jumbotron {
  margin-bottom: 0px;
    background-image: url('https://res.cloudinary.com/dbte0ueti/image/upload/v1536951689/new/jumbotron.jpg');
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
    text-shadow: black 0.3em 0.3em 0.3em;
    height: 700px;
}


.jumbotron .header-content-inner {
  font-weight: 700;
  text-transform: none;
  margin-bottom: 0;
  margin: 200px;
  font-family: 'Roboto', sans-serif;
}

.jumbotron h1 {
  font-size: 45px;
}

.jumbotron h3 {
  font-size: 25px;
}



/* ******* About ******* */

.bg-about {
  margin: auto 50px;
  background-color: white;
}

#about h3 {
  font-family: 'Roboto', sans-serif;
  color: #E94B3C;
    

}

#about .restaurant-history p {
  padding: 20px 80px;
  font-weight: ;
  font-family: 'Roboto', sans-serif;
  font-size: 15px;
  color: #444;
}

p.first::first-letter {
    font-size: 150%;
    color: #000;
}

#about h1 {
  padding-top: 35px;
}


#about .image {
  display: block;
  width: 100%;
  height: auto;
}



#about .hov-img * {
  box-sizing: border-box;
}

#about .hov-img {
  position: relative;
  display: inline-block;
  overflow: hidden;
  max-width: 100%;
  height: auto;
  margin-bottom: 10px;
}

#about .hov-img img {
  max-width: 100%;
}

#about .hov-img-bottom {
  display: block;
}

#about .hov-img-top {
  opacity: 0;
  position: absolute;
  top: 0;
    right: 0;
  bottom: 0;
    left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  -moz-transition: all 0.4s ease-in-out 0s;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -ms-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

#about .hov-img:hover .hov-img-top {
  opacity: 1;
}

#about .hov-img-text {
  text-align: center;
  font-size: 18px;
  display: inline-block;
  position: absolute;
  text-shadow: black .2em .2em .2em; 
  top: 50%;
  left: 50%;
  -moz-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

#about .hov-img-text p {
  font-size: 15px;
  line-height: 1.2em;
}

#about .hov-img-slideup {
  -moz-transform: translateY(100%);
  -webkit-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
}

#about .hov-img:hover .hov-img-slideup {
  -moz-transform: translateY(0);
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
  transform: translateY(0);
}



/* ******* Menu ******* */

.bg-menu {
  margin: auto 50px;
}

#menu .nav-pills {
  background-color: #182c39;
  border-color: transparent;
  font-weight: 500;
  color: #000;
  margin: 25px;
}

#menu .nav-pills > li > a,
#menu .nav-pills > li > a:focus {
  font-weight: 500;
  font-size: 15px;
  color: #fff;
  border-radius: 0;
  border: 1px solid #fff;
  text-transform: uppercase;
  font-family: 'Roboto', sans-serif;

}

#menu .nav-pills > li > a:hover,
#menu .nav-pills > li > a:focus:hover {
  color: #fff;
  background-color: #944743;
}

#menu .nav-pills > li > a.active,
#menu .nav-pills > li  > a.active:focus {
  background-color: #944743;
  color: #fff;
}




#menu .hr-menu {
  border: 2px solid #182c39;
  width: 100%;
}

#menu .list-group-item {
  background-color: transparent;
  border: none;
  border-bottom: 1px solid #555;
  padding: 0 auto;
}

#menu .tab-content  .tab-pane  h3 {
  text-align: center;
  font-family: 'Leckerli One', cursive;
}

#menu .list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}

#menu .list-group-item:last-child {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

#menu .list-group-item  h4 {
  text-align: left;
  color: #182c39;
  text-transform: none;
  font-size: 18px;
}

#menu .list-group-item  p {
  text-align: left;
  color: #555555;
  font-weight: 500;
  font-style: italic;
  text-transform: none;
  font-size: 14px;
}

#menu .badge {
  border-radius: 0;
  background-color: #444;
  font-size: 12px;
  color: #fff;
}

#menu .right-cover {
  background-color: #fff;
  color: #DC4C46;
  text-shadow: #DC4C46 .4em .4em .4em;
  padding: 10px;
  text-transform: none;
}


/* ******* Service ******* */


#service .service-round {
  height: 100px;
  width: 100px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 8px solid #182c39;
  text-align: center;
  display: inline-block;
  padding: 10px;
  color: #182c39;
}

#service .service-round  i {
  color: #182c39;
  
}

#service h4 {
  margin: 10px auto;
  font-size: 20px;
  color: #555;
}

#service .round:hover .fa {
  color: #ffc266;
  transition: color 2s;
  
}

#service .round:hover .service-round {
  border-color: #ffc266;
  transition: border-color 2s;
}




/* ******* Gallery ******* */


#gallery h3 {
  font-family: 'Lato', sans-serif;
  text-transform: none;
  color: #182c39;
  margin: 50px auto 10px auto;
  font-weight: 700;
}

#gallery .gallery {
  margin: 0px 80px;
}

#gallery .no-gutter > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

#gallery .caption-content { 
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.8); 
    color: #f1f1f1;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

#gallery .portfolio-item:hover .caption-content {
  bottom: 0;
  height: 100%;
}

#gallery .caption-content .fa {
  white-space: nowrap;
  color: white;
  font-size: 40px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}

#gallery .more-img {
  margin: 0 80px;
  background-color: #182c39;
}

#gallery .more-img .to-gallery {
  text-align: center;
  text-transform: none;
  color: #fff;
  padding: 10px;
  margin: 0px auto;
}

#gallery .more-img .to-gallery h4 {
  text-transform: none;
  color: #fff;
  padding: 5px;
  margin: auto;
  font-size: 16px;
}

#gallery .more-img .social-networks .fa {
  font-size: 20px;
  margin: 5px 5px;
  color: #fff;
}

#gallery .more-img .social-networks .fa:hover {
  color: #ffc266;
}



/* ******* Our staff ******* */



#staff .thumbnail-row {
  margin: auto 60px;
}

#staff h3 {
  font-family: 'Lato', sans-serif;
  text-transform: none;
  color: #182c39;
  margin: 50px auto 10px auto;
}

#staff img {
  border-radius: 50%;
  margin-bottom: 10px;
}


#staff  h5 {
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-size: 18px;
}

#staff  h6 {
  color: #555;
  font-size: 16px;
}

#staff img:hover {
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.9);
  transition: .3s;
}



/* ******* Testimonials ******* */
#testimonials .hr-testimonials {
  border: 1px solid #182c39;
  width: 50%;
  margin: 0 auto 35px auto;
}

#testimonials h3 {
  color: #182c39;
  margin: 40px auto;
}

#testimonials .carousel {
  float: none;
    margin: auto;
}


#testimonials .carousel-indicators li {
  border: 2px solid #182c39;
  background-color: #fff;
  height: 10px;
  width: 10px;
  border-radius: 50%;
}

#testimonials .carousel-indicators li.active {
  border-color: #fff;
  background-color: #182c39;
}



#testimonials .carousel-item h4 {
  font-size: 18px;
  line-height: 1.2em;
  font-weight: 500;
  padding-bottom: 20px;
}

#testimonials .carousel-item h5 {
  font-size: 15px;
  font-weight: 500;
  margin-bottom: 80px;
  font-style: italic;
}




/* ******* Contact ******* */

#contact .form-group input, 
#contact .form-group textarea {
  border: 1px solid #000;
  border-radius: 0;
  
  
}

#contact .form-group input:hover,
#contact .form-group textarea:hover {
  border-color: #ababee;
  box-shadow: 2px 2px 2px rgba(0,0,0, .2);

}

#contact .contact-buttons input, 
#contact .contact-buttons input:focus {
  color: #fff;
  background-color: #182c39;
  margin: 20px auto 40px auto;
  border-radius: 0;
  font-weight: 500;
  padding: 10px;
  border: 1px solid #182c39;
  cursor: pointer;
}

#contact .contact-buttons input:hover {
  color: #182c39;
  background-color: #fff;
  
}

#contact .left-box {
  background-color: #182c39;
  margin: 0 20px;
  font-size: 15px;
  text-transform: none;
  line-height: 1.8em;
  font-weight: 500;
  padding: 30px 50px;
  color: #fff;
}

#contact .left-box .span-contact {
  color: #ffc266;
  font-weight: 700;
  padding-right: 20px;
  font-size: 17px;
}

#contact #googleMap {
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}



/* ***** Footer ***** */

#footer {
  background-color: #182c39;
  color: white;
  font-family: 'Roboto', sans-serif;
}

#footer ul {
  list-style-type: none;
  padding-left: 0;
  line-height: 2.2;
}

#footer h5 {
  font-size: 18px;
  color: white;
  margin-top: 40px;
  margin-bottom: 10px;
  text-transform: uppercase;
}

#footer a {
  color: #aaa;
}

#footer a:hover,
#footer a:focus {
  text-decoration: none;
  color: white;
}

#footer .social-networks {
  padding-top: 20px;
  padding-bottom: 25px;
}

#footer .footer-items .fa {
  font-size: 17px;
  margin-bottom: 5px;
  background-color: white;
  color: #182c39;
  border-radius: 50%;
  padding-bottom: 25px;
  height: 30px;
  width: 30px;
  text-align: center;
  line-height: 31px;
  text-decoration: none;
  transition: color 1s;
}

#footer .footer-items {
  margin: auto;
  padding-left: 50px;
  font-size: 15px;
}

#footer .fa-facebook:hover,
#footer .fa-instagram:hover {
  border: 1px solid #fff;
  color: #fff;
  background-color: #182c39;
}


.footer-copyright {
  background-color: #10222e;
}

.footer-copyright p {
  text-align: center;
  color: #ccc;
  font-size: 15px;
  padding: 10px 0;
  margin-bottom: 0;
}

#footer .hr-foot {
  width: 80%;
    margin: 10px auto;
    border: 1px solid #fff;
}

#footer .to-top {
  color: #fff;
  font-size: 30px;
  position: fixed;
  right: 12px;
  bottom: 12px;
  height: 40px;
  width: 40px;
  text-decoration: none;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  background: rgba(0, 0, 0, 0.5); 
  background-repeat: no-repeat;
  background-position: center;
}

#footer .to-top:hover {
  background-color: #222;
  color: #fff;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}
body {
  font-family: "Merriweather", serif;
  font-size: 18px;
  font-weight: 300;
  line-height: 2;
  color: #5e493a;
  
}




h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display", serif;
  color: #000;
}

p {
  margin-bottom: 30px;
}







#fh5co-home .flexslider .fh5co-text h2 {
  margin: 0;
  padding: 0;
  font-family: "Merriweather", serif;
  font-weight: 300;
  font-size: 40px;
  letter-spacing: 2px;
  color: #fff;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
@media screen and (max-width: 768px) {
  #fh5co-home .flexslider .fh5co-text h2 {
    font-size: 20px;
  }
}
#fh5co-home .flexslider .fh5co-text h2 span {
  font-family: "Playfair Display", serif;
  font-style: italic;
  text-transform: none;
}





.fh5co-main-nav .fh5co-menu-1 a,
.fh5co-main-nav .fh5co-menu-2 a,
.fh5co-main-nav .fh5co-logo a {
  padding: 35px 10px;
  color: #130d08;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.fh5co-main-nav .fh5co-menu-1 a:hover, .fh5co-main-nav .fh5co-menu-1 a:focus, .fh5co-main-nav .fh5co-menu-1 a:active,
.fh5co-main-nav .fh5co-menu-2 a:hover,
.fh5co-main-nav .fh5co-menu-2 a:focus,
.fh5co-main-nav .fh5co-menu-2 a:active,
.fh5co-main-nav .fh5co-logo a:hover,
.fh5co-main-nav .fh5co-logo a:focus,
.fh5co-main-nav .fh5co-logo a:active {
  outline: none;
  text-decoration: none;
}
.fh5co-main-nav .fh5co-menu-1 a.active,
.fh5co-main-nav .fh5co-menu-2 a.active,
.fh5co-main-nav .fh5co-logo a.active {
  color: #fb6e14;
}
.fh5co-main-nav .fh5co-menu-1 {
  text-align: right;
  width: 40.33%;
}
.fh5co-main-nav .fh5co-menu-1 a {
  vertical-align: middle;
}
.fh5co-main-nav .fh5co-logo {
  text-align: center;
  width: 19.33%;
  font-size: 40px;
  font-family: "Playfair Display", serif;
  font-weight: 700;
  font-style: italic;
}
.fh5co-main-nav .fh5co-logo a {
  position: relative;
  top: -5px;
  display: inline-block;
}
.fh5co-main-nav .fh5co-menu-2 {
  text-align: left;
  width: 40.33%;
}

.fh5co-heading .heading {
  font-size: 50px;
  font-style: italic;
  position: relative;
  padding-bottom: 30px;
  margin-bottom: 30px;
}
@media screen and (max-width: 768px) {
  .fh5co-heading .heading {
    font-size: 30px;
  }
}
.fh5co-heading .heading:after {
  content: "";
  position: absolute;
  bottom: 0;
  width: 40px;
  height: 2px;
  left: 50%;
  background: #fb6e14;
  margin-left: -20px;
}
.fh5co-heading .sub-heading {
  font-size: 20px;
  line-height: 1.5;
  margin-bottom: 30px;
}
@media screen and (max-width: 768px) {
  .fh5co-heading .sub-heading {
    font-size: 18px;
  }
}

#fh5co-about {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  background: #e6e6e6;
  width: 100%;
}
#fh5co-about .fh5co-2col {
  width: 50%;
}
@media screen and (max-width: 1200px) {
  #fh5co-about .fh5co-2col {
    width: 100%;
  }
}
#fh5co-about .fh5co-text {
  padding: 2em 6em;
  text-align: left;
  background: #130d08 url(../images/wood_1.png) repeat;
}
@media screen and (max-width: 1200px) {
  #fh5co-about .fh5co-text {
    padding: 1em;
  }
}
#fh5co-about .fh5co-text .btn {
  color: #fff;
}
#fh5co-about .fh5co-text .heading {
  margin-bottom: 30px;
  color: #fff;
  font-style: italic;
  font-weight: 300;
  position: relative;
  padding-bottom: 30px;
  text-align: center;
}
#fh5co-about .fh5co-text .heading:after {
  content: "";
  position: absolute;
  bottom: 0;
  width: 40px;
  height: 2px;
  left: 50%;
  background: #fb6e14;
  margin-left: -20px;
}
#fh5co-about .fh5co-text p {
  line-height: 2;
  color: #a99c92;
}
#fh5co-about .fh5co-text p span.firstcharacter {
  float: left;
  color: #903;
  font-size: 75px;
  line-height: 60px;
  padding-top: 4px;
  padding-right: 10px;
  padding-left: 3px;
  font-style: italic;
  top: -20px;
  position: relative;
  color: #fff;
  font-family: "Playfair Display", serif;
}
#fh5co-about .fh5co-bg {
  background-repeat: no-repeat;
  background-size: cover;
}
@media screen and (max-width: 1200px) {
  #fh5co-about .fh5co-bg {
    width: 100%;
    min-height: 500px;
  }
}
@media screen and (max-width: 768px) {
  #fh5co-about .fh5co-bg {
    width: 100%;
    min-height: 300px;
  }
}

#fh5co-sayings {
  padding: 7em 0;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings {
    padding: 5em 0;
  }
}
#fh5co-sayings .flexslider .slides li {
  font-size: 40px;
  line-height: 1.5;
}
#fh5co-sayings .flexslider .slides li blockquote {
  padding-left: 0;
  border-left: none;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings .flexslider .slides li blockquote {
    padding: 0 20px;
  }
}
#fh5co-sayings .flexslider .slides li blockquote p {
  font-size: 40px;
  line-height: 1.5;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings .flexslider .slides li blockquote p {
    font-size: 20px;
    line-height: 1.5;
  }
}
#fh5co-sayings .flexslider .slides li blockquote p.quote-author {
  font-size: 20px;
  color: gray;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings .flexslider .slides li blockquote p.quote-author {
    font-size: 18px;
  }
}
#fh5co-sayings .flexslider .flex-control-paging {
  position: relative;
}
#fh5co-sayings .flexslider .flex-control-paging.flex-control-nav {
  bottom: -70px;
}
@media screen and (max-width: 768px) {
  #fh5co-sayings .flexslider .flex-control-paging.flex-control-nav {
    bottom: -60px;
  }
}
#fh5co-sayings .flexslider .flex-control-paging li a {
  width: 14px;
  height: 14px;
  background: rgba(0, 0, 0, 0.2);
  box-shadow: none;
}
#fh5co-sayings .flexslider .flex-control-paging li a:active, #fh5co-sayings .flexslider .flex-control-paging li a:focus {
  outline: none;
}
#fh5co-sayings .flexslider .flex-control-paging li a.flex-active {
  top: 2px;
  position: relative;
  background: transparent;
  box-shadow: none;
  border: 2px solid #fb6e14;
}

#fh5co-featured {
  padding: 7em 0;
  background: #130d08 url(../images/wood_1.png) repeat;
}
@media screen and (max-width: 768px) {
  #fh5co-featured {
    padding: 5em 0;
  }
}
#fh5co-featured .fh5co-heading .heading {
  position: relative;
  padding-top: 30px !important;
  color: #fff;
}
#fh5co-featured .fh5co-heading .heading:before, #fh5co-featured .fh5co-heading .heading::before {
  height: 64px;
  width: 64px;
  position: absolute;
  content: "";
  background: url(../images/0103-served-plate_64.png) no-repeat;
  top: 0;
  left: 50%;
  margin-top: -50px;
  margin-left: -32px;
}
#fh5co-featured .fh5co-heading .sub-heading {
  color: #a99c92;
}
#fh5co-featured .fh5co-grid {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
}
#fh5co-featured .fh5co-grid h2 {
  font-size: 20px;
  margin-bottom: 0;
}
#fh5co-featured .fh5co-grid p {
  line-height: 1.6;
  font-size: 16px;
  color: #222;
}
#fh5co-featured .fh5co-grid .pricing {
  font-size: 40px;
  display: block;
  padding-top: 20px;
}
#fh5co-featured .fh5co-grid .pricing:after {
  content: "";
  position: absolute;
  width: 40px;
  height: 2px;
  left: 50%;
  margin-left: -20px;
  background: #fb6e14;
}
#fh5co-featured .fh5co-grid .arrow-left:before, #fh5co-featured .fh5co-grid .arrow-left::before {
  content: "";
  position: absolute;
  z-index: 999;
  top: 50px;
  left: 0;
  margin-left: -15px;
  width: 0;
  height: 0;
  border-top: 15px solid transparent;
  border-bottom: 15px solid transparent;
  border-right: 15px solid #f5f5f5;
}
@media screen and (max-width: 768px) {
  #fh5co-featured .fh5co-grid .arrow-left:before, #fh5co-featured .fh5co-grid .arrow-left::before {
    right: auto !important;
    left: 15px !important;
    top: 0 !important;
    margin-top: -15px !important;
    margin-left: 0px !important;
    border-top: none !important;
    border-left: 15px solid transparent !important;
    border-right: 15px solid transparent !important;
    border-bottom: 15px solid #f5f5f5 !important;
  }
}
#fh5co-featured .fh5co-grid .arrow-right:before, #fh5co-featured .fh5co-grid .arrow-right::before {
  content: "";
  position: absolute;
  z-index: 999;
  top: 50px;
  right: 0;
  margin-right: -15px;
  width: 0;
  height: 0;
  border-top: 15px solid transparent;
  border-bottom: 15px solid transparent;
  border-left: 15px solid #f5f5f5;
}
@media screen and (max-width: 992px) {
  #fh5co-featured .fh5co-grid .arrow-right:before, #fh5co-featured .fh5co-grid .arrow-right::before {
    right: auto !important;
    left: 0 !important;
    margin-left: -15px !important;
    border-left: none !important;
    border-right: 15px solid #f5f5f5 !important;
  }
}
@media screen and (max-width: 768px) {
  #fh5co-featured .fh5co-grid .arrow-right:before, #fh5co-featured .fh5co-grid .arrow-right::before {
    right: auto !important;
    left: 15px !important;
    top: 0 !important;
    margin-top: -15px !important;
    margin-left: 0px !important;
    border-top: none !important;
    border-left: 15px solid transparent !important;
    border-right: 15px solid transparent !important;
    border-bottom: 15px solid #f5f5f5 !important;
  }
}
#fh5co-featured .fh5co-grid > .fh5co-v-half {
  width: 50%;
  text-align: center;
  position: relative;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
}
@media screen and (max-width: 992px) {
  #fh5co-featured .fh5co-grid > .fh5co-v-half {
    width: 100%;
  }
}
#fh5co-featured .fh5co-grid > .fh5co-v-half .fh5co-text {
  background: #f5f5f5;
}
#fh5co-featured .fh5co-grid > .fh5co-v-half .fh5co-special-1 {
  background: #faebcd;
}
#fh5co-featured .fh5co-grid > .fh5co-v-half .fh5co-special-1.arrow-left:before, #fh5co-featured .fh5co-grid > .fh5co-v-half .fh5co-special-1.arrow-left::before {
  border-right: 15px solid #faebcd;
}
@media screen and (max-width: 768px) {
  #fh5co-featured .fh5co-grid > .fh5co-v-half .fh5co-special-1.arrow-left:before, #fh5co-featured .fh5co-grid > .fh5co-v-half .fh5co-special-1.arrow-left::before {
    border-left: 15px solid transparent !important;
    border-right: 15px solid transparent !important;
    border-bottom: 15px solid #faebcd !important;
  }
}
#fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-v-col-2 {
  width: 50%;
  padding: 20px;
  position: relative;
}
#fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-v-col-2.fh5co-bg-img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
@media screen and (max-width: 768px) {
  #fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-v-col-2.fh5co-bg-img {
    height: 200px;
  }
}
@media screen and (max-width: 768px) {
  #fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-v-col-2 {
    width: 100%;
  }
}
#fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-h-row-2 {
  width: 100%;
  position: relative;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
}
#fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-h-row-2 > .fh5co-v-col-2 {
  width: 50%;
  position: relative;
  padding: 20px;
}
@media screen and (max-width: 768px) {
  #fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-h-row-2 > .fh5co-v-col-2 {
    width: 100%;
  }
}
#fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-h-row-2 > .fh5co-v-col-2.fh5co-bg-img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
@media screen and (max-width: 768px) {
  #fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-h-row-2 > .fh5co-v-col-2.fh5co-bg-img {
    height: 200px;
  }
}
#fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-h-row-2.fh5co-reversed .fh5co-bg-img {
  position: absolute;
  right: 0;
  bottom: 0;
  top: 0;
}
@media screen and (max-width: 992px) {
  #fh5co-featured .fh5co-grid > .fh5co-v-half > .fh5co-h-row-2.fh5co-reversed .fh5co-bg-img {
    position: relative;
    right: inherit;
    top: inherit;
    bottom: inherit;
  }
}

#fh5co-menus {
  padding: 7em 0;
}
@media screen and (max-width: 768px) {
  #fh5co-menus {
    padding: 5em 0;
  }
}
#fh5co-menus .fh5co-heading .heading {
  position: relative;
  padding-top: 30px !important;
}
#fh5co-menus .fh5co-heading .heading:before, #fh5co-menus .fh5co-heading .heading::before {
  height: 64px;
  width: 64px;
  position: absolute;
  content: "";
  background: url(../images/0401-vegan.png) no-repeat;
  top: 0;
  left: 50%;
  margin-top: -50px;
  margin-left: -32px;
}
#fh5co-menus .fh5co-heading .sub-heading {
  color: #a99c92;
}
#fh5co-menus .fh5co-food-menu {
  float: left;
  width: 100%;
  margin-bottom: 30px;
}
@media screen and (max-width: 768px) {
  #fh5co-menus .fh5co-food-menu {
    margin-bottom: 30px;
    float: left;
    width: 100%;
    clear: none !important;
  }
}
#fh5co-menus .fh5co-food-menu h2 {
  margin-bottom: 50px;
  font-style: italic;
  position: relative;
}
#fh5co-menus .fh5co-food-menu h2.fh5co-drinks {
  padding-left: 50px;
}
#fh5co-menus .fh5co-food-menu h2.fh5co-drinks:before {
  background: url(../images/0301-pina-colada.png) no-repeat;
  content: "";
  position: absolute;
  top: -20px;
  left: 0;
  width: 64px;
  height: 64px;
}
#fh5co-menus .fh5co-food-menu h2.fh5co-dishes {
  padding-left: 80px;
}
#fh5co-menus .fh5co-food-menu h2.fh5co-dishes:before {
  background: url(../images/0302-steak.png) no-repeat;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 64px;
  height: 45px;
}
#fh5co-menus .fh5co-food-menu ul {
  padding: 0;
  margin: 0;
}
#fh5co-menus .fh5co-food-menu ul li {
  padding: 0 0 20px 0;
  margin: 0 0 20px 0;
  border-bottom: 1px dotted #ccc;
  display: block;
  float: left;
  width: 100%;
}
#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc {
  clear: both;
  float: left;
  width: 80%;
}
#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc > figure {
  width: 20%;
  float: left;
  position: relative;
  margin-right: 4%;
}
#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc > figure img {
  max-width: 100%;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  margin-bottom: 0;
}
#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc > div {
  width: 75%;
  float: left;
  position: relative;
  font-size: 14px;
  line-height: 1.5;
}
#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc > div p {
  margin: 0;
}
#fh5co-menus .fh5co-food-menu ul li .fh5co-food-desc > div h3 {
  margin: 0 0 10px 0;
  padding: 0;
  font-size: 20px;
  color: #000;
}
#fh5co-menus .fh5co-food-menu ul li .fh5co-food-pricing {
  float: right;
  width: 20%;
  text-align: right;
  font-size: 20px;
  color: #fb6e14;
}

#fh5co-events {
  padding: 7em 0;
  background-color: transparent;
  background-size: cover;
  background-attachment: fixed;
  position: relative;
}
#fh5co-events > .fh5co-overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  z-index: 9;
}
#fh5co-events > .container {
  z-index: 10;
  position: relative;
}
#fh5co-events .fh5co-heading .heading {
  position: relative;
  padding-top: 30px !important;
  color: #fff;
}
#fh5co-events .fh5co-heading .heading:before, #fh5co-events .fh5co-heading .heading::before {
  height: 64px;
  width: 49px;
  position: absolute;
  content: "";
  background: url(../images/0402-chef.png) no-repeat;
  top: 0;
  left: 50%;
  margin-top: -50px;
  margin-left: -24px;
}
#fh5co-events .fh5co-heading .sub-heading {
  color: #a99c92;
}
@media screen and (max-width: 768px) {
  #fh5co-events {
    padding: 5em 0;
  }
}
#fh5co-events .fh5co-event {
  background: #fff;
  padding: 50px;
  text-align: center;
  margin-bottom: 30px;
  position: relative;
}
#fh5co-events .fh5co-event:before {
  border: 2px solid #e6e6e6;
  content: "";
  position: absolute;
  top: 15px;
  bottom: 15px;
  right: 15px;
  left: 15px;
  z-index: 0;
}
#fh5co-events .fh5co-event h3, #fh5co-events .fh5co-event .fh5co-event-meta, #fh5co-events .fh5co-event p, #fh5co-events .fh5co-event .btn {
  position: relative;
  z-index: 2;
}
#fh5co-events .fh5co-event h3 {
  padding: 0;
  margin: 0;
}
#fh5co-events .fh5co-event .fh5co-event-meta {
  margin-bottom: 20px;
  display: block;
  color: gray;
  position: relative;
  padding-bottom: 10px;
}
#fh5co-events .fh5co-event .fh5co-event-meta:after, #fh5co-events .fh5co-event .fh5co-event-meta::after {
  background: #bfbfbf;
  background: #fb6e14;
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  width: 40px;
  height: 2px;
  margin-left: -20px;
}
#fh5co-events .fh5co-event p {
  font-size: 16px;
  line-height: 1.8;
}
#fh5co-events .fh5co-event p:last-child {
  margin-bottom: 0;
}
#fh5co-events .fh5co-event .btn {
  margin-bottom: 0;
}

#fh5co-contact {
  padding: 7em 0;
}
@media screen and (max-width: 768px) {
  #fh5co-contact {
    padding: 5em 0;
  }
}
#fh5co-contact h3 {
  margin-bottom: 30px;
  font-style: italic;
}
@media screen and (max-width: 768px) {
  #fh5co-contact {
    padding: 5em 0;
  }
}
#fh5co-contact .fh5co-heading .heading {
  position: relative;
  padding-top: 30px !important;
}
#fh5co-contact .fh5co-heading .heading:before, #fh5co-contact .fh5co-heading .heading::before {
  height: 61px;
  width: 61px;
  position: absolute;
  content: "";
  background: url(../images/0203-coffee-love.png) no-repeat;
  top: 0;
  left: 50%;
  margin-top: -50px;
  margin-left: -24px;
}
#fh5co-contact .fh5co-heading .sub-heading {
  color: #a99c92;
}
#fh5co-contact .fh5co-social {
  padding: 0;
  margin: 0;
}
#fh5co-contact .fh5co-social li {
  padding: 0;
  margin: 0;
}
#fh5co-contact .fh5co-contact-info {
  padding: 0;
  margin: 0 0 1.5em 0;
}
#fh5co-contact .fh5co-contact-info li {
  position: relative;
  padding: 0;
  margin: 0 0 1.5em 0;
  padding-left: 50px;
  list-style: none;
}
#fh5co-contact .fh5co-contact-info li i {
  position: absolute;
  top: .4em;
  left: 0;
}

#fh5co-container {
  position: relative;
  z-index: 10;
}

#fh5co-footer {
  width: 100%;
  background: rgba(0, 0, 0, 0.9);
  padding: 7em 0;
  z-index: 1;
  font-size: 14px;
  line-height: 1.5;
  color: rgba(255, 255, 255, 0.5);
}
@media screen and (max-width: 768px) {
  #fh5co-footer {
    padding: 5em 0;
  }
}
@media screen and (max-width: 480px) {
  #fh5co-footer {
    height: inherit;
    position: relative;
  }
}

.fh5co-social {
  padding: 0;
  margin: 0;
}
.fh5co-social li {
  padding: 0;
  margin: 0;
  list-style: none;
  display: inline;
}
.fh5co-social li a {
  font-size: 30px;
  padding: 10px;
}
.fh5co-social li a i {
  font-size: 30px;
}
.fh5co-social li a:hover, .fh5co-social li a:active, .fh5co-social li a:focus {
  outline: none;
  text-decoration: none;
}

#fh5co-offcanvas, #fh5co-container, .fh5co-nav-toggle, #fh5co-footer {
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

#fh5co-container, .fh5co-nav-toggle, #fh5co-footer {
  z-index: 2;
  position: relative;
}

#fh5co-offcanvas {
  display: block;
  height: 100%;
  left: 0;
  overflow-y: auto;
  position: fixed;
  z-index: 1;
  top: 0;
  width: 275px;
  background: rgba(0, 0, 0, 0.9);
  padding: 0.75em 1.25em;
  -moz-transform: translateX(-275px);
  -webkit-transform: translateX(-275px);
  -ms-transform: translateX(-275px);
  -o-transform: translateX(-275px);
  transform: translateX(-275px);
  -webkit-transition: 0.9s;
  -o-transition: 0.9s;
  transition: 0.9s;
}
#fh5co-offcanvas a {
  display: block;
  color: rgba(255, 255, 255, 0.4);
  text-align: center;
  padding: 7px 0;
}
#fh5co-offcanvas a:hover, #fh5co-offcanvas a:focus, #fh5co-offcanvas a:active {
  outline: none;
  text-decoration: none;
  color: #fb6e14;
}
#fh5co-offcanvas a.active {
  color: #fb6e14;
}
@media screen and (max-width: 768px) {
  #fh5co-offcanvas {
    display: block;
  }
}
.offcanvas-visible #fh5co-offcanvas {
  -moz-transform: translateX(0px);
  -webkit-transform: translateX(0px);
  -ms-transform: translateX(0px);
  -o-transform: translateX(0px);
  transform: translateX(0px);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

@media screen and (max-width: 768px) {
  #fh5co-container, #fh5co-footer, .fh5co-nav-toggle {
    -moz-transform: translateX(0px);
    -webkit-transform: translateX(0px);
    -ms-transform: translateX(0px);
    -o-transform: translateX(0px);
    transform: translateX(0px);
  }
}
.offcanvas-visible #fh5co-container, .offcanvas-visible #fh5co-footer, .offcanvas-visible .fh5co-nav-toggle {
  -moz-transform: translateX(275px);
  -webkit-transform: translateX(275px);
  -ms-transform: translateX(275px);
  -o-transform: translateX(275px);
  transform: translateX(275px);
}

.js-sticky {
  display: block;
}
@media screen and (max-width: 768px) {
  .js-sticky {
    display: none;
  }
}

.fh5co-nav-toggle {
  cursor: pointer;
  text-decoration: none;
}
.fh5co-nav-toggle.active i::before, .fh5co-nav-toggle.active i::after {
  background: #fff;
}
.fh5co-nav-toggle:hover, .fh5co-nav-toggle:focus, .fh5co-nav-toggle:active {
  outline: none;
  border-bottom: none !important;
}
.fh5co-nav-toggle i {
  position: relative;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  width: 30px;
  height: 2px;
  color: #fff;
  font: bold 14px/.4 Helvetica;
  text-transform: uppercase;
  text-indent: -55px;
  background: #fff;
  transition: all .2s ease-out;
}
.fh5co-nav-toggle i::before, .fh5co-nav-toggle i::after {
  content: '';
  width: 30px;
  height: 2px;
  background: #fff;
  position: absolute;
  left: 0;
  -webkit-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
}

.fh5co-nav-toggle i::before {
  top: -7px;
}

.fh5co-nav-toggle i::after {
  bottom: -7px;
}

.fh5co-nav-toggle:hover i::before {
  top: -10px;
}

.fh5co-nav-toggle:hover i::after {
  bottom: -10px;
}

.fh5co-nav-toggle.active i {
  background: transparent;
}

.fh5co-nav-toggle.active i::before {
  top: 0;
  -webkit-transform: rotateZ(45deg);
  -moz-transform: rotateZ(45deg);
  -ms-transform: rotateZ(45deg);
  -o-transform: rotateZ(45deg);
  transform: rotateZ(45deg);
}

.fh5co-nav-toggle.active i::after {
  bottom: 0;
  -webkit-transform: rotateZ(-45deg);
  -moz-transform: rotateZ(-45deg);
  -ms-transform: rotateZ(-45deg);
  -o-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg);
}

.fh5co-nav-toggle {
  position: fixed;
  top: 20px;
  left: 20px;
  z-index: 9999;
  display: block;
  margin: 0 auto;
  display: none;
  border-bottom: none !important;
  background: rgba(0, 0, 0, 0.7);
  padding: 0px 10px 10px 10px;
  cursor: pointer;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
@media screen and (max-width: 768px) {
  .fh5co-nav-toggle {
    display: block;
  }
}

#fh5co-type {
  padding: 7em 0;
  background-color: transparent;
  background-size: cover;
  background-attachment: fixed;
  position: relative;
}
#fh5co-type > .fh5co-overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  z-index: 9;
}
#fh5co-type > .container {
  z-index: 10;
  position: relative;
}
#fh5co-type .fh5co-type {
  float: left;
  width: 100%;
  text-align: center;
}
@media screen and (max-width: 768px) {
  #fh5co-type .fh5co-type {
    margin-bottom: 30px;
  }
}
#fh5co-type h3 {
  margin-bottom: 30px;
  font-style: italic;
  color: #fff;
  font-size: 40px;
  text-align: center;
  padding-top: 110px;
}
#fh5co-type h3.with-icon {
  position: relative;
}
#fh5co-type h3.with-icon:before, #fh5co-type h3.with-icon::before {
  content: "";
  position: absolute;
  left: 50%;
  margin-left: -54px;
  margin-top: -125px;
  width: 104px;
  height: 104px;
  border: 2px solid rgba(255, 255, 255, 0.2);
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
#fh5co-type h3.with-icon.icon-1:before, #fh5co-type h3.with-icon.icon-1::before {
  background: url(../images/type-1.png) no-repeat center center;
}
#fh5co-type h3.with-icon.icon-2:before, #fh5co-type h3.with-icon.icon-2::before {
  background: url(../images/type-2.png) no-repeat center center;
}
#fh5co-type h3.with-icon.icon-3:before, #fh5co-type h3.with-icon.icon-3::before {
  background: url(../images/type-3.png) no-repeat center center;
}
#fh5co-type h3.with-icon.icon-4:before, #fh5co-type h3.with-icon.icon-4::before {
  background: url(../images/type-4.png) no-repeat center center;
}
#fh5co-type p {
  color: rgba(255, 255, 255, 0.7);
}

.js .to-animate, .js
.to-animate-2 {
  opacity: 0;
}

.row-padded {
  padding-bottom: 40px;
}





  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .social a{
  font-size: 4.5em;
  padding : 3rem;
}
  .fa-facebook{
    color: #3b5998;
  }
  .fa-twitter{
    color: #00aced;
  }
   .fa-google-plus-g{
    color: #dd4b39;
  }
   .fa-instagram{
    color: #517fa4;
  }
   .fa-youtube{
    color: #bb0000;
  }
  .fa-facebook:hover,
  .fa-twitter:hover,
  .fa-google-plus-g:hover,
  .fa-instagram:hover,
  .fa-youtube:hover  {
    color : #d5d5d5;
  }
  footer{
    background-color: #3f3f3f;
    color: #d5d5d5;
    padding-top: 2rem;
  }
  hr.light{
    border-top: 1px solid #d5d5d5 ;
    width: 75%;
  }
  body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
  </style>
</head>
<body>
  <header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
     <img id="myPage" src="images/image26.jpg" style="width:80px;"><i>
    NORTHSTREET</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i style='font-size:24px' class='fas'>&#xf015;</i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Menu3.php"><i style='font-size:24px' class='fas'>&#xf2e7;</i> Menu</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="font-size:24px" class="fa">&#xf000;</i>
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  onclick="popUp()" href="#">Commandes</a>
          <a href="#reservation" class="dropdown-item" href="ssc.php">Reservation</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link " href="about.php" ><i style='font-size:24px' class='fas'>&#xf095;</i>Contact</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#" id="log" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" ><i class='fas fa-user' style='font-size:24px'></i>Connexion</a>
      </li>
      
        <div id="id01" class="modal">
  <form class="modal-content animate" action="SignUp.php" method="post" style="width: 50%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h1><i>Login</i></h1>
    </div>

    <div class="container">
      <label for="UserName"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="UserName" required>

      <label for="Password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
        
      <button id="login" type="submit" name="submitlog" style="background-color: brown;">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

      </li>
      <li class="nav-item">
        <a id="sign" class="nav-link " href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><i class='fas fa-user' style='font-size:24px'></i>Inscription</a>
       </li>
      
        <div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="index.php" method="POST" style="width: 50%;">
    <div class="container">
      <h1><i>Sign Up</i></h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="FirstName"><b>FirstName</b></label>
      <input type="text" placeholder="Enter Prenom" name="FirstName" required>

      <label for="LastName"><b>LastName</b></label>
      <input type="text" placeholder="Enter Nom" name="LastName" required>

      <label for="UserName"><b>UserName</b></label>
      <input type="text" placeholder="Enter UserName" name="UserName" required>
      <label for="Email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Email" required>

      


      <label for="Password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>

     
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button id="signup" type="submit" name="submit" class="signupbtn" style="background-color: brown">Sign Up</button>
      </div>
    </div>
  </form>
</div>

  
</li>
    </ul>
    
  </div>
  
</nav>

  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image1.jpg"  width="1100" height="100">
      <div class= "carousel-caption">
        <h3><i>Welcome to the Greatest Restaurant</i></h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg"  width="1100" height="100">
      <div class= "carousel-caption">
        <h3><i>Welcome to the Greatest Restaurant</i></h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image9.jpg"   width="1100" height="100">
      <div class= "carousel-caption">
        <h3><i>Welcome to the Greatest Restaurant</i></h3>
      </div>
    </div>
  </div>
  </header>

  <section>
  <div id="fh5co-about" data-section="about">
      <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/image1.jpg)"></div>
      <div class="fh5co-2col fh5co-text">
        <h2 class="heading to-animate">About Us</h2>
        <p class="to-animate"><span class="firstcharacter">F</span>ar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
      </div>
    </div>
  </section>

  <div id="fh5co-contact" data-section="reservation">
      <div class="container">
        <div class="row text-center fh5co-heading row-padded">
          <div class="col-md-12 col-md-offset-2">
           <center> <h2 id="reservation" class="heading to-animate">Reserve a Table</h2></center>
            <p class="sub-heading to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 to-animate-2">
            <h3>Contact Info</h3>
            <ul class="fh5co-contact-info">
              <li class="fh5co-contact-address ">
               <i style='font-size:24px' class='fas'>&#xf015;</i>
                22, Northstreet Road
                  Melbourne, Victoria
                    Australia
              </li>
              <li><i style='font-size:24px' class='fas'>&#xf095;</i> +091 1234 5678</li>
              <li><i style='font-size:24px' class='fas'>&#xf0e0;</i>info@trello.co</li>
              <li><i style='font-size:24px' class='fas'>&#xf0ac;</i><a target="_blank">trello.co</a></li>
            </ul>
          </div>
          <div class="col-md-6 to-animate-2" >

            <form action="Reservation.php" method="post"><h3><i>Reservation</i></h3>
            <div class="form-group ">
              <label for="Name" class="sr-only">Name</label>
              <input id="Name" name="Name"class="form-control" placeholder="Name" type="text">
            </div>
            <div class="form-group ">
              <label for="Email" class="sr-only">Email</label>
              <input id="Email"  name="Email" class="form-control" placeholder="Email" type="Email">
            </div>
            <div class="form-group">
              <label for="occation" class="sr-only">Occation</label>
              <input id="occation" name="occation" class="form-control" placeholder="Occation" type="text">
            </div>
            <div class="form-group ">
              <label for="ReservationDate" class="sr-only">Date</label>
              <input id="ReservationDate" name="ReservationDate"class="form-control" placeholder="Date" type="text">
            </div>
            <div class="form-group ">
              <label for="ReservationTime" class="sr-only">Time</label>
              <input id="ReservationTime" name="ReservationTime" class="form-control" placeholder="Time" type="text">
            </div>
              
            
            <div class="form-group ">
              <input class="btn btn-primary" style="background-color: brown "value="Send Message" type="submit" name="submit" >
            </div></form>
            
            </div>
        </div>
      </div>
    </div>
    

    
  </div>
   <a class="to-top" href="#myPage" title="toTop">
            <i class="fa fa-chevron-up"></i>
        </a>
    </footer>
             <div class="container mb-5">
  

            </div>
            <div class="row">
                <div id="googleMap" style="height:300px;width:100%;"></div>

                <!-- Add Google Maps -->
                <script src="http://maps.googleapis.com/maps/api/js"></script>
                <script>
                var myCenter = new google.maps.LatLng(-37.817110, 144.959128);

                function initialize() {
                var mapProp = {
                  center:myCenter,
                  zoom:12,
                  scrollwheel:false,
                  draggable:false,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };

                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var marker = new google.maps.Marker({
                  position:myCenter,
                  });

                marker.setMap(map);
                }

                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
        </div>    
    </section>
   
     <hr class="my-4">
    <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-12">
        <h2>Contact</h2>
      </div>
      <div class="col-12 social padding">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
  </div>
</div>
</div>

    <footer class="-bg-footer" id="footer">
        <div class="container-fluid">
            <div class="row footer-align">
                <div class="col-md-4 col-sm-4">
                    <h5>Northstreet</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <p class="footer">
                            The EU-27 has an estimated 1.6m businesses involved in 'accommodation and food services', more than 75% of which are small and medium enterprises.
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Our contact</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <address>
                                22, Northstreet Road
                                <br>
                                Melbourne, Victoria
                                <br>
                                Australia
                                <br>
                                <i class="fa fa-phone address"></i> +091 1234 5678
                                <br>
                                <i class="fa fa-fax address"></i> +876 5432 1234
                                <br>
                                <i class="fa fa-envelope address"></i> <a href="mailto:northstreet@gmail.com">northstreet@gmail.com</a>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Open hours</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <ul>
                            <li>Mon-Fri: 08:00-22:00</li>
                            <li>Sat    : 09:00-22:00</li>
                            <li>Sun    : 09:00-16:00</li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         <a class="to-top" href="#myPage" title="toTop">
            <i class="fa fa-chevron-up"></i>
        </a>
    </footer>
    <script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


$("#login").click(function(){
  $("#log").hide();
  $("#sign").hide();
});

    function popUp(){
      alert("Impossible,il faut se connecter")
    }



</script>



<script src="script.js"></script>

</body>

</html>
