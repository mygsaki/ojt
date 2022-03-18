<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <title>Document</title>
    <?php wp_head();?>
  
    </head>
<body>
    <header class="header">  
        <input type="checkbox" id="wrap">
            <label class="hamburger" for="wrap">
            <span class="pate"></span>
            </label>
            <div class="header-right">
            <?php wp_nav_menu(); ?>
                <!-- <ul>
                <a href=""><li>Menu1</li></a> 
                <a href=""><li>Menu2</li></a>
                <a href=""><li>Menu3</li></a> 
                <a href=""> <li>Menu4</li></a>
                
                </ul> -->
            </div>
        </header>
<!-- <div class="contents"> -->