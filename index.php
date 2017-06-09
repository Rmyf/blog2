<?php
$array = scandir ('post', SCANDIR_SORT_NONE);
$posts= [];
// On trie 
foreach ($array as $file){
        if (is_dir($file)){
        continue;

        }
array_push($posts,$file);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
</head>
<body>
    <h1>My Blog</h1>
    <nav><a href="create.html">New Post</a></nav>
    <p>Below are my thought on programmming:</p>

    <?php foreach ($posts as $post){ ?>

    <article>
        <h2><?php echo basename($post,'.txt'); ?></h2>
        <p><?php echo file_get_contents ('post/'.$post);?></p>

    </article>
    <?php } ?>
      


    
           
    
</body>
</html>