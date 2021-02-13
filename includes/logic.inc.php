<?php 

    $news = json_decode(file_get_contents("http://newsapi.org/v2/top-headlines?country=in&apiKey=bbbe9b9588734547875baf1dd34a1142"), true);

?>