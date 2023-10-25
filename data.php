<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Page</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<script src="main.js"></script>
<my-header></my-header>
<script src="script.js"></script>
<?php
include "connection_string.php";
?>
    <main>
        <my-main></my-main>
        <img src="Component 91.png" id="h-icon"></img>
        <div id="h-text">Daten</div>
        

        <div class="container_line"></div>
        <div class="container_pdflogo"><img src="Icon awesome-print.png"></img></div>
        <my-maincontainer></my-maincontainer>

        <div class="container_nablock"></div>
        <div class="container_yellow"></div>
        <div class="container_na">NA</div>
        <div class="container_nadot_border"></div>
        <label class="container_nadot"><input type="checkbox" id="myCheckbox" checked><span class="container_nadot_checkmark"></span></label>

        <div class="container_ioblock"></div>
        <div class="container_green"></div>
        <div class="container_io">IO</div>
        <div class="container_iodot_border"></div>
        <label class="container_iodot"><input type="checkbox" id="myCheckbox" checked><span class="container_iodot_checkmark"></span></label>

        <div class="container_nioblock"></div>
        <div class="container_pink"></div>
        <div class="container_nio">nIO</div>
        <div class="container_niodot_border"></div>
        <label class="container_niodot"><input type="checkbox" id="myCheckbox" checked>
        <span class="container_niodot_checkmark"></span></label>
    
        
    </main>
<my-footer></my-footer>
</body>
</html>
