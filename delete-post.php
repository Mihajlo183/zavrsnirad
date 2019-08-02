<?php
include "db.php";
$id = $_GET['id'];

$sqlDelComments = "DELETE FROM comments WHERE Post_Id = $id";
$statementDeleteComments = $connection->prepare($sqlDelComments);
$statementDeleteComments->execute();

$sqlDel = "DELETE FROM posts WHERE id = $id";
$statementDelete = $connection->prepare($sqlDel);
$statementDelete->execute();

header("Location: http://localhost/zavrsnirad/index.php");
?>