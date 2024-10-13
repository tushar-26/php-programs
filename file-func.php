<?php 


$file = fopen("t.txt", "r");  //fopen
$fptr = fopen("https://example-files.online-convert.com/document/txt/example.txt", "r");

//echo $file;
//echo $fptr;

$content = fread($file, filesize("t.txt"));    //fread
echo $content;

echo "<br>";

$content1 = stream_get_contents($fptr);
echo $content1;


?>