<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Climate Change - Effects on Society</title>
        <meta name="author" content="Amanda Barth">
        <meta name="description" content="Climate Change is a serious issue within our society and while trying to reverse the changes, we also have to adapt to the new challenges the weather throws at us">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    </head>
    <?php
    print '<body class = "'.$pathParts['filename'].'">';
    print'<!--### Start of Body Element ###-->';
    include 'connect-DB.php';
    include 'header.php';
    include 'nav.php';
    ?>