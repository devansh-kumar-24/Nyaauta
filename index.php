
<?php
include 'navbar.php';
?>

<!--UPPER Carousel-->


<div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade"  data-bs-ride="carousel" >
 
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="900">
      <img src="images\banner\Compress_Nyauta.jpg" class="d-block w-100 banner" alt="...">
      <div class="carousel-caption d-none d-md-block context" >
        <h1>Unmatched Variety</h1>
        <p> Explore a vast library of modern and elegant templates </p>
      </div>
    </div>
    <div class="carousel-item " data-bs-interval="1900">
      <img src="images\banner\Compress_Nyauta.jpg" class="d-block w-100 banner" alt="...">
      <div class="carousel-caption d-none d-md-block context">
        <h1>Exquisite</h1>
        <p>Impress your guests with a curated collection of sophisticated invitations</p>
      </div>
    </div>
    <div class="carousel-item " data-bs-interval="1900">
      <img src="images\banner\Compress_Nyauta.jpg" class="d-block w-100 banner" alt="...">
      <div class="carousel-caption d-none d-md-block context">
        <h1>Desi Touch ,Modern Designs</h1>
        <p>Design joyful invitations that reflect your occasion's spirit.</p>
      </div>
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

  <div class="d-grid gap-2 col-1 mx-auto explore">
  <button class="btn btn-dark btn-lg" type="button">Explore</button>

</div>

  

<!--Category Section-->

<figure class="text-center catext" id="category">
  <blockquote class="blockquote">
    <p>"Charm your event with our modern invites"</p>
  </blockquote>
  <figcaption class="blockquote-footer">
  where simplicity meets<cite title="Source Title"></cite>
  </figcaption>

  <h1>Categories</h1>
</figure>


<!--Category Cards-->


<div class="row row-cols-1 row-cols-md-3 g-4 catcard">
<?php
                $sql="SELECT `cat_name`, `cat_disc`, `cat_image` FROM `card_category`";
                $res=mysqli_query($con,$sql);
                if($res==TRUE){
                    $count=mysqli_num_rows($res);
                    if ($count>0){
                            while($rows=mysqli_fetch_assoc($res)){
                            $image=$rows['cat_image'];
                            $name=$rows['cat_name'];
                            $disc=$rows['cat_disc'];
                            
                            ?>

  <a class="link-card" href="<?php echo SITEURL;?>menu.php?cat=<?php echo $name;?>">
     <div class="col propcard"  >
    <div class="card h-80 crdimg">
      <img src="images\category\<?php echo $image?>" class="card-img-top "  alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $name?></h5>
        <p class="card-text"><?php echo $disc?></p>
      </div>
    </div>
  </div>
  </a>
  <?php
                            }
                    }
                }
                ?>
      </div>
    </div>
  </div>
 </a>
  

 
      </div>
    </div>
  </div></a>
 
 
</div>
<!--Services Section-->
<div class="service" id="s" >
  

<figure class="text-center services" id="service">
  <h1>Services</h1>
  <blockquote class="blockquote">
    <p>
    Nyauta isn't just another invitation platform; it's a revolution in event stationery. Our user-friendly platform boasts a diverse collection of exquisite templates, meticulously crafted by design professionals. Choose from stunning digital invitations designed to be shared electronically or create high-quality printables on premium paper stock for a timeless touch. Unlock a world of exquisite design and effortless creation with our affordable premium plans. Start creating today and make a lasting impression with Nyauta!
    </p>
  </blockquote>
  

  
</figure>
</div>
<!--Footer-->


<hr>
<nav class="navbar  justify-content-center" style="background-color: #212529;" id="about">
  <figure class="text-center">
  <h1>About Us</h1>
  <blockquote class="blockquote">
    <p>This is an online platform for providing free and unique invitation designs</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Developed by <cite title="Source Title">Devansh Kumar</cite>
  </figcaption>
  <figcaption class="blockquote-footer">
    <p>Contact Us - nayutaa949@gmail.com </p>
  </figcaption>

</nav>

<?php
include 'footer.php';
?>

