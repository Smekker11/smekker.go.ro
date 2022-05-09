<?php
function tea(){
    $location = '/teapot/error.php';
    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/" . $location);
}
if (isset($_GET['tea'])) {
    tea();
  }
?>
<html>
 <body>
     <h1 style="color: yellow;">HTCPCP SERVER:</h1>
     <img height="200" width="200" src="coffee-pot.png"></img>
     <button onclick="window.location.href='index.php?tea=true'">BREW</button>
 </body>
 <style>
     body{
         background-image: url('coffee-bean.bmp');
     }
 </style>
</html>
