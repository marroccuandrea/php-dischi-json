<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- VUE  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js" integrity="sha512-pmaEGtUAy7E5gRmwjLqQAD/QWw0dL4Z59b6b+2HQkqQwQ+HcPLLb9/KbUNo5zr10WuXmbivK9nYVZOyDkMgZMg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CSS  -->
    <link rel="stylesheet" href="style.css">
    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP DISCHI JSON</title>
</head>

<body>
    <div id="app">
        <div class="container-fluid mb-5 d-flex align-items-center">
            <div class="container">
                <img class="logo" src="png-clipart-spotify-logo-spotify-computer-icons-podcast-music-apps-miscellaneous-angle-1-e1614848134495.png" alt="">
            </div>
        </div>
        <h1 class="text-center text-white mb-5">PHP Dischi JSON</h1>
        <div class="container">
            <div class="text-white d-flex justify-content-center text-center">

                <div class="d-flex flex-column mx-2">
                    <label for="title">Title</label>
                    <input v-model.trim="newAlbum.title" class="form-control" type="text" name="title">
                </div>

                <div class="d-flex flex-column mx-2">
                    <label for="author">Author</label>
                    <input v-model.trim="newAlbum.author" class="form-control" type="text" name="author">
                </div>

                <div class="d-flex flex-column mx-2">
                    <label for="year">Year</label>
                    <input v-model.trim="newAlbum.year" class="form-control" type="text" name="year">
                </div>

                <div class="d-flex flex-column mx-2">
                    <label for="genre">Genre</label>
                    <input v-model.trim="newAlbum.genre" class="form-control" type="text" name="genre">
                </div>

                <div class="d-flex flex-column mx-2">
                    <label for="image">Image (Url)</label>
                    <input v-model="newAlbum.poster" class="form-control" type="text" name="image">
                </div>

                <div class="mt-4 mx-2">
                    <button @click.stop="addNewAlbum" class="btn btn-success">Aggiungi</button>
                </div>

            </div>
        </div>

        <div class="container my-5">
            <div class="row row-cols-3">
                <div class="col" v-for="(item,index) in diskList" :key="index">
                    <div class="card mb-5">
                        <img :src="item.poster" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ item.title }}</h5>
                            <p class="card-text">{{ item.author }}</p>
                            <h6>{{ item.genre }}</h6>
                            <h5>{{ item.year }}</h5>
                            <button @click.stop="removeAlbum(index)" class="btn btn-danger delete"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="script.js"></script>

</html>
<style>

</style>