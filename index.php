<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- MY STYLE CSS-->
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Dischi JSON</title>
</head>

<body>
    <div id="app" v-cloak>
        <header>
            <div class="container p-3 text-center">
                <h1>CD musicali disponibili</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-4" v-for="item in cd">
                        <div class="text-center p-3">
                            <img :src="item.startImg" alt="foto">
                            <div>{{ item.startName }}</div>
                            <div>{{ item.startAuthor }}</div>
                            <div><strong>{{ item.startEdition }}</strong></div>
                            <div class="d-flex justify-content-center">
                                <button class="m-1 btn btn-dark btn-sm">descrizione</button>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>


    <!--VUE.JS CDN-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--AXIOS CDN-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- MY JS-->
    <script src="./js/main.js"></script>
</body>

</html>