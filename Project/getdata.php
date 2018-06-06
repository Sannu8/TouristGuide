<?php
// This file I have named it getdata.php
// And you will see why
include("connect.php");
//Query of facebook database
$Landmarks = mysql_query("SELECT * FROM Landmarks")
or die(mysql_error());

//Output results
if(!$Landmarks)
{
    mysql_close();
    echo json_encode("There was an error running the query: " . mysql_error());
}
elseif(!mysql_num_rows($Landmarks))
{
    mysql_close();
    echo json_encode("No results returned");
}
else
{
    $header = false;
	$output_string = "";
    $output_string .=  "<table border='1'>\n";
    while($row = mysql_fetch_assoc($Landmarks))
    {
        if(!$header)
        {
            $output_string .= "<tr>\n";
            foreach($row as $header => $value)
            {
                $output_string .= "<th>{$header}</th>\n";
            }
            $output_string .= "</tr>\n";
        }
        $output_string .= "<tr>\n";
        foreach($row as $value)
        {
            $output_string .= "<th>{$value}</th>\n";
        }
        $output_string .= "</tr>\n";
    }
    $output_string .= "</table>\n";
}

mysql_close();
// This echo for jquery 
echo json_encode($output_string);

?>'