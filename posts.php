<?php
    include "db.php";
?>

<?php
    $sql = "SELECT * FROM posts ORDER BY Created_at DESC";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();
?>


<div class="col-sm-8-blog-main">

    <?php 
    foreach ($posts as $post) { 
    ?>

    <div class="blog-post">
                <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo $post['Id']?>"><?php echo $post['Title']?></a></h2>
                <p class="blog-post-meta"><?php echo $post['Created_at'] ?> by <?php echo $post['Author'] ?></p>
                <p><?php echo $post['Body']?></p>
    </div>

    <?php } ?>
    
</div>