<!-- <div class="container"> -->
<!--######################START HERE#######################-->
<div class="row">
<div class="col-3 random_product">

  

 <div id="slider3" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php $j = 0;?>
       @foreach($productcount as $productcountitem)
        <li class=" <?php if ($j == 1) {echo 'active';}?>" data-target="{{'#slider'.$j}}" data-slide-to="<?php echo $j; ?>"></li>
        <?php $j++;?>
        @endforeach
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php $i = 1;?>
        @foreach($productcount as $productcountitem)
        <div class="carousel-item <?php if ($i == 1) {echo 'active';}?>" >
          <img src="{{asset('images/products/'.$productcountitem->image)}}" alt="First Slide" class="d-block img-fluid">
          <div class="carousel-caption d-none d-md-block">
                </div>
        </div>
        <?php $i++;?>
        @endforeach
      <a href="#slider3" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#slider3" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a>
    </div>
  </div>





   </div>


  <div class="col-9">
    <div id="slider4" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php $j = 0;?>
        @foreach($slides as $slide)
        <li class=" <?php if ($j == 1) {echo 'active';}?>" data-target="{{'#slider'.$j}}" data-slide-to="<?php echo $j; ?>"></li>
        <?php $j++;?>
        @endforeach
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php $i = 1;?>
        @foreach($slides as $slide)
        <div class="carousel-item <?php if ($i == 1) {echo 'active';}?>" >
          <img src="{{asset('images/slides_images/'.$slide->name)}}" alt="First Slide" class="d-block img-fluid">
          <div class="carousel-caption d-none d-md-block">
            <!--       <h3>Slide One</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, sint.</p> -->
          </div>
        </div>
        <?php $i++;?>
        @endforeach
        <!--            <div class="carousel-item">
          <img src="img/image2.jpg" alt="Second Slide" class="d-block img-fluid">
          <div class="carousel-caption d-none d-md-block">
            <h3>Slide Two</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, sint.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/image3.jpg" alt="Third Slide" class="d-block img-fluid">
          <div class="carousel-caption d-none d-md-block">
            <h3>Slide Three</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, sint.</p>
          </div>
        </div>
      </div> -->
      <a href="#slider4" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#slider4" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a>
    </div>
  </div>
</div>
<!-- <div style="margin-top:500px;"></div> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script> -->
<!-- </div> -->
</div>