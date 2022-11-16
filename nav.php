<nav>
    <a class="<?php 
    if($pathParts['filename'] == "index"){
        print'activePage';
    }
    //doesnt print activePage
    ?>" href="index.php">Home</a>&nbsp;
    <a class="<?php 
    if($pathParts['filename'] == "array"){
        print'activePage';
    }
    ?>" href="array.php">Vermont</a>&nbsp;
    <a class="<?php 
    if($pathParts['filename'] == "details"){
        print'activePage';
    }
    ?>" href="details.php">More Info</a>&nbsp;
    <a class="<?php 
    if($pathParts['filename'] == "form"){
        print'activePage';
    }
    ?>" href="form.php">Questions</a>
</nav>