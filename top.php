<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lindsey Reads Tarot</title>
        <meta name="author" content="Greta, Amanda, and Rachel">
        <meta name="description" content="Lindsey Reads Tarot">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    </head>

    <?php
print '<body class="'. $pathParts['filename'] . '">';
print '<!-- ################# Body element ################# -->';
include 'connect-DB.php';
include 'header.php';
include 'nav.php';
?>

