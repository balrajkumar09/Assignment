<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylsheet.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                <h1 style="color: red;font-family: Brush Script MT ; font-size: 1000% ; margin: 20px;">Bazzinga!!!!!!!!</h1>
            </div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about_me.php">About Me</a></li>
                    <li><a href="gallary.php">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                
                </ul>
            </nav>
            <div id="content_area">
                <?php echo $content; ?>
                
            </div>
            <div id="sidebar">
                
            </div>
            <footer>All Rights Reserved</footer>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
