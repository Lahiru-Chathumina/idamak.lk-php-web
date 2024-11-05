<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/uploads/<?php echo $row["img1"]; ?>" class="d-block w-100 img1" alt="...">
    </div>
    <?php if(($row["img2"])!="") {?>
    <div class="carousel-item">
      <img src="../images/uploads/<?php echo $row["img2"]; ?>" class="d-block w-100 img1" alt="...">
    </div>
    <?php } if(($row["img3"])!="") {?>
    <div class="carousel-item">
      <img src="../images/uploads/<?php echo $row["img3"]; ?>" class="d-block w-100 img1" alt="...">
    </div>
    <?php } if(($row["img4"])!="") {?>
    <div class="carousel-item">
      <img src="../images/uploads/<?php echo $row["img4"]; ?>" class="d-block w-100 img1" alt="...">
    </div>
    <?php } if(($row["img5"])!="") {?>
    <div class="carousel-item">
      <img src="../images/uploads/<?php echo $row["img5"]; ?>" class="d-block w-100 img1" alt="...">
    </div>
    <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>