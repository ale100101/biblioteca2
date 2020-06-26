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
                    <a class="dropdown-item" href="#">Adicionar Livros</a>
                </div>
                </li>
            
            </ul>
         
            </div>
        </nav><br>
        <div class="align">  
        <div class="row">
      <div class="col-13 ">
        <div class="shadow p-3 mb-2 bg-white rounded">       
                <div class="card"  style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">ADICIONAR LIVRO A BIBLIOTECA</h5>
                        <input class="form-control" type="text" placeholder="NOME DO LIVRO" require>  <br>
                        <input class="form-control" type="text" placeholder="AUTOR" require ><br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile"require>CAPA DO LIVRO</label>
                            </div><br><br>
                        <div class="align">
                            <a href="#" class="btn btn-primary"type="submit">CADASTRAR</a>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
  </div>
</body>
</html>