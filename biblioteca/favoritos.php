<?php include "cabecalho.php"?>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" data-target="#staticBackdrop">
            <a class="navbar-brand" href="#">BIBLIOTECA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="favoritos.php">Favoritos <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Editar Biblioteca
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="cadastrar.php">Adicionar Livros</a>
                </div>
                </li>
            
            </ul>
         
            </div>
    </nav> <br>

    <div class="row">
                    <div class="col">
                        <div class="card" style="width: 12rem;">
                            <img src="https://lojasaraiva.vteximg.com.br/arquivos/ids/7052177/639307.jpg?v=637076519472470000    " class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kama Sutra</h5>
                                    <p class="card-text">Richar Borton</p>
                                    <div class="align">
                                        <a href="#" class="btn btn-primary-wite"><svg class="bi bi-star-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="gold" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                          </svg></a>
                                          <a href="#" class="btn btn-primary-wite"><svg class="bi bi-trash-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="red" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                          </svg> </a>
                                        </div>
                                </div>
                            </div> 
                    </div>

 
</body>
</html>