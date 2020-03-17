
<html>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<title>:: 3xp1r3 Cyber Army ::</title>

<link href="http://i61.tinypic.com/10547pk.jpg" rel="icon" type="image/png"/>
<link href='http://fonts.googleapis.com/css?family=Orbitron:700' rel='stylesheet' type='text/css'>
<meta content="HacKeD By 3xp1r3-CRY5T@L 8L@CK | W3 Ar3 Bangladeshi Und3rGr0und H@ck3r"   name="description"/>
<meta content="HacKeD By 3xp1r3-CRY5T@L 8L@CK | W3 Ar3 Bangladeshi Und3rGr0und H@ck3r"  name="keywords"/>
<meta content="HacKeD By 3xp1r3-CRY5T@L 8L@CK | W3 Ar3 Bangladeshi Und3rGr0und H@ck3r"  name="Abstract"/>
<meta name="HacKeD By 3xp1r3-CRY5T@L 8L@CK | W3 Ar3 Bangladeshi Und3rGr0und H@ck3r"/>
<meta property="og:image" content="http://i61.tinypic.com/10547pk.jpg"/>



<script type="text/javascript">
var DADrightclicktheme = 'Dark';
var DADrightclickimage = 'http://oi57.tinypic.com/2j4pl6x.jpg';
</script>
<script type="text/javascript" src="http://yondarkness.googlecode.com/files/AntiCopas.js"> </script>




  <script language="JavaScript">
var brzinakucanja = 200;
var pauzapor = 2000;
var vremeid = null;
var kretanje = false;
var poruka = new Array();
var slporuka = 0;
var bezporuke = 0;
poruka[0] = "~~3xp1r3 Cyber Army~~"

function prikaz() {
   var text = poruka[slporuka];

   if (bezporuke < text.length) {
      if (text.charAt(bezporuke) == " ")
               bezporuke++
           var ttporuka = text.substring(0, bezporuke + 1);
           document.title = ttporuka;
           bezporuke++
           vremeid = setTimeout("prikaz()", brzinakucanja);
            kretanje = true;
   } else {
      bezporuke = 0;
      slporuka++
      if (slporuka == poruka.length)
         slporuka = 0;
      vremeid = setTimeout("prikaz()", pauzapor);
      kretanje = true;
   }
}
function stop() {
   if (kretanje)
      clearTimeout(vremeid);
   kretanje = false
}
function start() {
   stop();
   prikaz();
}
start();
    </script>

  










</HEAD>





<body>



 











<EMBED src="http://fs5.directupload.net/images/user/160603/27iwqu7k.swf" type="application/x-shockwave-flash" wmode="transparent" width="1" height="1">

<body background="http://i50.tinypic.com/154x5s1.gif" bgcolor="black">









<style type="text/css">
<!--
/*Do not Alter these. Set for alignment*/
.css1{
position:absolute;top:0px;left:0px;
width:16px;height:16px;
font-family:Arial,sans-serif;
font-size:16px;
text-align:center;
font-weight:bold;
}
.css2{
position:absolute;top:0px;left:0px;
width:10px;height:10px;
font-family:Arial,sans-serif;
font-size:10px;
text-align:center;
}
//-->
</style>



<div align="center">

<br> 

</font></center>

</object>


<div id="example1">
  <p align="center"></p>

  </div>
<script language="JavaScript">


TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;	// Never run.
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 20 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
  if(this.running) return;
  if(typeof this.origText == "undefined") {
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);	// We haven't finished loading yet.  Have patience.
    return;
  }
  if(this.currentText == "") this.element.innerHTML = "";
//  this.origText = this.origText.replace(/<([^<])*>/, "");     // Strip HTML from text.
  if(this.currentChar < this.origText.length) {
    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
      this.tagBuffer = "<";
      this.inTag = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
      this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
      this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
      this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
    this.currentChar++;
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
  } else {
	this.currentText = "";
	this.currentChar = 0;
        this.running = false;
        this.finishedCallback();
  }
}

</script>


<center>
<style type="text/css">
#image{
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
<script type="text/javascript" src="http://www.p0wersurge.com/js/jquery-css-transform.js"></script>
<script type="text/javascript" src="http://www.p0wersurge.com/js/rotate3Di.js"></script>
<a href="https://www.facebook.com/groups/3xp1r3.CA/" ><img src="http://i61.tinypic.com/10547pk.jpg" width="30" height="30" id="image" style="-webkit-transform: skew(0deg, 0deg) scale(1, 1); height: 100px; display: block; width: 100px; overflow: hidden;"></a>
<script type="text/javascript">
var open = function(){
    $("#image").animate({height:300},{ duration: 2000, queue: false });
    $("#image").animate({width:300},{ duration: 2000, queue: false });
}
var rotation = function (){
   $("#image").rotate({
      duration:3000,
	  angle:0,
      animateTo:1080,
   });
}
var rotation2 = function (){
$("#image").rotate3Di(360, 1000);
setTimeout('rotation2()', 3500)
}
rotation();
open();
setTimeout('rotation2()', 4800)
</script>











<h1><center><script type="text/javascript"></script><script>
farbbibliothek = new Array(); farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100"); 
farbbibliothek[1] = new Array("#00FF00","#000000","#00FF00","#00FF00"); 
farbbibliothek[2] = new Array("#00FF00","#FF0000","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00"); 
farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000"); 
farbbibliothek[5] = new Array("#000000","#000000","#000000","#FFFFFF","#FFFFFF","#FFFFFF"); 
farbbibliothek[6] = new Array("#0000FF","#FFFF00"); 
farben = farbbibliothek[4];
function farbschrift() { 
for(var i=0 ; i<Buchstabe.length; i++) { 
document.all["a"+i].style.color=farben[i]; } 
farbverlauf(); } 
function string2array(text) { 
Buchstabe = new Array(); 
while(farben.length<text.length) { 
farben = farben.concat(farben); } 
k=0; 
while(k<=text.length) { 
Buchstabe[k] = text.charAt(k); 
k++; } } 
function divserzeugen() { 
for(var i=0 ; i<Buchstabe.length; i++) { 
document.write("<span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span>"); } 
farbschrift(); } 
var a=1; 
function farbverlauf() { for(var i=0 ; i<farben.length; i++) { farben[i-1]=farben[i]; } 
farben[farben.length-1]=farben[-1]; 
 setTimeout("farbschrift()",30); } 
// Zu Demonstrationszwecken***************** 
var farbsatz=1; 
function farbtauscher() { 
farben = farbbibliothek[farbsatz]; 
while(farben.length<text.length) { 
farben = farben.concat(farben); } 
farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001)); } 
setInterval("farbtauscher()",4500); 
text= ".: [ Hacked By 3xp1r3-CRY5T@L 8L@CK ] :."; 
//h 
string2array(text);
divserzeugen(); 
//document.write(text);   
//
/*function expand() {
for(x = 0; x < 50; x++) {
window.moveTo(screen.availWidth * -(x - 50) / 100, screen.availHeight * -(x - 50) / 100);
window.resizeTo(screen.availWidth * x / 50, screen.availHeight * x / 50);}
window.moveTo(0,0);
window.resizeTo(screen.availWidth, screen.availHeight);}
expand();*/
</script></h1>














<div class="style2">
<div id="example1"></div>
<p id="example2">
<b><i><font color="white">=============================================================<sup></sup>
<br><font color="red"><sup></sup><br>connect to login database...
<sup>
</sup><br><font color="lime">connected....</font>
<sup></sup><br>Hello Admin , how are you ? :v<br>
<font color="lime">i am from Bangladesh</font><sup></sup>
<br> please improve your website security<sup></sup>
<br><font color="lime">Don't worry,your Data-base 100% save, :D </font><sup></sup>
<br> Connecting ....<sup></sup>
<br>Connected oK + + + <sup></sup>

</font>
<font color="lime">
<sup></sup><br> [0wned by ] 3xp1r3-CRY5T@L 8L@CK
<sup></sup><br><font color="red">[+] Thanks To  [+]</font><sup></sup>
<br>| ::::  ||| | | 3xp1r3 Cyber Army | | W3 Ar3 Bangladeshi Und3rGr0und H@ck3r  |||   &amp; ALL Muslim HACKERS||| ::::  |


</font>


<sup></sup><sup><br></sup><br><font color="white">=============================================================</i></div></p></br>

<center><a href="https://www.facebook.com/nazrul.n8" >
<img src="https://scontent-hkg3-1.xx.fbcdn.net/v/t1.0-1/p160x160/1917052_10207117930680228_3238821145016689820_n.jpg?oh=cf6873efffc696eab9d023330e9a7652&oe=57D9AFBC" width="100" height="100"></a><br>
<a href="https://www.facebook.com/nazrul.n8" > ::: CRY5T@L 8L@CK :::</a>

</center>
</br>

<div align="center" class="shdw">Remember we can see you</div><br /><div align="center"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSviYKOGYrvtonZz3W-28kqLm3If4mgXu1APZ-rpscRRklmkPE" border="0" width="500" height="150" alt="CRY5T@L 8L@CK" /></div>

<script type="text/javascript">
//Define first typing example:
new TypingText(document.getElementById("example1"));
//Define second typing example (use "slashing" cursor at the end):
new TypingText(document.getElementById("example2"), 50, function(i){
var ar = new Array("_"," ","_","_"); return " " + ar[i.length %
ar.length]; });
//Type out examples:
TypingText.runAll();
</script>


<style type="text/css">
    /* Circle Text Styles */
    #outerCircleText {
    /* Optional - DO NOT SET FONT-SIZE HERE, SET IT IN THE SCRIPT */
    font-style: italic;
    font-weight: bold;
    font-family: 'comic sans ms', verdana, arial;
    color: #FFF;
    /* End Optional */
     
    /* Start Required - Do Not Edit */
    position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}
    #outerCircleText div {position: relative;}
    #outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}
    /* End Required */
    /* End Circle Text Styles */
    </style>
     
     
    <script type="text/javascript">
    ;(function(){
     
     
    var msg = "--------===3xp1r3-CRY5T@L 8L@CK Was Here===-------";
    var size = 24;
    var circleY = 0.75; var circleX = 2;
    var letter_spacing = 5;
    var diameter = 10;
    var rotation = 0.4;
    var speed = 0.3;
     
    ////////////////////// Stop Editing //////////////////////
     
    if (!window.addEventListener && !window.attachEvent || !document.createElement) return;
     
    msg = msg.split('');
    var n = msg.length - 1, a = Math.round(size * diameter * 0.208333), currStep = 20,
    ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [],
    o = document.createElement('div'), oi = document.createElement('div'),
    b = document.compatMode && document.compatMode != "BackCompat"? document.documentElement : document.body,
     
    mouse = function(e){
     e = e || window.event;
     ymouse = !isNaN(e.pageY)? e.pageY : e.clientY; // y-position
     xmouse = !isNaN(e.pageX)? e.pageX : e.clientX; // x-position
    },
     
    makecircle = function(){ // rotation/positioning
     if(init.nopy){
      o.style.top = (b || document.body).scrollTop + 'px';
      o.style.left = (b || document.body).scrollLeft + 'px';
     };
     currStep -= rotation;
     for (var d, i = n; i > -1; --i){ // makes the circle
      d = document.getElementById('iemsg' + i).style;
      d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) + 'px';
      d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px';
     };
    },
     
    drag = function(){ // makes the resistance
     y[0] = Y[0] += (ymouse - Y[0]) * speed;
     x[0] = X[0] += (xmouse - 20 - X[0]) * speed;
     for (var i = n; i > 0; --i){
      y[i] = Y[i] += (y[i-1] - Y[i]) * speed;
      x[i] = X[i] += (x[i-1] - X[i]) * speed;
     };
     makecircle();
    },
     
    init = function(){ // appends message divs, & sets initial values for positioning arrays
     if(!isNaN(window.pageYOffset)){
      ymouse += window.pageYOffset;
      xmouse += window.pageXOffset;
     } else init.nopy = true;
     for (var d, i = n; i > -1; --i){
      d = document.createElement('div'); d.id = 'iemsg' + i;
      d.style.height = d.style.width = a + 'px';
      d.appendChild(document.createTextNode(msg[i]));
      oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;
     };
     o.appendChild(oi); document.body.appendChild(o);
     setInterval(drag, 25);
    },
     
    ascroll = function(){
     ymouse += window.pageYOffset;
     xmouse += window.pageXOffset;
     window.removeEventListener('scroll', ascroll, false);
    };
     
    o.id = 'outerCircleText'; o.style.fontSize = size + 'px';
     
    if (window.addEventListener){
     window.addEventListener('load', init, false);
     document.addEventListener('mouseover', mouse, false);
     document.addEventListener('mousemove', mouse, false);
      if (/Apple/.test(navigator.vendor))
       window.addEventListener('scroll', ascroll, false);
    }
    else if (window.attachEvent){
     window.attachEvent('onload', init);
     document.attachEvent('onmousemove', mouse);
    };
     
    })();
     
    </script>






<script>
var snowmax=30
var snowcolor=new Array("silver","gray","maroon","green","navy","purple","olive","teal","white","red","lime","blue","magenta","yellow","cyan")
var snowtype=new Array("Chiller","Tahoma","Impact","snap itc","Curlz MT","Courier","centaur")
var snowmessage=new Array ("Sajid Ahmed SIR","D3struct0r Riki Sir","Red Singal","P!45h! M09","Lazy Mind","Drinks Break","RED-X","xlx_xlx","3xp1r3-61","Ice_Cream","Jack Nax","Root X Force","Tou Hid Bhai","3xp1r3 cyber army")
var sinkspeed=0.4
var snowmaxsize=14
var snowminsize=10
var snowingzone=1
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var i_text=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size+"pt"
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx+"px"
		snow[i].style.top=snow[i].posy+"px"
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=(snow[i].posx+lftrght[i]*Math.sin(crds[i]))+"px";
		snow[i].style.top=snow[i].posy+"px"
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"px'>"+snowmessage[i_text]+"</span>")
	i_text++;
	if (i_text>=snowmessage.length) {
		i_text=0;
	}
}
if (browserok) {
	window.onload=initsnow
}
</script>






</body>


</html>
