<!DOCTYPE html>
<html>
<head>
    <title>News</title>
</head>
<body>
    <?php
        foreach ($news as $new) {
            ?>
        <h2><a href="<?php echo  'article.php?id=' . $new->id; ?>"><?php echo $new->article; ?></a></h2>
            <p><?php echo $new->text; ?></p>
            <span><?php echo $new->author->name ?></span>
    <?php
        }   ?>
</body>
</html>