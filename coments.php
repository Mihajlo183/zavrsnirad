
<?php include "db.php"?>
<?php
$sql = "select * from comments where Post_Id=:postId;";
$statement = $connection->prepare($sql);
$statement->bindValue(':postId', $postId);
$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);
$comments = $statement->fetchAll();
?>

<?php foreach($comments as $value){?>

    <button type=  onclick="hideShow()">Hide Comments</button>

<hr>
<ul>
<b>
Author
</b>
<li><?php echo $value ['Author']?></li>

<?php } ?>

