<?php include 'header.php';?>
<div class="row">
    <div class="col-sm-8 blog-main">
        <?php include 'sidebar.php';?>
    </div>
</div>  
<?php include 'footer.php';?>





<?php
    include "db.php";
    
    if(!empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['body'])) {
        $author = $_POST['author'];
        $title = $_POST['title'];
        $body = $_POST['body'];
        $createdAt = $_POST['created_at'];
        $sqlInsert = "INSERT INTO posts (Author, Title, Body, Created_at) VALUES ('{$author}', '{$title}', '{$body}', '{$createdAt}');";
        $statementInsert = $connection->prepare($sqlInsert);
        $statementInsert->execute();
        $statementInsert->setFetchMode(PDO::FETCH_ASSOC);
    
        header("Location: http://localhost/zavrsnirad/index.php");
    } else {
        header("Location: http://localhost/zavrsnirad/create.php?&error=1");
    }
?>