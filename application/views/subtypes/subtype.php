<?php include(APPPATH . '/views/include/header.php'); ?>
<?php include(APPPATH . '/views/include/nav.php'); ?>
<!-- Should save post action in array in session what can be called -->
<?php $_SESSION['postdata'] = $_POST;?>

<div class="container">

    test for subtypes
    
    </div>

    <div>
    <?php
    foreach ($subtype as $row)
    {
        ?>
        <div class="card border-dark mb-3"style="width:18rem" >
            <div class="card-body">
            <h5 class="card-title"><?php echo $row['name']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Id is'.$row['subtype_id'].'price is'.$row['cost']; ?></h6>
            <p class="card-text-center"> <?php echo $row['description'] ?></p>
            <p class="card-text"><?php echo 'Info '.$row['address']; ?></p>
            <form action="BuyPages" method="post">
            <input type="hidden" name="Id_Button" value="<?php echo $row['subtype_id'] ?>">
            <input class="btn btn-primary" type="submit">
            </form>
            </div>
        </div>
        <?php
        echo '<div>';
        echo '<br>Id is '.$row['subtype_id'];
        echo '<br> Name :'.$row['name'];
        echo '</div>';
        // Using the bootstrap for collapsing
        // Some animation timings?
        echo '<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#info">More info</button>';
        echo '<div id="info" class="collapse in">';
        echo '<br>about the company:<br>'.$row['description'];
        echo '<br> Price in credits '.$row['cost'];
        echo '<br> info'.$row['address'];
        echo '<br>';
        echo '</div>';
        echo '<br>';
        //form starts. submits the picked id for the contoller what then is used in buy view.
        echo'<form action="BuyPages" method="post">';
        // the value doesnt work with the id
        echo'<input type="hidden" name="Id_Button" value="'.$row['subtype_id'];
        echo '">';
        echo'<input type="submit">';     
        echo '</form>';
        
    } 

    
    ?>
    </div>



</div>

<?php include(APPPATH . '/views/include/footer.php'); ?>
