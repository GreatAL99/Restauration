<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delicious</title>
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
<body>
<style >
  body {
  font-size: 15px;
    line-height: 1.52;
    color: #717f86;
    font-size: 16px;
  font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    overflow-x: hidden;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
#banner{
    background: url(../img/banner-bg.jpg) no-repeat center top;
    background-size: cover;
    min-height: 630px;
}
.bg-color{
    background-color: RGBA(0, 0, 0, 0.61);
    min-height: 630px;
}
#banner h2{
    font-family: 'Satisfy', sans-serif;
    font-size: 45px;
    color: #FFB03B;
}
#banner p{
    font-family: 'PT Sans', sans-serif;
    color: #fcfcfc;
    font-size: 34px;
}
.section-padding{
    padding: 60px 0px;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 60px;
    transition: 0.5s;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}
.closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px !important;
    margin-left: 50px;
}
#main {
    transition: margin-left .5s;
    padding: 20px;
}

.header-h {
    color: #FFB03B;
    font-size: 46px;
    font-family: 'Satisfy', sans-serif;
    font-weight: 300;
}
.header-p {
    color: #9699a6;
    font-size: 16px;
}
.msg-row {
    margin-top: 56px;
}
.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
}
.bg-13 {background-color: #f04e4e;
    width: 70px;
    height: 70px;
    border-radius: 50%;
}
.contact-icon {
    color: #fff;
    position: absolute;
    left: 34px;
    font-size: 32px;
    margin-top: 18px;
}
.bg-1 {
    background-color: #fecc17;
    width: 70px;
    height: 70px;
    border-radius: 50%;
}
.bg-14 {
    background-color: #ccdb38;
    width: 70px;
    height: 70px;
    border-radius: 50%;
}
.dark-blue {
    color: #31364c;
    font-size: 24px;
    margin-top: 0;
}
.light-blue {
    color: #9699a6;
    font-size: 16px;
    margin-bottom: 1px;
}
.media-body {
    margin-left: 10px;
    padding-left: 13px;
}
.media-2 {
    margin-top: 30px;
}
.newinput .form-group {
    margin: 8px 0 9px !important;
    padding-bottom: 10px;
}
.contact-form .form-control {
    color: #000 !important;
    font-size: 16px;
    font-weight: normal;
    height: 38px;
    line-height: 1.42857;
    padding: 7px 0;
}




.heading{
    font-family: 'Satisfy', sans-serif;
    color: #FFB03B;
    font-size: 24px;
}
.marb-35{
    margin-bottom: 35px;
}
.details-list{
    margin-top: 20px;
}
.details-list ul li i {
    margin-right: 10px;
    color: #ffb03b;
}
#about img
{
    border: 5px solid rgb(255, 176, 59);
    border-radius: 2px;
}
#event{
    background: url('../img/res02.jpg') no-repeat;
    background-size: cover;
}
.left-images img {
    height: 308px;
    width: 100%;
}
.left-images{
    padding: 0px;
}
.details-text {
    border-right: 2px solid #841b2d;
}
.details-text {
    background-color: rgba(14, 4, 4, 0.70);
    border-right: 2px solid #A87F41;
    padding: 20px 20px 30px 30px;
    overflow: auto;
}
.content-holder h2 {
    color: #FFB03B;
    font-size: 32px;
    padding-bottom: 15px;
    font-family: 'Satisfy', sans-serif;
}
.content-holder address strong {
    color: #FFB03B;
    padding: 10px 0px;
}
.details-text p {
    color: #E8E8E8;
    line-height: 26px;
    letter-spacing: 1px;
    font-weight: 300;
}
.btn-read-more {
    background: #FFB03B;
    padding: 7px 19px;
    font-family: 'Roboto', sans-serif;
    font-size: 12px;
    line-height: 17px;
    font-weight: 400;
    letter-spacing: 1px;
    border-radius: 3px;
    color: #000;
    text-transform: uppercase;
    margin-top: 10px;
}
.btn-read-more:hover
{
    color: #000;
}
#Container .mix{
    display: none;
}
.menu-restaurant{
    width: 50%;
    float: left;
    padding: 15px;
    position: relative;
}
.menu-restaurant .menu-title {
    float: left;
    font-family: Montserrat,arial;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #FFB03B;
}
.menu-restaurant .menu-line {
    position: absolute;
    bottom: 6px;
    border-bottom: 1px dotted rgba(0,0,0,.3);
    margin-left: .6rem;
    margin-right: .6rem;
}
.menu-restaurant .menu-price {
    font-weight: 600;
    position: absolute;
    right: 0;
    top: 0;
}
.menu-restaurant .menu-subtitle {
    display: block;
    float: left;
    color: #B1B1B1;
    font-family: Satisfy,'Open Sans',arial;
    font-size: 1.2rem;
}
.menu-restaurant span.clearfix {
    position: relative;
    display: block;
}

#menu-flters ul li a.active, #menu-flters ul li a:hover {
    background: #FFB03B;
    color: #fff;
    border: 1px solid #FFB03B;
}
#menu-flters ul li {
    display: inline-block;
    color: #fff;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 40px;
}
#menu-flters ul li a {
    padding: 10px 20px;
    font-size: 14px;
    color: #565656;
    border-radius: 0px;
    border: 1px solid #BBBBBB;
    text-decoration: none;
    cursor: pointer;
}

.footer {
    width: 100%;
    background-color: #222;
    position: relative;
    z-index: 1;
}
.footer a {
    color: #fff;
}

.footer .footer-top {
    padding-top: 9rem;
    padding-bottom: 5rem;
}
.footer .widget-title, .footer .widget-title a {
    font-size: 1.4rem;
    font-weight: 700;
    letter-spacing: 0.2rem;
    color: #999;
}
.footer .widget-title{
    padding-bottom: 20px;
    font-family: 'Satisfy', sans-serif;
    font-size: 44px;
    color: #FFB03B;
}

.list-horizontal li {
    display: inline-block;
}
@media (min-width: 768px) and (max-width: 980px) {
    .content-holder h2 {
        font-size: 23px;
    }
    .details-text p {
        line-height: 16.6px;
    }
}
@media (min-width: 451px) and (max-width: 767px) {
    .details-text {
        border:0px;
        border-bottom: 2px solid #A87F41;
    }
}
@media (min-width: 20px) and (max-width: 450px) {
    .menu-restaurant {
    width: 100%;
    }
    .details-text {
        border:0px;
        border-bottom: 2px solid #A87F41;
    }
    .header-h {
        font-size: 35px;
    }
    .header-p, body{
        font-size: 14px;
    }
    .about-info, .mr-15{
        margin-bottom: 15px;
    }
    #banner h2{
        font-size: 25px;
    }
    #banner p{
        font-size: 25px;
    }
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

<section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <img src="images/image 11.jpg" width="100" height="100">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p"><i>Bienvenue</i> </p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" id="all" data-filter=".menu-restaurant">Show All</a></li>
            <li><a class="filter " id="breakfast"data-filter=.breakfast>Entrée</a></li>
            <li><a class="filter"id="lunch" data-filter=".lunch">Plat</a></li>
            <li><a class="filter" id="dinner" data-filter=".dinner">Dessert</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">SAUMON</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">9€50</span>
            </span>
            <span class="menu-subtitle">Gravelax, betterave, guacamole d’avocat, radis, vinaigrette agrumes/soja</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">ŒUF PARFAIT</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">9€50</span>
            </span>
            <span class="menu-subtitle">Œuf bio, hollandaise, petit pois, poutargue, ail noir, chips de pain</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">CHAMPIGNONS DE PARIS</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">9€50</span>
            </span>
            <span class="menu-subtitle">Tartelette feuilletée, oignon doux, duxelles de champignons, ris de veau croustillant, jaune d’œuf confit</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">BŒUF</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">19€50</span>
            </span>
            <span class="menu-subtitle">Joue de bœuf confite, butternut rôtie, truffe & jus corsé mirabelle</span>
          </div>

          <div class="lunch menu-restaurant" >
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">POULET FERMIER</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">19€50</span>
            </span>
            <span class="menu-subtitle">Suprême pressé & foie gras, légumes glacés, purée de pommes de terre fumées, jus réduit</span>
          </div>

          <div class="lunch menu-restaurant" >
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">CABILLAUD</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">21€50</span>
            </span>
            <span class="menu-subtitle">Juste nacré, fenouil croquant, patate douce, bisque de homard</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">ROUGET BARBET</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">18€00</span>
            </span>
            <span class="menu-subtitle">Farci, juste snacké, fine ratatouille, bisque, rouille</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">FOIE GRAS</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">16€00</span>
            </span>
            <span class="menu-subtitle">Marbré, magret de canard fumé, pomme en gelée & en marmelade</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">RIS DE VEAU</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">18€00</span>
            </span>
            <span class="menu-subtitle">Cœur de ris de veau braisé, gnocchis à l’estragon, purée d’ail, artichaut, noisettes torréfiées, jus de viande</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">POIRE</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">8€50</span>
            </span>
            <span class="menu-subtitle">Pochée au poivre Voatsiperifery, ganache chocolat, financier fève de tonka, sorbet poire</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">MILLE-FEUILLE</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">8€50</span>
            </span>
            <span class="menu-subtitle">Framboise/pistache</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">TARTE CITRON</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">8€50</span>
            </span>
            <span class="menu-subtitle">Tarte citron meringuée, sorbet yuzu/coriandre</span>
          </div>
        </div>


      </div>
    </div>
  </section>
  <script >
    $("#lunch").click(function(){
      $(".all").hide();
      $(".breakfast").hide();
      $(".lunch").fadeIn();
      $(".dinner").hide();
    })
    $("#all").click(function(){
      $(".all").fadeIn();
      $(".breakfast").fadeIn();
      $(".lunch").fadeIn();
      $(".dinner").fadeIn();
    })
    $("#breakfast").click(function(){
      $(".all").hide();
      $(".breakfast").fadeIn();
      $(".lunch").hide();
      $(".dinner").hide();
    })
    $("#dinner").click(function(){
      $(".all").hide();
      $(".breakfast").hide();
      $(".lunch").hide();
      $(".dinner").fadeIn();
    })
  </script>
 

 
</body>
</html>

 