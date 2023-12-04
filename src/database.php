<?php

$dbhost = "sysmysql8.auburn.edu";
$dbuser = "jdf0050";
$dbpass = "Ford$021";
$dbname = "jdf0050db";

$tables = array("Books", "Customer", "Order_Detail", "Orders", "Shipper", "Subjects", "Supplier");

function get_connection()
{
    global $dbhost, $dbuser, $dbpass, $dbname;
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if ($connection === false) {
        die("Could not connect: " . mysqli_connect_error($connection));
    }
    return $connection;
}

function execute_query($connection, $query)
{
    return mysqli_query($connection, $query);
}

function count_rows($connection)
{
    return mysqli_affected_rows($connection);
}

function get_error($connection)
{
    return mysqli_error($connection);
}

?>