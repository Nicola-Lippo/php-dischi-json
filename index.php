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
                            <img :src="item.img" alt="foto">
                            <div>{{ item.name }}</div>
                            <div>{{ item.author }}</div>
                            <div><strong>{{ item.edition }}</strong></div>
                        </div>
                        <button>descrizione</button>
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