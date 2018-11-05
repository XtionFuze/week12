<?php
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("head.php"); ?>
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php require_once("nav.php"); ?> 
            </div>
        </div>
        <?php
        $pageid = 2;
        include("content.php");
        ?>
    </div>
</body>
</html>