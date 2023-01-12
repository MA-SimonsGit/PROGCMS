<?php
$destination = 'images/' . basename($_FILES['image']['name']);
$file = $_FILES['image']['tmp_name'];
$err = $_FILES['image']['error'];

if ($err == 0 && move_uploaded_file($file, $destination))
    echo "File {$file} uploaded and moved to {$destination}";

//echo $destination;
//echo '<pre>';
//var_dump($_FILES);
//echo '</pre>';

