<?php include "db.php"?>
<?php
$sql = "select * from posts order by Created_at desc;";
$statement = $connection->prepare($sql);
$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);
$ads = $statement->fetchAll();
?>

<?php foreach($ads as $value){?>
<div class="blog-post">

            <a href='single-post.php?postId=<?php echo $value['Id'] ?>'><h2 class="blog-post-title"><?php echo $value['Title'] ?></h2></a>

            <p class="blog-post-meta"><?php echo $value['Created_at'] ?> <a href="#"><?php echo $value['Author'] ?></a></p>

            <p><?php echo $value['Body'] ?></p>
                
         
 </div><!-- /.blog-post -->

<?php } ?>