<?php
header("HTTP/1.1 418 I'm a teapot");
?>
<html>
<h1 align="center">418 I'm a teapot</h1>
<hr>
<p align="center"> HYPER TEXT COFFEE POT CONTROL PROTOCOL RUNNING ON:</p>
<p align="center">
<?php
 echo $_SERVER['SERVER_SOFTWARE']
?>
</p>
</html>