<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div id="app">
    <main>
        <div class="mainComponent">
        <div class="container mt-5">
            <div class="row gy-5 mx-auto cardWrapper">
                <!--<div v-for="(disk,i) in filteredGenres" :key="i" class="col">-->
                <div class="card" v-for="movie in movies">
                <div class="card-body">
                    <!--<img class="card-img-top poster" :src="disk.poster" alt="Card image cap">-->
                    <h5 class="card-title mt-3">{{disk.title}}</h5>
                    <p style="color:grey">{{disk.author}}</p>
                    <p style="color:grey">{{disk.year}}</p>
                </div>
                </div>

            </div>
        </div>
        </div>

    </main>
</div>
<script src="./app.js"></script>
</body>
<style>
    /*navbar*/
    .navbarStyle{
        background-color: #2e3a46;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
    }

    /*cards*/
    .card{
      background-color: #2e3a46;
      width: 194px;
      height: 364px;
      text-align: center;
    }
    .poster{
      width: 160px;
      height: 160px;
    }
    .card-title{
      max-width: 160px;
      color: white;
    }


    /*main*/
</style>
</html>



