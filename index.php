<?php include_once 'includes/logic.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Application</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <h1 class="page-heading">Breaking News!!!</h1>

    <div class="news-container">
        <?php 
            if($news["status"] == "ok"){
                $i = 0;
                foreach($news["articles"] as $x){
                    
                    ?>
                        <div class="news-item">
                            <div class="news-item-inner">
                                <a href="<?= $x['url'] ?>" target="_blank">
                                    <div class="news-item-image">
                                    <?php 
                                        if($x['urlToImage'] != null || $x['urlToImage'] != ''){
                                            ?>
                                                <img src="<?= $x['urlToImage'] ?>" alt="<?= $x['title'] ?>">
                                            <?php
                                        } 
                                        else{
                                            ?>
                                                <img src="https://shahpourpouyan.com/wp-content/uploads/2018/10/orionthemes-placeholder-image-1.png" alt="<?= $x['title'] ?>">
                                            <?php
                                        }
                                    ?>
                                    </div>
                                    <div class="news-item-data-wrapper">
                                        <h3 class="news-item-title"><?= $x['title']; ?></h3>
                                        <p class="news-item-published">
                                            Published <?= ($x['author'] != null)? "by ".$x['author']: ''; ?>
                                            on, <?= date('d M,Y h:i:s a', strtotime($x['publishedAt'])); ?>
                                        </p>
                                        <p class="news-item-content">
                                            <?= $x['content']; ?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php
                    
                    $i++;
                }
            }
            else{
                "Error Occured!!! Please reload the page...";
            }
        ?>

    </div>
</body>
</html>