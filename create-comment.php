
<?php
include "db.php";
$id = $_POST['id'];
if (!empty($_POST['author']) && !empty($_POST['comment'])) {
    $author = $_POST['author'];
    $comment = $_POST['comment'];
    $sqlAddComm = "INSERT INTO comments(Author, Text, Post_id) VALUES ('{$author}', '{$comment}', {$id})";
    $statementAddCom = $connection->prepare($sqlAddComm);
    $statementAddCom->execute();
    $statementAddCom->setFetchMode(PDO::FETCH_ASSOC);
    header("Location: http://localhost/zavrsnirad/single-post.php?post_id=$id");
} else {
    header("Location: http://localhost/zavrsnirad/single-post.php?post_id=$id&error=1");
}

