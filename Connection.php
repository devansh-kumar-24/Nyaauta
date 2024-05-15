<?php
define("LOCALHOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","dev_db");
define("SITEURL","http://localhost/nayutaa/");

 $con=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
if ($con!=TRUE)exit();

?>