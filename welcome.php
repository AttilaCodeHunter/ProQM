<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<?php
include "connection_string.php";
?>
<body>
<div class="php-test"><?php
    echo "Hello Dharani <br>\n";
    echo "Today's Date is:" .date('j-m-y');
    ?></div>
<div class="total"></div>
    <div class="total-text"><label> Total Laufender Auflag</label><br />
    <label id="total-text">
    <?php
    // Retrieving row fields by total 
    sqlsrv_fetch($result_total);
    $total = sqlsrv_get_field( $result_total, 0);
    echo $total ;
    sqlsrv_free_stmt($result_total);
    ?>
    </label>
    </div>
    <div class="io"><img src="Rectangle 3624.png" id="green"></img></div>
    <div class="io-text"><label>Laufender Auflag</label><br />
    <label id="io-text"><?php 
    // Retrieving row fields by io 
    sqlsrv_fetch($result_io);
    $io = sqlsrv_get_field( $result_io, 0);
    echo $io;
    sqlsrv_free_stmt($result_io);
    ?></label>
</div>
            <div class="io-titel"><a>IO</a></div>
            <div class="na"></div><img src="Rectangle 3707.png" id="yellow"></img></div>
            <div class="na-text"><a>Laufender Auflag</a></div>
            <div class="na-titel"><a>NA</a></div>
            <div class="nio"></div><img src="Rectangle 3705.png" id="red"></img></div>  
            <div class="nio-text"><a>Laufender Auflag</a></div> 
            <div class="nio-titel"><a>nIO</a>
    
</body>

</html>