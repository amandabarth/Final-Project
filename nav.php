<nav>
    <a class="<?php 
    if($pathParts['filename'] == "index"){
        print'activePage';
    }
    ?>" href="index.php">Home</a>&nbsp;
    <a class="<?php 
    if($pathParts['filename'] == "details"){
        print'activePage';
    }
    ?>" href="details.php">More Info</a>&nbsp;
    <a class="<?php 
    if($pathParts['filename'] == "prices"){
        print'activePage';
    }
    ?>" href="prices.php">Pricing</a>&nbsp;
    
    <a class="schedule <?php 
    if($pathParts['filename'] == "form"){
        print'activePage';
    }
    ?>" href="form.php">Schedule a Reading</a>
</nav>