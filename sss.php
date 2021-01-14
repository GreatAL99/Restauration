<?php
session_start();
if(isset($_POST["submit"])){
// Create connection
$conn = new PDO('mysql:host=localhost;dbname=restaurant','root','');

    $FirstName=$_POST["fname"];
    $LastName=$_POST["lname"];
    $Email=$_POST["email"];
    $PhoneNumber=$_POST["phonenumber"];
    $ReservationDate=$_POST["reservationd"];
    $ReservationTime=$_POST["reservationt"];
    $Number=$_POST["number"];
    $textarea=$_POST["textarea"];


$sql= "INSERT INTO reservation VALUES ('$FirstName', '$LastName', '$PhoneNumber','$ReservationDate','$ReservationTime','$Number','$textarea')";
$req=$conn->prepare($sql);
$req->execute();


}

?>


<html  style="overflow: hidden;" class="supernova">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head><meta name="robots" content="noindex,follow" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&url=http%3A%2F%2Fwww.jotform.com%2Fform%2F43084276238963" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&url=http%3A%2F%2Fwww.jotform.com%2Fform%2F43084276238963" title="oEmbed Form">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/form.css?v3&v=3.3.14205"/>
<link href="https://cdn.jotfor.ms/css/calendarview.css?v3&v=3.3.14205" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3&v=3.3.14205" />
<style type="text/css">
.form-section { 
background: rgba(255, 255, 255, 0.07);
}
.form-label-left{
width:150px;
}
.form-line{
padding-top:12px;
padding-bottom:12px;
}
.form-label-right{
width:150px;
}
body, html{
margin:0;
padding:0;
background:#3e3e3e;
}
.form-all{
margin:0px auto;
padding-top:0px;
width:750px;
color:rgb(255, 255, 255) !important;
font-family:'Rambla';
font-size:16px;
}
.form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
color: #555;
}
</style>
<style type="text/css" id="form-designer-style">
/* Injected CSS Code */
@import //fonts.googleapis.com/css?family=Rambla:light,lightitalic,normal,italic,bold,bolditalic;
/* line 80, //www.jotform.com/themes/css/style.less */
.form-all {
font-family: "Rambla", sans-serif;
}
/* line 113, //www.jotform.com/themes/css/style.less */
.form-all {
width: 100%;
max-width: 750px;
}
/* line 125, //www.jotform.com/themes/css/style.less */
.form-label-left,
.form-label-right {
width: 150px;
}
/* line 136, //www.jotform.com/themes/css/style.less */
.form-label {
white-space: normal;
}
/* line 138, //www.jotform.com/themes/css/style.less */
.form-label.form-label-auto {
display: inline-block;
float: left;
text-align: left;
}
/* line 160, //www.jotform.com/themes/css/style.less */
.form-label-left {
display: inline-block;
white-space: normal;
float: left;
text-align: left;
}
/* line 167, //www.jotform.com/themes/css/style.less */
.form-label-right {
display: inline-block;
white-space: normal;
float: left;
text-align: right;
}
/* line 174, //www.jotform.com/themes/css/style.less */
.form-label-top {
white-space: normal;
display: block;
float: none;
text-align: left;
}
/* line 187, //www.jotform.com/themes/css/style.less */
.form-all {
font-size: 16px;
}
/* line 199, //www.jotform.com/themes/css/style.less */
.form-label {
font-weight: bold;
}
/* line 203, //www.jotform.com/themes/css/style.less */
.form-checkbox-item label,
.form-radio-item label {
font-weight: normal;
}
/* line 258, //www.jotform.com/themes/css/style.less */
.supernova {
background-color: rgba(255, 255, 255, 0.07);
}
/* line 260, //www.jotform.com/themes/css/style.less */
.supernova body {
background-color: transparent;
}
@media screen and (min-width: 810px) {
/* line 270, //www.jotform.com/themes/css/style.less */
.supernova {
background-color: #3e3e3e;
}
/* line 274, //www.jotform.com/themes/css/style.less */
.supernova .form-all {
border: 1px solid #252525;
-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
}
}
@media screen and (min-width: 810px) and (max-width: 870px) {
/* line 288, //www.jotform.com/themes/css/style.less */
.supernova {
padding: 30px 0;
}
}
@media screen and (min-width: 870px) and (max-width: 930px) {
/* line 292, //www.jotform.com/themes/css/style.less */
.supernova {
padding: 60px 0;
}
}
@media screen and (min-width: 930px) {
/* line 296, //www.jotform.com/themes/css/style.less */
.supernova {
padding: 90px 0;
}
}
/* line 304, //www.jotform.com/themes/css/style.less */
.form-all {
background-color: rgba(255, 255, 255, 0.07);
border: 1px solid transparent;
}
/* line 310, //www.jotform.com/themes/css/style.less */
.form-header-group {
border-color: rgba(230, 230, 230, 0.07);
}
/* line 315, //www.jotform.com/themes/css/style.less */
.form-matrix-table tr {
border-color: rgba(230, 230, 230, 0.07);
}
/* line 317, //www.jotform.com/themes/css/style.less */
.form-matrix-table tr:nth-child(2n) {
background-color: rgba(242, 242, 242, 0.07);
}
/* line 330, //www.jotform.com/themes/css/style.less */
.form-all {
color: #ffffff;
}
/* line 335, //www.jotform.com/themes/css/style.less */
.form-header-group .form-header {
color: #ffffff;
}
/* line 336, //www.jotform.com/themes/css/style.less */
.form-header-group .form-subHeader {
color: #ffffff;
}
/* line 339, //www.jotform.com/themes/css/style.less */
.form-sub-label {
color: #ffffff;
}
/* line 344, //www.jotform.com/themes/css/style.less */
.form-label-top,
.form-label-left,
.form-label-right {
color: #ffffff;
}
/* line 350, //www.jotform.com/themes/css/style.less */
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input,
.form-checkbox-item label,
.form-radio-item label {
color: #ffffff;
}
/* line 386, //www.jotform.com/themes/css/style.less */
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
background-color: rgba(62, 62, 62, 0.13);
border-color: rgba(0, 0, 0, 0.25);
-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
-moz-background-clip: padding;
-webkit-background-clip: padding;
background-clip: padding -box;
}
/* line 403, //www.jotform.com/themes/css/style.less */
.form-line-active {
-webkit-transition-property: all;
-moz-transition-property: all;
-ms-transition-property: all;
-o-transition-property: all;
transition-property: all;
-webkit-transition-duration: 0.3s;
-moz-transition-duration: 0.3s;
-ms-transition-duration: 0.3s;
-o-transition-duration: 0.3s;
transition-duration: 0.3s;
-webkit-transition-timing-function: ease;
-moz-transition-timing-function: ease;
-ms-transition-timing-function: ease;
-o-transition-timing-function: ease;
transition-timing-function: ease;
background-color: rgba(62, 62, 62, 0.28);
}
/* line 413, //www.jotform.com/themes/css/style.less */
.form-line-error {
-webkit-transition-property: all;
-moz-transition-property: all;
-ms-transition-property: all;
-o-transition-property: all;
transition-property: all;
-webkit-transition-duration: 0.3s;
-moz-transition-duration: 0.3s;
-ms-transition-duration: 0.3s;
-o-transition-duration: 0.3s;
transition-duration: 0.3s;
-webkit-transition-timing-function: ease;
-moz-transition-timing-function: ease;
-ms-transition-timing-function: ease;
-o-transition-timing-function: ease;
transition-timing-function: ease;
background-color: rgba(194, 37, 37, 0.45);
}
/* line 418, //www.jotform.com/themes/css/style.less */
.form-line-error label {
color: rgba(23, 4, 4, 0.45);
}
/* line 421, //www.jotform.com/themes/css/style.less */
.form-line-error input:not(#coupon-input),
.form-line-error textarea {
border-color: rgba(108, 21, 21, 0.45);
-webkit-box-shadow: 0 0 3px rgba(108, 21, 21, 0.45);
-moz-box-shadow: 0 0 3px rgba(108, 21, 21, 0.45);
box-shadow: 0 0 3px rgba(108, 21, 21, 0.45);
}
/* ömer */
/* line 432, //www.jotform.com/themes/css/style.less */
.form-radio-item,
.form-checkbox-item {
padding-bottom: 0px !important;
}
/* line 434, //www.jotform.com/themes/css/style.less */
.form-radio-item:last-child,
.form-checkbox-item:last-child {
padding-bottom: 0;
}
/* ömer */
/*.ctrl-custom-size(@bgSize, @tickSize, @tickOffsetTop, @tickOffsetLeft, @radius) {
input {
display: none;
}
label {
position: relative;
margin-left: 0;
}
label:before {
content: '';
position: relative;
display: inline-block;
vertical-align: baseline;
margin-right: 4px;
.border-box();
.rounded(@radius);
width: @bgSize;
height: @bgSize;
}
label:after {
content: '';
position: absolute;
z-index: 10;    
display: inline-block;
opacity: 0;
top:@tickOffsetTop;
left:@tickOffsetLeft;
width: @tickSize;
height: @tickSize;
.rounded(@radius);
}
input:checked + label:after {
opacity: 1;
}
}*/
/* line 1100, //www.jotform.com/themes/css/style.less */
.supernova {
background-size: contain;
background-repeat: no-repeat;
background-attachment: scroll;
background-position: center top;
background-size: cover;
}
@media screen and (min-width: 810px) {
/* line 1122, //www.jotform.com/themes/css/style.less */
.supernova {
background-image: url("//www.jotform.com/uploads/meunal/form_files/Untitled.jpg");
}
}
/* line 1135, //www.jotform.com/themes/css/style.less */
.form-all {
background-image: url("//www.jotform.com/themes/img/blank.gif");
background-repeat: no-repeat;
background-attachment: scroll;
background-position: center top;
}
/* line 1164, //www.jotform.com/themes/css/style.less */
.form-header-group {
background-repeat: no-repeat;
background-attachment: scroll;
background-position: center top;
}
/* line 1191, //www.jotform.com/themes/css/style.less */
.form-line {
margin-top: 15px;
margin-bottom: 15px;
}
/* line 1209, //www.jotform.com/themes/css/style.less */
.form-line {
padding: 15px 60px;
}
/* line 1223, //www.jotform.com/themes/css/style.less */
.form-all .form-textbox,
.form-all .form-radio-other-input,
.form-all .form-checkbox-other-input,
.form-all .form-captcha input,
.form-all .form-spinner input,
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next,
.form-all .qq-upload-button,
.form-all .form-error-message {
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
}
/* line 1235, //www.jotform.com/themes/css/style.less */
.form-all .form-sub-label {
margin-left: 3px;
}
/* line 1240, //www.jotform.com/themes/css/style.less */
.form-all .form-textarea {
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
}
/* line 1255, //www.jotform.com/themes/css/style.less */
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
}
/* line 1261, //www.jotform.com/themes/css/style.less */
.form-all .form-sub-label {
margin-left: 3px;
}
/* line 1289, //www.jotform.com/themes/css/style.less */
.form-all {
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
}
/* line 1315, //www.jotform.com/themes/css/style.less */
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next,
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
font-size: 1.15em;
padding: 12px 18px;
font-family: "Rambla", sans-serif;
font-size: 15px;
}
/* line 1374, //www.jotform.com/themes/css/style.less */
.form-all .form-submit-print {
margin-left: 0 !important;
margin-right: 0 !important;
}
/* line 1404, //www.jotform.com/themes/css/style.less */
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next,
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
color: #ffffff !important;
background: rgba(0, 0, 0, 0.52);
box-shadow: none;
text-shadow: none;
}
/*
TODO: Significant improvement possibility:
following import statement is not required in design mode,
but it should be inside the exported css of current design, in the form itself
when it is shown to people. Being of this here, causing re-drawn problems.
we should find a way to only include this in css send while saving current design
see prepareModel4Save for implementation for @buttonFontType
*/
/*
& when ( @buttonFontType = google ) {
@import (css) "@{buttonFontLink}";
}
*/
/* line 1449, //www.jotform.com/themes/css/style.less */
h2.form-header {
line-height: 1.618em;
}
/* line 1456, //www.jotform.com/themes/css/style.less */
h2 ~ .form-subHeader {
line-height: 1.5em;
}
/* line 1470, //www.jotform.com/themes/css/style.less */
.form-header-group {
text-align: left;
}
/* line 1481, //www.jotform.com/themes/css/style.less */
.form-header-group {
background-image: url("//www.jotform.com/themes/img/blank.gif");
}
/* line 1711, //www.jotform.com/themes/css/style.less */
.form-line-column {
width: auto;
}
/*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
/* line 1756, //www.jotform.com/themes/css/style.less */
.form-captcha input,
.form-spinner input,
.form-error-message {
padding: 4px 3px 2px 3px;
}
/* line 1771, //www.jotform.com/themes/css/style.less */
.form-header-group {
font-family: "Rambla", sans-serif;
}
/* line 1792, //www.jotform.com/themes/css/style.less */
.form-section {
padding: 0px 0px 0px 0px;
}
/* line 1803, //www.jotform.com/themes/css/style.less */
.form-header-group {
margin: 0px 0px 0px 0px;
}
/* line 1814, //www.jotform.com/themes/css/style.less */
.form-header-group {
padding: 24px 60px 24px 60px;
}
/* line 1835, //www.jotform.com/themes/css/style.less */
.form-header-group {
background-color: rgba(0, 0, 0, 0.27);
}
/* line 1853, //www.jotform.com/themes/css/style.less */
.form-textbox,
.form-textarea {
border-width: 1px;
border-style: "solid";
border-color: rgba(255, 255, 255, 0.65);
background-color: rgba(62, 62, 62, 0.6);
color: #ffffff;
padding: 4px 3px 2px 3px;
}
/* line 1863, //www.jotform.com/themes/css/style.less */
.form-textbox {
height: 30px;
}
/* line 1869, //www.jotform.com/themes/css/style.less */
.form-textarea {
height: 150px;
}
/* line 1886, //www.jotform.com/themes/css/style.less */
.form-dropdown {
border-color: rgba(255, 255, 255, 0.65);
color: #ffffff;
background-color: #3e3e3e;
-webkit-appearance: menulist-button;
height: 40px;
}
/* line 1936, //www.jotform.com/themes/css/style.less */
.form-dropdown {
margin: 0;
-webkit-appearance: none;
-moz-appearance: button;
appearance: none;
}
/* line 1943, //www.jotform.com/themes/css/style.less */
li[data-type="control_dropdown"] .form-input {
position: relative;
}
/* line 1947, //www.jotform.com/themes/css/style.less */
li[data-type="control_dropdown"] .form-input:before {
width: 18px;
content: "";
display: inline-block;
top: 1px;
bottom: 1px;
right: 1px;
border-left: 1px solid #828282;
background-color: #fff;
-webkit-border-radius: 0 4px 4px 0;
-moz-border-radius: 0 4px 4px 0;
border-radius: 0 4px 4px 0;
border-left-color: rgba(255, 255, 255, 0.65);
background-color: #3e3e3e;
position: absolute;
pointer-events: none;
cursor: pointer;
}
/* line 1987, //www.jotform.com/themes/css/style.less */
li[data-type="control_dropdown"] .form-input:after {
content: "";
display: inline-block;
width: 0;
height: 0;
border-width: 5px;
border-color: #828282 transparent transparent transparent;
border-color: rgba(255, 255, 255, 0.65) transparent transparent transparent;
position: absolute;
border-style: solid;
top: 44%;
right: 5px;
pointer-events: none;
cursor: pointer;
}
/* line 2164, //www.jotform.com/themes/css/style.less */
.form-label {
font-family: "Rambla", sans-serif;
}
/*__INSPECT_SEPERATOR__*/
.form-header-group{
}
.form-header{
font-weight : 300;
}
.form-label.form-label-top{
font-weight : 300;
font-size : 14pt;
}
.form-input-wide{
}
.form-line{
}
.form-textarea.custom-hint-group{
}
.form-section{
}
/* Injected CSS Code */
</style>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-simple_grey.css?3&v=3.3.14205"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js?3.3.14205"></script>
<script src="https://cdn.jotfor.ms/js/prototype.js?v=3&v=3.3.14205" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/json2.js?v=3&v=3.3.14205" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/protoplus.js?v=3&v=3.3.14205" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/protoplus-ui-form.js?v=3&v=3.3.14205" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/jotform.js?v=3&v=3.3.14205" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/calendarview.js?v=3&v=3.3.14205" type="text/javascript"></script>
<script type="text/javascript">
JotForm.debug = true;
window.alert = function(){ console.log(arguments); }
JotForm.init(function(){
setTimeout(function() {
$('input_7').hint('ex: myname@example.com');
}, 20);
JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
JotForm.calendarOther = {"today":"Today"};
var languageOptions = document.querySelectorAll('#langList li'); 
for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("5", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
} 
JotForm.setCalendar("5", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
JotForm.formatDate({date:(new Date()), dateField:$("id_"+5)});
JotForm.displayLocalTime("hour_5", "min_5", "ampm_5");
setTimeout(function() {
$('input_6').hint('ex: 3');
}, 20);
if (JotForm.accessible) $(input_9).setAttribute('tabindex',0);
JotForm.setCustomHint( 'input_9', 'Ex: We want to get welcomed with a glass of champaign.' );
/*INIT-END*/
});
JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"TABLE RESERVATION FORM","type":"control_head"},{"name":"submit","qid":"2","text":"Make Reservation","type":"control_button"},{"name":"fullName3","qid":"3","text":"Full Name","type":"control_fullname"},{"name":"phoneNumber4","qid":"4","text":"Phone Number","type":"control_phone"},{"name":"reservationDate","qid":"5","text":"Reservation Date","type":"control_datetime"},{"name":"howMany","qid":"6","text":"How many person will you be with?","type":"control_number"},{"name":"email7","qid":"7","text":"E-mail","type":"control_email"},{"name":"reservationTime","qid":"8","text":"Reservation Time","type":"control_time"},{"name":"notesoptional","qid":"9","text":"Notes (optional)","type":"control_textarea"}]);
setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"TABLE RESERVATION FORM","type":"control_head"},{"name":"submit","qid":"2","text":"Make Reservation","type":"control_button"},{"name":"fullName3","qid":"3","text":"Full Name","type":"control_fullname"},{"name":"phoneNumber4","qid":"4","text":"Phone Number","type":"control_phone"},{"name":"reservationDate","qid":"5","text":"Reservation Date","type":"control_datetime"},{"name":"howMany","qid":"6","text":"How many person will you be with?","type":"control_number"},{"name":"email7","qid":"7","text":"E-mail","type":"control_email"},{"name":"reservationTime","qid":"8","text":"Reservation Time","type":"control_time"},{"name":"notesoptional","qid":"9","text":"Notes (optional)","type":"control_textarea"}]);}, 20); 
</script>
<style>html { -webkit-overflow-scrolling: touch; overflow: scroll; }body { height: 100%; overflow: scroll; }</style>
<script>document.addEventListener("DOMContentLoaded", function(){
var formOffset = window.getComputedStyle(document.querySelector("div.form-all"), ":before").getPropertyValue("top");
if(parseInt(formOffset.replace("px", "")) < 0){
document.querySelector("div.form-all").style.top = ( -1 * parseInt(formOffset.replace("px", "")) + "px");
document.querySelector("div.form-all").style.marginBottom = (-1 * parseInt(formOffset.replace("px", "")) + "px");
}
}, false);
</script></head>
<body  style="overflow-x:hidden;">
<form class="jotform-form"  method="POST" action="sss.php" >
<input type="hidden" name="formID" value="43084276238963" />
<input type="hidden" id="JWTContainer" value="" />
<input type="hidden" id="cardinalOrderNumber" value="" />
<div role="main" class="form-all" style="margin:0 auto;">
<ul class="form-section page-section">
<li id="cid_1" class="form-input-wide" data-type="control_head">
<div class="form-header-group ">
<div class="header-text httal htvam">
<h2 id="header_1" class="form-header" data-component="header"><i>
RESERVATION </i>
</h1>
</div>
</div>
</li>
<li class="form-line jf-required" data-type="control_fullname" id="id_3">
<label class="form-label form-label-top" id="label_3" for="first_3">
Full Name
<span class="form-required">
*
</span>
</label>
<div id="cid_3" class="form-input-wide jf-required">
<div data-wrapper-react="true">
<span class="form-sub-label-container " style="vertical-align:top">
<input type="FirstName" id="fname" name="q3_fullName3[first]" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" />
<label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px"> First Name </label>
</span>
<span class="form-sub-label-container " style="vertical-align:top">
<input type="LastName" id="lname" name="q3_fullName3[last]" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" />
<label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px"> Last Name </label>
</span>
</div>
</div>
</li>
<li class="form-line jf-required" type="Email" id="email">
<label class="form-label form-label-top" id="label_7" for="input_7">
E-mail
<span class="form-required">
*
</span>
</label>
<div id="cid_7" class="form-input-wide jf-required">
<input type="email" id="input_7" name="q7_email7" class="form-textbox validate[required, Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_7" required="" />
</div>
</li>
<li class="form-line jf-required" type="PhoneNumber" id="phonenumber">
<label class="form-label form-label-top"  for="phonenumber">
Phone Number
<span class="form-required">
*
</span>
</label>
<div id="cid_4" class="form-input-wide jf-required">
<div data-wrapper-react="true">
<span class="form-sub-label-container " style="vertical-align:top">
<input type="tel" id="input_4_area" name="q4_phoneNumber4[area]" class="form-textbox validate[required]" size="6" value="" data-component="areaCode" aria-labelledby="label_4 sublabel_4_area" required="" />
<span class="phone-separate" aria-hidden="true">
 -
</span>
<label class="form-sub-label" for="input_4_area" id="sublabel_4_area" style="min-height:13px"> Area Code </label>
</span>
<span class="form-sub-label-container " style="vertical-align:top">
<input type="PhoneNumber" id="phonenumber"  class="form-textbox validate[required]" size="12" value="" data-component="phone" aria-labelledby="label_4 sublabel_4_phone" required="" />
<label class="form-sub-label" for="phonenumber"  style="min-height:13px"> Phone Number </label>
</span>
</div>
</div>
</li>
<li class="form-line form-line-column form-col-1 jf-required" type="reservationd" id="ReservationDate">
<label class="form-label form-label-top"  for="reservationd">
Reservation Date
<span class="form-required">
*
</span>
</label>
<div id="cid_5" class="form-input-wide jf-required">
<div data-wrapper-react="true">
<span class="form-sub-label-container " style="vertical-align:top">
<input type="tel" class="form-textbox validate[required, limitDate]" id="month_5" name="q5_reservationDate[month]" size="2" data-maxlength="2" value="11" required="" aria-labelledby="label_5 sublabel_5_month" />
<span class="date-separate" aria-hidden="true">
 -
</span>
<label class="form-sub-label" for="month_5" id="sublabel_5_month" style="min-height:13px"> Month </label>
</span>
<span class="form-sub-label-container " style="vertical-align:top">
<input type="tel" class="currentDate form-textbox validate[required, limitDate]" id="day_5" name="q5_reservationDate[day]" size="2" data-maxlength="2" value="30" required="" aria-labelledby="label_5 sublabel_5_day" />
<span class="date-separate" aria-hidden="true">
 -
</span>
<label class="form-sub-label" for="day_5" id="sublabel_5_day" style="min-height:13px"> Day </label>
</span>
<span class="form-sub-label-container " style="vertical-align:top">
<input type="tel" class="form-textbox validate[required, limitDate]" id="year_5" name="q5_reservationDate[year]" size="4" data-maxlength="4" value="2019" required="" aria-labelledby="label_5 sublabel_5_year" />
<label class="form-sub-label" for="year_5" id="sublabel_5_year" style="min-height:13px"> Year </label>
</span>
<span class="form-sub-label-container " style="vertical-align:top">
<img class="showAutoCalendar" alt="Pick a Date" id="input_5_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle;margin-left:5px" data-component="datetime" aria-hidden="true" />
<label class="form-sub-label" for="input_5_pick" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap"> Date Picker Icon </label>
</span>
</div>
</div>
</li>
<li class="form-line form-line-column form-col-2" type="ReservationTime" id="reservationt">
<label class="form-label form-label-top"  for="reservationt"> Reservation Time </label>
<div id="cid_8" class="form-input-wide">
<div data-wrapper-react="true">
<span class="form-sub-label-container " style="vertical-align:top">
<select class="time-dropdown form-dropdown" id="input_8_hourSelect" name="q8_reservationTime[hourSelect]" data-component="time-hour" aria-labelledby="label_8 sublabel_8_hour">
<option>  </option>
<option value="1"> 1 </option>
<option value="2"> 2 </option>
<option value="3"> 3 </option>
<option value="4"> 4 </option>
<option value="5"> 5 </option>
<option value="6"> 6 </option>
<option value="7"> 7 </option>
<option selected="" value="8"> 8 </option>
<option value="9"> 9 </option>
<option value="10"> 10 </option>
<option value="11"> 11 </option>
<option value="12"> 12 </option>
</select>
<span class="date-separate">
 :
</span>
<label class="form-sub-label" for="input_8_hourSelect" id="sublabel_8_hour" style="min-height:13px"> Hour </label>
</span>
<span class="form-sub-label-container " style="vertical-align:top">
<select class="time-dropdown form-dropdown" id="input_8_minuteSelect" name="q8_reservationTime[minuteSelect]" data-component="time-minute" aria-labelledby="label_8 sublabel_8_minutes">
<option>  </option>
<option value="00"> 00 </option>
<option value="10"> 10 </option>
<option value="20"> 20 </option>
<option value="30"> 30 </option>
<option value="40"> 40 </option>
<option selected="" value="50"> 50 </option>
</select>
<label class="form-sub-label" for="input_8_minuteSelect" id="sublabel_8_minutes" style="min-height:13px"> Minutes </label>
</span>
<span class="form-sub-label-container " style="vertical-align:top">
<select class="time-dropdown form-dropdown" id="input_8_ampm" name="q8_reservationTime[ampm]" data-component="time-ampm" aria-labelledby="label_8 sublabel_8_ampm">
<option selected="" value="AM"> AM </option>
<option value="PM"> PM </option>
</select>
<label class="form-sub-label" for="input_8_ampm" id="sublabel_8_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap"> AM/PM Option </label>
</span>
</div>
</div>
</li>
<li class="form-line jf-required" type="Number" id="number">
<label class="form-label form-label-top" id="number" for="number">
How many person will you be with?
<span class="form-required">
*
</span>
</label>
<div id="cid_6" class="form-input-wide jf-required">
<input type="number" id="input_6" name="q6_howMany" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:60px" size="5" value="" placeholder="ex: 3" data-component="number" aria-labelledby="label_6" required="" />
</div>
</li>
<li class="form-line" data-type="textarea" id="textarea">
<label class="form-label form-label-top" id="textarea" for="textarea"> Notes (optional) </label>
<div id="cid_9" class="form-input-wide">
<textarea id="input_9" class="form-textarea" name="q9_notesoptional" cols="40" rows="6" data-component="textarea" aria-labelledby="label_9"></textarea>
</div>
</li>
<li class="form-line" data-type="control_button" id="id_2">
<div id="cid_2" class="form-input-wide">
<div style="text-align:left" class="form-buttons-wrapper ">
<button id="input_2" type="submit" class="form-submit-button form-submit-button-simple_grey" data-component="button">
Make Reservation
</button>
<span>
 
</span>
<button id="input_reset_2" type="reset" class="form-submit-reset form-submit-button-simple_grey" data-component="button">
Clear Form
</button>
</div>
</div>
</li>
<li style="display:none">
Should be Empty:
<input type="text" name="website" value="" />
</li>
</ul>
</div>
<input type="hidden" id="simple_spc" name="simple_spc" value="43084276238963" />
<script type="text/javascript">
document.getElementById("si" + "mple" + "_spc").value = "43084276238963-43084276238963";
</script>
</form></body>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
if( typeof window.top.FormTemplate !== "undefined" ){
window.top.FormTemplate.hideFormLoaderIndicators();
} 
if( typeof window.parent.Embed !== "undefined" ){
window.parent.Embed.hideFormLoaderIndicators();
} 
if( document.querySelectorAll("div.formFooter").length ){
document.querySelector("div.formFooter").remove();  
}
});
</script>
</html>