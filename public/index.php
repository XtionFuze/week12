<?php
require_once("../connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("../head.php"); ?>
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php require_once("../nav.php"); ?> 
            </div>
        </div>
        <?php
        $pageid = 1;
        include("../content.php");
        ?>
    </div>
</body>
</html>