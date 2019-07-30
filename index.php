
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>
</head>

<body>

<header>
  <?php include 'header.php'; ?>
</header>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            <?php include 'posts.php'; ?>

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->
        <?php include 'sidebar.php'; ?>

    </div><!-- /.row -->
   
</main><!-- /.container -->

<footer>
    
    <?php include 'footer.php'; ?>    

</footer>
</body>
</html>
