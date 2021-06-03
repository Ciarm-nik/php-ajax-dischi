<?php

include "../php-ajax-dischi/database.php";

// var_dump($dischi);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-AJAX-DISCHI</title>
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

    <header></header>

    <main>
        <section class="container">
            <div class="container dischi-box">
                <?php foreach ($dischi as $disco) { ?>
                    <div class="card">
                        <div class="disco-content">
                            <div class="poster-img">
                                <img src="<?php echo $disco['poster'] ?>" alt="">
                            </div>
                            <h4><?php echo $disco['title'] ?></h4>
                                <h5><?php echo $disco['author'] ?></h5>
                                    <!-- <h2><?php echo $disco['genre'] ?></h2> -->
                                        <p><?php echo $disco['year'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>

    </main>

    <footer></footer>


    <script src="app.js"></script>
</body>

</html>