<?php
$import_attempted = false;
$import_succeeded = false;
$import_error_message = "";
if ( $_SERVER[ "REQUEST_METHOD"] == "POST")
{
    $import_attempted = true;
    $con = @mysqli_connect( "localhost", "pizza_user", "pizzapizza",
        "pizza_db");
    if (mysqli_connect_errorno())
    {
        $import_error_message = "Failed to connect to MySQL" .
            mysqli_connect_error();
    } else {
        try {
            $contents = file_get_contents($_FILES[ "ImportFile" ][ "tmp_name"
            ]);
            $lines = explode( "\n", $contents);
            foreach ($lines as $line)
            {
                $parsed_csv_line = str_getcsv($line);
//TODO: do something with the parsed data
// For full credit track how many rows were inserted vs updated in each entity then print info
echo_implode( "; ", $parsed_csv_line) . "</br>";
}
            $import_succeeded = true;
        }
        catch ( Error $exception)
        {
            $import_error_message = $exception->getMessage() . " at " .
                $exception->getFile()
                . " (line " . $exception->getLine() . ") </br>";
        }
    }
}
?>
<html>
<head>
    <title>Pizza Data Import</title>
</head>
<body>
<h1>Pizza Data Import</h1>
<?php
if($import_attempted)
{
    if($import_succeeded)
    {
        ?>
        <h1><span style="color: green;">"Import Succeeded"</span></h1>
        <?php
    }
    else
    {
        ?>
        <h1><span style="color: red;">"Import Failed"</span></h1>
        <span style="color: red;">
<?php echo $import_error_message ; ?>
</span>
        <?php
    }
}
?>
<form method=”post” enctype=”multipart/form-data”>
    File: <input type=”file” name=”importFile”/>
    <br/><br/>
    <input type=”submit” value=”Upload Data” />
</body>
</html>
