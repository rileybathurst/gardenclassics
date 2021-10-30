<?php
$expl = explode("/",$_SERVER['REQUEST_URI']);
$slug1 = $expl[1];
if(isset($expl[2])){$slug2 = $expl[2];}
if(isset($expl[3])){$slug3 = $expl[3];}
if(isset($expl[4])){$slug4 = $expl[4];}

if($slug2 == 'ordersaved'){
	$jjs = '$.popup.show("Thanks for your Order. <img src=\"/pic/checkmark.gif\">", "We will be in touch shortly.");';
} else if($slug2 == 'nojs'){
	$ajs = '<span style="color:#FF0000;">Error. Please enable Javascript</span>';
} else if($slug2 == 'thanks'){
	$jjs = '$.popup.show("Message Sent. <img src=\"/pic/checkmark.gif\">", "We will be in touch shortly.");';
}


//default page=homepage
if(!$expl[1]){
$slug1 = "home";
}
if(($slug1 == "home")||
	($slug1 == "about")||
	($slug1 == "faq")||
	($slug1 == "testimonials")||
	($slug1 == "contact")||
	($slug1 == "outdoor-furniture")||
	($slug1 == "outdoor-furniture-sets")||
	($slug1 == "outdoor-furniture-tables")||
	($slug1 == "outdoor-furniture-chairs")||
	($slug1 == "outdoor-furniture-loungers")||
	($slug1 == "water-features")||
	($slug1 == "rock-pools")||
	($slug1 == "urns-pots-planters")||
	($slug1 == "statues-ornaments")||
	($slug1 == "landscape-accessories")||
	($slug1 == "pavers")||
	($slug1 == "custom-development"))
{
include($slug1.".php");
} else {
	$htmlcontent = '<h3>Page Error</h3><p>Error 404 - Page not Found</p>';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Garden Classics - Outdoor Living at its best.</title>

<link rel="stylesheet" href="/ss.css" type="text/css" />

<meta name="keywords" content="christchurch, new zealand, garden, outdoor, furniture, pots, exterior" />
<meta name="description" content="Garden Classics, Outdoor Living at its best." />
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.validate.min.js" ></script>
<script type="text/javascript" src="/js/jquery.popup.js" ></script>
<script type="text/javascript" src="/js/preload.js" ></script>

<script type="text/javascript" src="lightbox2/js/prototype.js"></script>
<script type="text/javascript" src="lightbox2/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="lightbox2/js/lightbox.js"></script>
<link href="lightbox2/css/lightbox.css" rel="stylesheet" type="text/css" />

<?php if($slug1=='home'){echo '<script type="text/javascript" src="/js/jquery.maphighlight.js" ></script>
';}?>
<script type="text/javascript">
$(document).ready(function() {
	<?php echo $jjs; ?>
<?php if($slug1=='home'){echo '	
        $(\'img[usemap]\').maphilight();

';} ?>

});
</script>
</head>

<body>
<?php if($slug1=='home'){echo '	
<div id="dhtmltooltip"></div>

<script type="text/javascript">

/***********************************************
* Cool DHTML tooltip script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

var offsetxpoint=-60; //Customize x offset of tooltip
var offsetypoint=20; //Customize y offset of tooltip
var ie=document.all;
var ns6=document.getElementById && !document.all;
var enabletip=false;
if (ie||ns6)
var tipobj=document.all? document.all["dhtmltooltip"] : document.getElementById? document.getElementById("dhtmltooltip") : ""

function ietruebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function ddrivetip(thetext, thecolor, thewidth){
if (ns6||ie){
if (typeof thewidth!="undefined") tipobj.style.width=thewidth+"px"
if (typeof thecolor!="undefined" && thecolor!="") tipobj.style.backgroundColor=thecolor
tipobj.innerHTML=thetext
enabletip=true
return false
}
}

function positiontip(e){
if (enabletip){
var curX=(ns6)?e.pageX : event.clientX+ietruebody().scrollLeft;
var curY=(ns6)?e.pageY : event.clientY+ietruebody().scrollTop;
//Find out how close the mouse is to the corner of the window
var rightedge=ie&&!window.opera? ietruebody().clientWidth-event.clientX-offsetxpoint : window.innerWidth-e.clientX-offsetxpoint-20
var bottomedge=ie&&!window.opera? ietruebody().clientHeight-event.clientY-offsetypoint : window.innerHeight-e.clientY-offsetypoint-20

var leftedge=(offsetxpoint<0)? offsetxpoint*(-1) : -1000

//if the horizontal distance isn\'t enough to accomodate the width of the context menu
if (rightedge<tipobj.offsetWidth)
//move the horizontal position of the menu to the left by it\'s width
tipobj.style.left=ie? ietruebody().scrollLeft+event.clientX-tipobj.offsetWidth+"px" : window.pageXOffset+e.clientX-tipobj.offsetWidth+"px"
else if (curX<leftedge)
tipobj.style.left="5px"
else
//position the horizontal position of the menu where the mouse is positioned
tipobj.style.left=curX+offsetxpoint+"px"

//same concept with the vertical position
if (bottomedge<tipobj.offsetHeight)
tipobj.style.top=ie? ietruebody().scrollTop+event.clientY-tipobj.offsetHeight-offsetypoint+"px" : window.pageYOffset+e.clientY-tipobj.offsetHeight-offsetypoint+"px"
else
tipobj.style.top=curY+offsetypoint+"px"
tipobj.style.visibility="visible"
}
}

function hideddrivetip(){
if (ns6||ie){
enabletip=false;
tipobj.style.visibility="hidden";
tipobj.style.left="-1000px";
tipobj.style.backgroundColor=\'\';
tipobj.style.width=\'\';
}
}

document.onmousemove=positiontip

</script>
';
}
?>
<?php echo $ajs; ?>
<div id="allcontain">
<div id="topbg"><div id="lle"><a name="top" id="top"></a><a href="/"><img src="/img/Garden-classics-home.gif" id="logo" width="440" height="126" alt="Garden Classics" /></a></div><a href="mailto:info@gardenclassics.co.nz"><img src="/img/Garden-classics-contact.gif" id="cdd" width="211" height="133" alt="Garden Classics" /></a></div>
<div id="navi">
	<div align="left">

<span></span>
<a href="/home" id="n_home" <?php if($slug1=='home'){echo 'class="current"';}?>></a>
<span></span>
<a href="/about" id="n_about" <?php if($slug1=='about'){echo 'class="current"';}?>></a>
<span></span>
<a href="faq" id="n_faq" <?php if($slug1=='faq'){echo 'class="current"';}?>></a>
<span></span>
<a href="/testimonials" id="n_testimonials" <?php if($slug1=='testimonials'){echo 'class="current"';}?>></a>
<span></span>
<a href="/contact" id="n_contact" <?php	 if($slug1=='contact'){echo 'class="current"';}?>></a>
<span></span>
<form name="sarch" id="sarch" action="http://www.google.com/custom" method="get">
<input type="hidden" name="domains" value="http://www.gardenclassics.co.nz" />
<input type="hidden" name="sitesearch" value="http://www.gardenclassics.co.nz" />
<input type="text" id="n_search" style="padding:1px 7px;font-size:16px;vertical-align:middle;width:128px;" />
</form>
	</div>


</div>
<div id="maincon">
	<div id="mainleft"><p style="margin-top:0px;"><a href="/outdoor-furniture">Outdoor Furniture</a><ul><li><a href="/outdoor-furniture-sets">Sofa Sets</a></li><li><a href="/outdoor-furniture-tables">Tables</a></li><li><a href="/outdoor-furniture-chairs">Chairs</a></li><li><a href="/outdoor-furniture-loungers">Loungers</a></li></ul></p>
    <p><a href="/water-features">Water Features</a></p>
    <p><a href="/rock-pools">Rock Pools</a></p>
    <p><a href="/urns-pots-planters">Urns, pots &amp; Planters</a></p>
    <p><a href="/statues-ornaments">Statues &amp; Ornaments</a></p>
    <p><a href="/landscape-accessories">Landscape Accessories</a></p>
    <p><a href="/pavers">Pavers</a></p>
    <p><a href="/custom-development">Custom &amp; Development</a></p>
    <p><a href="http://www.facebook.com/pages/Christchurch/Garden-Classics/145900715451057" target="_blank">Join us on<br /> Facebook</a></p>
    <p><a href="http://twitter.com/gardenclassics" target="_blank"> or follow us<br /> on Twitter</a></p><br /><br />
    
    </div>
	<div id="mainright"<?php if($slug1=='home'){echo ' style="background:url(/img/bighomebg.jpg) no-repeat left top;"';} ?>><?php echo $htmlcontent; ?>

</div>
</div>
</div>
<h5 style="text-align:middle;padding:4px;font-size:9px;">Christina Garbarini Photography | <a href="http://www.rileybathurst.com" title="Riley Bathurst Design">Riley Bathurst Design</a></h5>

</body>
</html>
  