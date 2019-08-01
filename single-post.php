<title>Sample blog post</title>
<?php
    $postId = -1;
    if (isset($_GET['postId'])) {
        $postId = $_GET['postId'];
    }
?>

<?php include "db.php"?>
<?php
$sql = "select * from posts where Id=$postId;";
$statement = $connection->prepare($sql);
$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);
$post = $statement->fetch();
?>

<?php include 'header.php';?>
 
<div> <?php echo $post['Title'] ?> </div> 

<div class="row">
    <div class="col-sm-8 blog-main">
        <?php echo $post['Body'] ?>

        <?php include 'coments.php';?>

        <?php include 'sidebar.php';?>
    </div>

</div>  
<?php include 'footer.php';?>

