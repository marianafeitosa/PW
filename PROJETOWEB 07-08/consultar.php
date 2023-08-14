

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Projeto Web</title>
</head>
<body class="text-bg-light">
    <div class="container text-center">
        <div class="row bg-primary">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand link-light" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active link-light" aria-current="page" href="#">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-secondary" href="consultar.php">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row bg-white">
            <div class="col">
                &nbsp;
            </div>
        </div>



        <div class=" container text-center table ">
            <div class="row">
                <div class="col">
                  <h4 class="text-start"> CONSULTA CLIENTES </h4>
                  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ação</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Mark</th>
      <td>11 999999999</td>
      <td><button type="button" class="btn btn-primary">Editar</button>
</td>
<td><button type="button" class="btn btn-primary">Excluir</button>
</td>
    
    </tr>
    <tr>
      <th scope="row">Jacob</th>
      <td>11 123456789</td>
      <td><button type="button" class="btn btn-primary">Editar</button>
</td>
<td><button type="button" class="btn btn-primary">Excluir</button>
</td>
      
    </tr>
    
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</body>
</html>