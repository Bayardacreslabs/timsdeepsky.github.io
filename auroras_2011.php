<?php
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en">

<head>


<link href='https://timcline.org/favicon.ico' rel='icon' type='image/x-icon'/>    

<title>Auroras 2011</title> 
<style type="text/css" media="screen">

body
{
background-color:#000000;
}


.wrapper 
{
margin:0 auto;
max-width: 800px;
text-align: center;
height: 100%;
border: 1px solid green;
color: #000000;
background-color: #000000;
}
 
#footer 
{
clear: both;
background: #ffffff;
font-weight: 900;
color: Black;
padding: 0px 0px 0px 0px;
margin: 0px 0px 0px 0px;
text-align: center;
border: 1px solid green;
width: auto;
height: auto;
}

h1 {color:#66CDAA;text-align:center;}
h2 {color:#DAA520;text-align:center;}
p {color:#DAA520;text-align:center;padding: 0px 10px 0px 10px;
}


a:link {color:#FF0000;}      /* unvisited link */
a:visited {color:#00FF00;}  /* visited link */
a:hover {color:#FF00FF;}  /* mouse over link */
a:active {color:#0000FF;}  /* selected link */

img {
   padding:2px;
   border:2px solid #BA55D3;
   background-color:#008080;
}








</style>

</head>                      
             
<body>


<div class="wrapper">

<?php include('link_include.php'); ?>
<br />
<h1> timcline.org</h1>
<h2>My Auroras</h2>
<p>Auroras captured by my night sky cam....</p>




<img src="https://timcline.org/images_timcline_org/auroras/aurora_10_24_2011000.jpeg" alt="Aurora" width="640" height="480" />
<br />
<br />
<img src="https://timcline.org/images_timcline_org/auroras/aurora_10_24_2011001.jpeg" alt="Aurora" width="640" height="480" />
<br />
<br />

  <h2>Video from my cams are below here........</h2>

<video class="fireball_video" width="640" height="480" controls>
  <source src="https://www.timcline.org/auroras/auroras_2011_qtfaststart.mp4" type="video/mp4">
Your browser does not support the video tag.
</video> 

<br />



<div id="footer">
<?php include('copyright.php'); ?>
</div>



</div>                                                                                                    
</body>
</html>
