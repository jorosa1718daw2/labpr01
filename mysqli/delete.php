<?php

// connect to the database
include('DB.php');

// confirm that the 'id' variable has been set
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// get the 'id' variable from the URL
$id = $_GET['id'];

// delete record from database
if ($stmt = $mysqli->prepare("DELETE FROM armaric WHERE id = ? LIMIT 1"))
{
$stmt->bind_param("id",$_POST[$id]);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();

// redirect user after delete is successful
header("Location: msqli.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: msqli.php");
}

?>