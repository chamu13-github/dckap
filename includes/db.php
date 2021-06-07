<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dckap";

$conn = mysqli_connect($dbServername, $dbUsername , $dbPassword,$dbName);
if(!$conn)
{
    echo 'not connected';
}
