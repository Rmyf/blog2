<?php
$title = $_POST['title'];
$content = $_POST['content'];


if(!is_dir('post')){
mkdir ('post');
}

//Creation du fichier
$file = fopen('post/'.$title. '.txt', 'w');

//écrire dans le fichier
fwrite($file,$content);

fclose($file);

echo '<p>Well done! You have created a new post</p>';
header ('location: index.php');


?>