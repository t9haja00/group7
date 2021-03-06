<?php include(APPPATH . '/views/include/header.php'); ?>
<?php include(APPPATH . '/views/include/nav.php'); ?>
<div class="jumbotron jumbotron-fluid pt-5" >
  <div class="container pt-5 pb-4">
  <h1 class="display-4 font-weight-bold">Our offered services</h1>
    <h4>Here you can find our offered products for our card. All are services 30 days if not otherways informed.</h4>
  </div>
</div>



<div class="container ">
        <div class="card-deck row row-cols-1 row-cols-md-2">
            <?php foreach ($subtype as $row)
            {?>
              <div class=" col mb-3 mh-100" >
                    <div class="card bg-light border-primary h-100 ">
                        <!-- Body Start -->
                          <div class="card-body text-dark h-90 " >
                                <!-- Tile -->
                                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                <!-- Here we have bit fader text -->
                                <h6 class="card-subtitle mb-2"><?php echo '<b>Price</b>: '. $row['cost'] .' credits per month'; ?></h6>
                                <!-- Description -->
                                <p class="card-text-center"> <?php echo '<b>Description</b>: ' . $row['description'] ?></p>
                            </div>
                        <!-- Card footer start -->
                        <div class="card-footer row h-10 mx-0 ">
                          <div class="col-sm-8 ">
                              <?php echo '<b></b> ' . $row['address']; ?>
                            </div>
                          <div class="col-sm-4 ">
                            <!-- Form start to catch users chosen sub's Id -->
                            <?php echo form_open('Orders/index', 'method="get"'); ?>
                              <input type="hidden" name="subtype_id" value="<?php echo $row['subtype_id'] ?> ">
                              <input class="btn  btn-primary justify-content-center " type="submit" Value="Order">
                            </form>
                        </div>
                    </div>    
                    </div>
              </div>
            <?php } ?>
        </div>
    </div>
</div>


<?php include(APPPATH . '/views/include/footer.php'); ?>
