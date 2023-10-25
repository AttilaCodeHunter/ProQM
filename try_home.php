<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Table Size</title>
    <style>
        .custom-table-container {
            position: relative;
            top: 472px;
            left: 372px;
            width: 1458px;
            height: 337px;
            margin: 0 auto; /* Center the container */
        }

        table {
            width: 100%; /* Set the width of the table to 100% of the container */
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<script defer src="script.js"></script>
<?php
include "connection_string.php";
?>
<div class="custom-table-container">
    <h2>Resizable Table</h2>

    <table>
        <tr>
            <th>#</th>
            <th>Zeitstempel</th>
            <th>Fertigungsauftrag</th>
            <th>Teile-Nr</th>
            <th>Produktbezeichnung</th>
            <th>Oberfläche</th>
            <th>Umfang</th>
            <th>Rauhigkeit</th>
            <th>Bohrloch</th>
            <th>Nacharbeiten</th>
            <th>Details</th>
        </tr><?php
        $dateTime = "ALTER TABLE dbo.LiveAnzeige ALTER COLUMN Zeitstempel VARCHAR(50)";

        while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){ 
        echo "<tr><td>".$row["Ergebnis"]."</td><td>".$row["Zeitstempel"]."</td><td>".$row["Fertigungsauftrag"]."</td><td>".$row["Teilenummer"]."</td>
        <td>".$row["Produktbezeichung"]."</td><td>".$row["ErgebnisOberflaeche"]."</td><td>".$row["ErgebnisUmfang"]."</td>
        <td>".$row["ErgebnisRauhigkeit"]."</td><td>".$row["ErgebnisBohrloch"]."</td><td>".$row["ErgebnisNacharbeiten"]."</td>
        <td><button style='background: #919191;height: 22px; width: 22px;border-radius: 50%;border: none;cursor: pointer;
        onclick='redirectToDetail('LiveAnzeigePKID')' type='submit''>
        <img style='height: 18px;' src='Icon ionic-ios-arrow-back-1.png'></img></button></td></tr><br />";}
        sqlsrv_free_stmt($result); ?>
    </table>
</div>

</body>
</html>
