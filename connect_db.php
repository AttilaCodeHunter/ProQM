<?php
$serverName = "(LocalDB)\MSSQLLocalDB";
$connectionOptions = array(
    "Database" => "PROQM_V001",
);

$conn = sqlsrv_connect( $serverName, $connectionOptions);
//Establishes the connection
if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}

$dateTime = "ALTER TABLE dbo.LiveAnzeige ALTER COLUMN Zeitstempel VARCHAR(50)";

// Fetching data from LiveAnzeige and display into Homepage Table
$sql = "SELECT * FROM dbo.LiveAnzeige";
$result = sqlsrv_query($conn, $sql);

while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    echo "<tr><td>".$row["Ergebnis"]."</td><td>".$row["Zeitstempel"]."</td><td>".$row["Fertigungsauftrag"]."</td><td>".$row["Teilenummer"]."</td>
    <td>".$row["Produktbezeichung"]."</td><td>".$row["ErgebnisOberflaeche"]."</td><td>".$row["ErgebnisUmfang"]."</td>
    <td>".$row["ErgebnisRauhigkeit"]."</td><td>".$row["ErgebnisBohrloch"]."</td><td>".$row["ErgebnisNacharbeiten"]."</td>
    </tr><br />";
}
sqlsrv_free_stmt($result);

//Getting TOTAL value from dbo.ZaehlerInfo table and display on block
$total_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='TOTAL'";
$result_total = sqlsrv_query($conn, $total_sql);

// Retrieving row fields by total 
sqlsrv_fetch($result_total);
$total = sqlsrv_get_field( $result_total, 0);
echo "Total: $total <br />";
sqlsrv_free_stmt($result_total);

//Getting IO value from dbo.ZaehlerInfo table and display on block
$io_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='IO'";
$result_io = sqlsrv_query($conn, $io_sql);

// Retrieving row fields by io 
sqlsrv_fetch($result_io);
$io = sqlsrv_get_field( $result_io, 0);
echo "IO: $io <br />";
sqlsrv_free_stmt($result_io);

//Getting NIO value from dbo.ZaehlerInfo table and display on block
$nio_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='NIO'";
$result_nio = sqlsrv_query($conn, $nio_sql);

// Retrieving row fields by nio 
sqlsrv_fetch($result_nio);
$nio = sqlsrv_get_field( $result_nio, 0);
echo "NIO: $nio <br />";
sqlsrv_free_stmt($result_nio);

//Getting NA value from dbo.ZaehlerInfo table and display on block
$na_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='NA'";
$result_na = sqlsrv_query($conn, $na_sql);

// Retrieving row fields by na
sqlsrv_fetch($result_na);
$na = sqlsrv_get_field( $result_na, 0);
echo "NA: $na <br />";
sqlsrv_free_stmt($result_na);

//Getting 01-0003 value from dbo.ZaehlerInfo table and display on block1
$bk1_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='01-0003'";
$result_bk1 = sqlsrv_query($conn, $bk1_sql);

// Retrieving row fields by 01-0003
sqlsrv_fetch($result_bk1);
$bk1 = sqlsrv_get_field( $result_bk1, 0);
echo "01-0003: $bk1 <br />";
sqlsrv_free_stmt($result_bk1);



sqlsrv_close($conn);

?>

