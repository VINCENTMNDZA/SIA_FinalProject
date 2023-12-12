<?php

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';




?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Application Name</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Fredoka+One&family=Golos+Text:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
</head>
<body>

<div id="wrapper">
<a href = "https://www.pubgmobile.com/en-US/home.shtml" >
            <img src="pub-removebg-preview.png" class="img"></a>

<div class="navbar">
    <a href="#" class="move-left"></a> 
        
            <ul class="links">
                <li><a href="index.php?page=home">Home</a> </li>
                <li><a href="index.php?page=receive">Gallery</a> </li>
                <li> <a href="index.php?page=release">About PUBG</a></li>
                <li> <a href="index.php?page=settings">Tips</a> </li>
</ul>
               
</div>
            <div id="content">

                <?php
                switch($page){  
                            case 'home':
                                 require_once 'home_module/index.php';
                            break; 
                            case 'receive':
                                require_once 'receive-module/index.php';
                            break; 
                            case 'release':
                                require_once 'release-module/index.php';
                            break; 
                            case 'settings':
                                require_once 'settings-module/index.php';
                            break; 
                        }
                ?>
            </div>
    </div>
</div>
</body>
</html>