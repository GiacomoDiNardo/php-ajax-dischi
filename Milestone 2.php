<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot).Utilizzare:

Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mileston 2</title>

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
    
    <div id="app">
        <div class="container py-5">
            <div class="row row-cols-6 gap-4">
                <div class="card mx-2 p-3" v-for="disc in listaDischi">
                    <img :src="disc.poster" alt="">
                    <div class="text-center pt-3">
                        <h4>{{ disc.title }}</h4>
                        <span>{{ disc.author }}</span><br>
                        <span>{{ disc.year }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vue.js"></script>
</body>
</html>