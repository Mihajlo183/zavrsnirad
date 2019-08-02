
<?php
include "db.php";
$id = $_POST['Id'];
if (!empty($_POST['Author']) && !empty($_POST['comment'])) {
    $author = $_POST['Author'];
    $comment = $_POST['comment'];
    $sqlAddComm = "INSERT INTO comments(Author, Text, Post_id) VALUES ('{$author}', '{$comment}', {$id})";
    $statementAddCom = $connection->prepare($sqlAddComm);
    $statementAddCom->execute();
    $statementAddCom->setFetchMode(PDO::FETCH_ASSOC);
    header("Location: http://localhost/zavrsnirad/single-post.php?post_id=$id");
} else {
    header("Location: http://localhost/zavrsnirad/single-post.php?post_id=$id&error=1");
}

