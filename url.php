<?php
if(isset($_GET["url"])){
    $url=$_GET["url"];

    header("location: $url");
}
else{
    header("location: menu.php");
}

?>