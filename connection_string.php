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

//Getting TOTAL value from dbo.ZaehlerInfo table and display on block
$total_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='TOTAL'";
$result_total = sqlsrv_query($conn, $total_sql);

//Getting IO value from dbo.ZaehlerInfo table and display on block
$io_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='IO'";
$result_io = sqlsrv_query($conn, $io_sql);

//Getting NIO value from dbo.ZaehlerInfo table and display on block
$nio_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='NIO'";
$result_nio = sqlsrv_query($conn, $nio_sql);

//Getting NA value from dbo.ZaehlerInfo table and display on block
$na_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='NA'";
$result_na = sqlsrv_query($conn, $na_sql);

//Getting 01-0003 value from dbo.ZaehlerInfo table and display on block1
$bk1_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='01-0003'";
$result_bk1 = sqlsrv_query($conn, $bk1_sql);

//Getting 02-0003 value from dbo.ZaehlerInfo table and display on block2
$bk2_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='02-0003'";
$result_bk2 = sqlsrv_query($conn, $bk2_sql);

//Getting 03-0002 value from dbo.ZaehlerInfo table and display on block3
$bk3_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='03-0002'";
$result_bk3 = sqlsrv_query($conn, $bk3_sql);

//Getting 04-0007 value from dbo.ZaehlerInfo table and display on block4
$bk4_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='04-0007'";
$result_bk4 = sqlsrv_query($conn, $bk4_sql);

//Getting 05-0005 value from dbo.ZaehlerInfo table and display on block5
$bk5_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='05-0005'";
$result_bk5 = sqlsrv_query($conn, $bk5_sql);

//Getting 06-0006 value from dbo.ZaehlerInfo table and display on block6
$bk6_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='06-0006'";
$result_bk6 = sqlsrv_query($conn, $bk6_sql);

//Getting 07-0003 value from dbo.ZaehlerInfo table and display on block7
$bk7_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='07-0003'";
$result_bk7 = sqlsrv_query($conn, $bk7_sql);

//Getting 08-0001 value from dbo.ZaehlerInfo table and display on block8
$bk8_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='08-0001'";
$result_bk8 = sqlsrv_query($conn, $bk8_sql);

//Getting 09-0010 value from dbo.ZaehlerInfo table and display on block9
$bk9_sql = "SELECT ZaehlerValue FROM dbo.ZaehlerInfo Where ZaehlerName='09-0010'";
$result_bk9 = sqlsrv_query($conn, $bk9_sql);

// Fetching data from LiveAnzeige and display into Homepage Table
$sql = "SELECT * FROM dbo.LiveAnzeige";
$result = sqlsrv_query($conn, $sql);

$odd = "SELECT *
FROM [PROQM_V001].[dbo].[LiveAnzeige]
where [LiveAnzeigePKID] % 2 <> 0";
$result_odd = sqlsrv_query($conn, $odd);

$even ="SELECT *
FROM [PROQM_V001].[dbo].[LiveAnzeige]
where [LiveAnzeigePKID] % 2 = 0";
$result_even = sqlsrv_query($conn, $even);

?>