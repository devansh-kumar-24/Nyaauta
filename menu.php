<?php
include 'navbar_menu.php';
?>


<div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade"  data-bs-ride="carousel" >
 
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="900">
      <img src="images\banner\Compress_Nyauta.jpg" class="d-block w-100 banner" alt="...">
      
    </div>
    <div class="carousel-item " data-bs-interval="1900">
      <img src="images\banner\Compress_Nyauta.jpg" class="d-block w-100 banner" alt="...">
      
    </div>
    <div class="carousel-item " data-bs-interval="1900">
      <img src="images\banner\Compress_Nyauta.jpg" class="d-block w-100 banner" alt="...">
      
    </div>
  </div>



  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>

<!--Cards Section-->

<figure class="text-center catext" id="category">
  <blockquote class="blockquote">
    <p>Elevate Every Event - Artful Celebration Invitations with a Desi Touch</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    --- <cite title="Source Title">nyautaa</cite>
  </figcaption>

  <h1>Designs</h1>
</figure>


<!-- Cards-->


<div class="row row-cols-1 row-cols-md-6 g-4 catcard ">

<?php
           $sql="SELECT `card_url`, `card_image` FROM `cards` WHERE `card_cat`='$cat' AND `card_status`='approved'";
            
$res=mysqli_query($con,$sql);
                if($res==TRUE){
                    $count=mysqli_num_rows($res);
                    if ($count>0){
                            while($rows=mysqli_fetch_assoc($res)){
                            $image=$rows['card_image'];
                            $url=$rows['card_url'];
                            
                            ?>
                             <a  href="<?php echo SITEURL;?>url.php?url=<?php echo $url;?>">
  <div class="col propcard">
    <div class="card h-80 crdimg">
      <img src="images\cards_img\<?php echo $image?>" class="card-img-top "  alt="...">
    </div>
  </div>
  </a>


  <?php
                            }
                    }
                }
                ?>
 


  


     
</div>

<!--clearfix-->
<div class="clearfix"><h1></h1>
<h1></h1></div>

<?php
include 'menu_footer.php';
?>