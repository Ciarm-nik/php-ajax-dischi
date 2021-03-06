<?php

// include "./database.php";

// header('Content-Type: application/json');

// echo json_encode($dischi);


//  var_dump($dischi);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue_json</title>
    <link rel="stylesheet" href="dist/app.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>

    <div id="app">

    <!-- Inserisco una select per i filtri -->
        <!-- <header>
        <div class="">
                <select id="genres" name="val">
                    <option value="rock">Rock</option>
                    <option value="pop">Pop</option>
                    <option value="metal">Metal</option>
                    <option value="jazz">jazz</option>
                </select>
            </div>
        </header> -->

        <main>
            <section class="container">
                <div class="container dischi-box">
                    <div class="card" v-for="disco in listDisc">
                        <div class="poster-img">
                        <img :src="disco.poster" alt="">
                        </div>
                        <h4> {{disco.title}} </h4>
                        <h5> {{disco.author}} </h5>
                        <p> {{disco.year}} </p>
                    </div>
                </div>
            </section>
        </main>
        <footer></footer>
    </div>
    <script src="app.js?rand=<?php echo rand(1, 100); ?>"></script>

</body>

</html>

/*

*