<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dori {
            text-align: center;
            float: left;
            position: absolute;
            background-color: rgb(196, 255, 228);
            margin: auto;
            height: auto;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            height: auto;
            padding: 50px;
            width: 1000px;
        }
    </style>
</head>

<body>
    <div class="dori">
        Le <strong>Berger allemand  </strong> est un chien très apprécié en France, au Canada et aux États-Unis, et d’autant plus célèbre qu’il est très utilisé dans les films et les séries télévisées. Son caractère très obéissant et exceptionnellement
        apte au dressage en fait, en effet, un acteur de cinéma de choix. Très bon chien de travail, c’est l’une des races les plus utilisées pour la garde en général, et celle des troupeaux en particulier.
    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/be1.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/be2.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/be3.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/be4.jpeg") }}"alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>


    </div>
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/be5.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <br>
            <div class="card">
                <img src="{{ asset("img/be6.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>

        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/be7.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 last-img">
            <br>
            <div class="card">
                <img src="{{ asset("img/be8.jpeg") }}" alt="Veille de Janvier 2020" style="width:90%">
            </div>
        </div>


    </div>
</body>

</html>