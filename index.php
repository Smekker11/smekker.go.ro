
<!DOCTYPE html>
<html><head>
<title id="title">mekker ti-a luat ip-ul</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#HUDcanvas {
  background-image: url('canvas.bmp');
}
body {
  background-image: url('coffee-bean.bmp');
}
h1 {
  position: absolute;
  left: 222px;
  top: 0px;
}
canvas {
  position: absolute;
  top: 20px;
}
#p1 {
  position: absolute;
  left: 222px;
  top: 40px;
}
h2 {
  position: absolute;
  left: 15px;
  top: 20px;
}
#p3 {
  position: absolute;
  left: 10px;
  top: 520px;
}
#p2 {
  position: absolute;
  left: 222px;
  top: 60px;
}
h3 {
  position: absolute;
  left: 15px;
  top: 40px;
}
#a2 {
  position: absolute;
  left: 15px;
  top: 125px;
}
#a3 {
  position: absolute;
  left: 15px;
  top: 100px;
}
#a4 {
  position: absolute;
  left: 15px;
  top: 80px;
}
#b1 {
  position: absolute;
  left: 15px;
  top: 505px;
}
#techP {
  position: absolute;
  left: 15px;
  top: 330px;
}
#arm {
  position: absolute;
  left: 15px;
  top: 380px;
}
#dell {
  position: absolute;
  left: 70px;
  top: 360px;
}
.introDIV {
  position: absolute;
  width: 700px;
  height: 200px;
  top: 100px;
  left: 222px;
}
#mem {
 position: absolute;
 top: 480px;
 left: 15px;
}
#raul {
 position: absolute;
 top: 10px;
 left: 850px;
 opacity: 0;
}
#ip-tr {
 position: absolute;
 top: 520px;
 left: 350px;
 opacity: 0;
}
#kocka {
 position: absolute;
 top: 50px;
 left: 550px;
 opacity: 0;
}
#alex {
 position: absolute;
 top: 1000px;
 left: 1px;
 opacity: 0;
}
#marq {
 position: absolute;
 top: 2px;
 opacity: 0;
}
#ARTIKOLcanvas {
 background-image: url('fsd.png');
 position: absolute;
 top: 138px;
 left: 225px;
 opacity: 1;
}
#sus {
 position: absolute;
 top: 143px;
 left: 230px;
 opacity: 1;
}
#attn {
 position: absolute;
 top: 183px;
 left: 600px;
 opacity: 1;
}
#art {
 opacity: 1;
}
#aip {
 position: absolute;
 top: 140px;
 left: 16px;
}
#fold {
 position: absolute;
 top: 180px;
 left: 28px;
}
#mekkecharm{
 position: absolute;
 top: 450px;
 left: 620px;
}
#booksmek{
 position: absolute;
 top: 470px;
 left: 620px;
}
#teapot{
 position: absolute;
 top: 450px;
 left: 40px;
 font-size: 25px;
 color: blue;
}
#yutmap{
 position: absolute;
 top: 160px;
 left: 16px;
}
</style>
<meta name="google-site-verification" content="4tc7m9iXhATLDJ1HUaG3wVLPXmu-vm_V8vOnne2ujBc" />
</head>
<body>
<canvas id="HUDcanvas" width="200" height="500" style="border: 6px solid rgb(0, 0, 0);"></canvas>
<h1 id="h1" style="color: yellow;">sus bus amogus funeee mekk.ga</h1>
<p id="p1" style="color: yellow;">Attention some links include the
HTTPS protocol</p>
<p id="p2" style="color: yellow;">NO BUDGET FOR HTTPS WE MAY BE BIBRUXZ</p>
<h2 style="color: black; font-size: 15px;">
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$moment = date("H:i:s | d/m/Y");
echo "IP IS: ";
echo $ip;
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
$logstrem = fopen("log.txt", "a");
fwrite($logstrem, "IP: $ip || COUNTRY: $details->country || REGION: $details->region || CITY: $details->city || MOMENT OF REQUEST: $moment \n");
?>
</h2>
<p id="p3" style="color: red; font-size: 25px;">O sa imi pierd toti banii la pacanele pentru ca saracia face omul. - Mitrut Camataru'</p>
<button id="b1" style="size: 50px;" type="button" onclick="titleMovmento();">titleMovmento();</button>
<button id="mem" onclick="merm();">Free Download</button>
<a id="teapot" href="http://smekker.go.ro/teapot">teapot</a>
<h3 style="color: orange; font-size: 16px;">PAGE LINKS:</h3>
<a id="a2" style="color: rgb(140, 255, 102); font-size: 14px;" href="https://smekker.go.ro:420">iDRAC</a>
<a id="a3" style="font-size: 20px; color: rgb(0, 128, 255);" href="http://smekker.go.ro/old-home/hrusca-pusca">HRUSCA PUSCA</a>
<a id="aip" style="font-size 20px; color: black;" href="log.txt">IP LOG</a>
<a id="yutmap" href="http://smekker.go.ro:8123">MAP 2kbps</a>
<a id="a4" style="font-size: 20px; color: lime;" href="https://github.com/Smekker11/smekker.go.ro">GITHUB</a>
<p id="techP" style="color: black; font-size: 16px;">Powered by:</p>
<img id="arm" src="arm.jpg" alt="arm" height="50" width="50">
<img id="dell" src="dell.png" alt="dell" height="100" width="100">
<img id="fold" src="fold.gif" width="160" height="160"></img>
<!-- sa fim seriosi -->
<img id="raul" src="raul.png"></img>
<img id="ip-tr" src="ip.png"></img>
<img id="kocka" src="kocka_kep.gif"></img>
<img id="alex" src="extra-wide-alex.jpg"></img>
<!--okbin artikol-->
<canvas id="ARTIKOLcanvas" width="600" height="390" style="border: 2px solid rgb(0, 0, 0);"></canvas>
<p width="20" height="10" id="art" style="position: absolute; color: black; background-color: green; top: 380px; left:230px;">It has been observed that having multiple elements on one</p>
<p width="20" height="10" id="art" style="position: absolute; color: black; background-color: green; top: 395px; left:230px;">page with identical ID attributes for long periods of time</p>
<p width="20" height="10" id="art" style="position: absolute; color: black; background-color: green; top: 410px; left:230px;">will cause spontaneous combustion and nuclear war. If you</p>
<p width="20" height="10" id="art" style="position: absolute; color: black; background-color: green; top: 425px; left:230px;">are caught using multiple identical IDs the internet militia</p>
<p width="20" height="10" id="art" style="position: absolute; color: black; background-color: green; top: 440px; left:230px;">will shoot you on sight. It is about the least safe thing you</p>
<p width="20" height="10" id="art" style="position: absolute; color: black; background-color: green; top: 455px; left:230px;">can do. – zzzzBov Aug 31, 2011 at 19:23</p>
<img id="sus"  src="amgus.jpg" width="370" height="240"></img>
<img id="attn" width="200" height="200" src="attn.gif"></img>
<button id="mekkecharm" onclick="mekkecharm();">lucky mekke charm</button>
<button id="booksmek" onclick="booksmek();">book of smek</button>
<div class="introDIV">
<p style="color: yellow;" > binbus OPEN CMD TYPE "NSLOOKUP" india paki paki tuk tuk</p>
<marquee id="marq" style="color: red;" bgcolor="yellow">mem.mp4 ALERT NO DOWNLOAD PUNJABI VIBRUZ</marquee>
<!-- binbus mem img-->
</div>

<script>
<!-- bubton script -->
function mekkecharm(){
 window.location.replace("http://smekker.go.ro/lucky-mekke-charm/"); 
}
function booksmek(){
 window.location.replace("http://smekker.go.ro/book-of-smek/");
}
var i;
i = 2;
function changeTitleGA() {
  document.getElementById("title").innerHTML = "plic-punkga???";
  document.getElementById("h1").innerHTML = "plic-punkga??? schitzofrenie";
}
function changeTitleGO() {
  document.getElementById("title").innerHTML = "smekker.go.ro";
  document.getElementById("h1").innerHTML = "aparent smekk.go.ro SC RCS RDS SRL <3.";
}
function titleMovmento() {
  i++;
  if (i%2==0) {
     changeTitleGA();
  }
  else
  {
     changeTitleGO();
  }
}
</script> 

<!-- binbus mem scriptt -->
<script>
function merm() {
 document.getElementById("marq").style.opacity = 1;
 document.getElementById("raul").style.opacity = 1;
 document.getElementById("ip-tr").style.opacity = 1;
 document.getElementById("alex").style.opacity = 1;
 document.getElementById("kocka").style.opacity = 1;
 document.getElementsById("art").style.opacity = 0;
 document.getElementsById("sus").style.opacity = 0;
 document.getElementsById("attn").style.opacity = 0;
 document.getElementsById("ARTIKOLcanvas").style.opacity = 0;
}
</script>
</body></html>
