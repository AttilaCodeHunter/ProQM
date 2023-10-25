<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table_test.css"> 
</head>
<body>
<script defer src="main.js"></script>
<script defer src="script.js"></script>
<?php
include "connection_string.php";
?>
<my-header></my-header>

    <main>
        <my-main></my-main>
        <img src="Icon metro-home-1.png" id="h-icon"></img>
        <div id="h-text">Startseite</div>
        <div class="data-container">
            <div class="total"></div>
            <div class="total-text"><label> Total Laufender Auflag</label><br />
            <label id="total-text">
            <?php
            // Retrieving row fields by total 
            sqlsrv_fetch($result_total);
            $total = sqlsrv_get_field( $result_total, 0);
            echo $total ;
            sqlsrv_free_stmt($result_total);
            ?></label></div>

            <div class="io"><div class="io_colour"></div>
            <label class="io-text">Laufender Auflag</label>
            <div class="io-titel">IO</div>
            <label id="io-text"><?php 
            // Retrieving row fields by io 
            sqlsrv_fetch($result_io);
            $io = sqlsrv_get_field( $result_io, 0);
            echo $io;
            sqlsrv_free_stmt($result_io);
            ?></label></div>

            <div class="na"><div class="na_colour"></div>
            <label class="na-text">Laufender Auflag</label>
            <div class="na-titel">NA</div>
            <label id="na-text"><?php
            // Retrieving row fields by na
            sqlsrv_fetch($result_na);
            $na = sqlsrv_get_field( $result_na, 0);
            echo $na;
            sqlsrv_free_stmt($result_na);
            ?></label></div>

            <div class="nio"><div class="nio_colour"></div>
            <label class="nio-text">Laufender Auflag</label> 
            <div class="nio-titel">nIO</div>
            <label id="nio-text"><?php
            // Retrieving row fields by nio 
            sqlsrv_fetch($result_nio);
            $nio = sqlsrv_get_field( $result_nio, 0);
            echo $nio;
            sqlsrv_free_stmt($result_nio);
            ?></label></div>

            <div class="data-sql">
                    <label class="table_title">Geprüfte Teile</label>
                    <div class="info_block"></div>
                    <div class="info_block_green"></div>
                    <div class="info_block_io">IO</div>
                    <div class="info_na_dot_border"></div>
                    <label class="na_checkbox-container">
                        <input type="checkbox" id="myCheckbox" checked>
                        <span class="na_checkmark"></span>
                    </label>
                    <div class="info_block_yellow"></div>
                    <div class="info_block_na"><a>NA</a></div>
                    <div class="info_io_dot_border"></div>
                    <label class="io_checkbox-container">
                        <input type="checkbox" id="myCheckbox" checked>
                        <span class="io_checkmark"></span>
                    </label>
                    <div class="info_block_pink"></div>
                    <div class="info_block_nio"><a>nIO</a></div>
                    <div class="info_nio_dot_border"></div>
                    <label class="nio_checkbox-container">
                        <input type="checkbox" id="myCheckbox" checked>
                        <span class="nio_checkmark"></span>
                    </label>
                    </div>
                        <table class="custom-table-container">
                            <tr>
                                <th class="col1" >#</th>
                                <th class="col2">Zeitstempel</th>
                                <th class="col3">Fertigungsauftrag</th>
                                <th class="col4">Teile-Nr</th>
                                <th class="col5">Produktbezeichnung</th>
                                <th class="col6">Oberfläche</th>
                                <th class="col7">Umfang</th>
                                <th class="col8">Rauhigkeit</th>
                                <th class="col9">Bohrloch</th>
                                <th class="col10">Nacharbeiten</th>
                                <th class="col11">Details</th>
                            </tr>

                            <?php
                           /* $row = 1;
                            while ($row <=10){
                                $i=1;
                                while($i<=10){
                                    $initial = 472;
                                    $topPosition = $i * 30; // Calculate top position
                                    $top = $initial + $topPosition;
                                    echo "<tr style='top: {$top}px;'>
                                    <td class='col1'>XXX</td>
                                    <td class='col2'>YYY</td>
                                    <td class='col3'>zzz</td>
                                    <td class='col4'>zzz</td>
                                    </tr>";
                                    $i++;
                                } 
                                $row++;
                            }*/
                            
                            $dateTime = "ALTER TABLE dbo.LiveAnzeige ALTER COLUMN Zeitstempel VARCHAR(50)";
                            $initial = 472; $topPosition = 30; $i=1;
                            while ($i<=10 && $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){ 
                                    $top = $initial + $topPosition *$i;
                                    echo "<tr style='top: {$top}px;'><td class='col1'>".$row["Ergebnis"]."</td>
                                    <td class='col2'>".$row["Zeitstempel"]."</td>
                                    <td class='col3'>".$row["Fertigungsauftrag"]."</td>
                                    <td class='col4'>".$row["Teilenummer"]."</td>
                                    <td class='col5'>".$row["Produktbezeichung"]."</td>
                                    <td class='col6'>".$row["ErgebnisOberflaeche"]."</td>
                                    <td class='col7'>".$row["ErgebnisUmfang"]."</td>
                                    <td class='col8'>".$row["ErgebnisRauhigkeit"]."</td>
                                    <td class='col9'>".$row["ErgebnisBohrloch"]."</td>
                                    <td class='col10'>".$row["ErgebnisNacharbeiten"]."</td>
                                    <td class='col11'><button class ='table_button' type='submit'>
                                    <img style='height: 13px; float: left; margin-right: 50px;  ' src='Icon ionic-ios-arrow-back-1.png'></img></button></td></tr>";
                                $i++;
                                } 
                        
                        sqlsrv_free_stmt($result); 
                        ?>
                        </table>

                    <div class="block_1"><label class="id1">ID-AKZ</label>
                    <label id="block_1">01-0003</label><label id="id1"><?php
                    // Retrieving row fields by 01-0003
                    sqlsrv_fetch($result_bk1);
                    $bk1 = sqlsrv_get_field( $result_bk1, 0);
                    echo  $bk1;
                    sqlsrv_free_stmt($result_bk1);
                    ?></label></div>

                    <div class="block_2"><label class="id2">ID-AKZ</label>
                    <label id="block_2">02-0003</label><label id="id2"><?php
                    // Retrieving row fields by 02-0003
                    sqlsrv_fetch($result_bk2);
                    $bk2 = sqlsrv_get_field( $result_bk2, 0);
                    echo  $bk2;
                    sqlsrv_free_stmt($result_bk2);
                    ?></label></div>

                    <div class="block_3"><label class="id3">ID-AKZ</label>
                    <label id="block_3">03-0002</label><label id="id3"><?php
                    // Retrieving row fields by 03-0002
                    sqlsrv_fetch($result_bk3);
                    $bk3 = sqlsrv_get_field( $result_bk3, 0);
                    echo  $bk3;
                    sqlsrv_free_stmt($result_bk3);
                    ?></label></div>

                    <div class="block_4"><label class="id4">ID-AKZ</label>
                    <label id="block_4">04-0007</label><label id="id4"><?php
                    // Retrieving row fields by 04-0007
                    sqlsrv_fetch($result_bk4);
                    $bk4 = sqlsrv_get_field( $result_bk4, 0);
                    echo  $bk4;
                    sqlsrv_free_stmt($result_bk4);
                    ?></label></div>

                    <div class="block_5"><label class="id5">ID-AKZ</label>
                    <label id="block_5">05-0005</label><label id="id5"><?php
                    // Retrieving row fields by 05-0005
                    sqlsrv_fetch($result_bk5);
                    $bk5 = sqlsrv_get_field( $result_bk5, 0);
                    echo  $bk5;
                    sqlsrv_free_stmt($result_bk5);
                    ?></label></div>

                    <div class="block_6"><label class="id6">ID-AKZ</label>
                    <label id="block_6">06-0006</label><label id="id6"><?php
                    // Retrieving row fields by 06-0006
                    sqlsrv_fetch($result_bk6);
                    $bk6 = sqlsrv_get_field( $result_bk6, 0);
                    echo  $bk6;
                    sqlsrv_free_stmt($result_bk6);
                    ?></label></div>

                    <div class="block_7"><label class="id7">ID-AKZ</label>
                    <label id="block_7">07-0003</label><label id="id7"><?php
                    // Retrieving row fields by 07-0003
                    sqlsrv_fetch($result_bk7);
                    $bk7 = sqlsrv_get_field( $result_bk7, 0);
                    echo  $bk7;
                    sqlsrv_free_stmt($result_bk7);
                    ?></label></div>

                    <div class="block_8"><label class="id8">ID-AKZ</label>
                    <label id="block_8">08-0001</label><label id="id8"><?php
                    // Retrieving row fields by 08-0001
                    sqlsrv_fetch($result_bk8);
                    $bk8 = sqlsrv_get_field( $result_bk8, 0);
                    echo  $bk8;
                    sqlsrv_free_stmt($result_bk8);
                    ?></label></div>

                    <div class="block_9"><label class="id9">ID-AKZ</label>
                    <label id="block_9">09-0010</label><label id="id9"><?php
                    // Retrieving row fields by 09-0010
                    sqlsrv_fetch($result_bk9);
                    $bk9 = sqlsrv_get_field( $result_bk9, 0);
                    echo  $bk9;
                    sqlsrv_free_stmt($result_bk9);
                    ?></label></div> 
            </div>
            
    </main>
<my-footer></my-footer>
</body>
</html>
