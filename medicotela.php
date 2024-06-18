<?php
session_start();
if (!isset($_SESSION{'iduser'})) {
    header('Location: ./loginform.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .custom-size {
            width: 25px;
            height: 24px; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg  fixed-top" style="background-color: 	#87CEEB;" >
    <div class="container-fluid " style="font-size: 20px;">
        <img src="./img/logo.png" class="navbar-brand  pt-1 mb-1 pl-5 pr-5"  alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav" >
            <li class="nav-item">
            <a class="nav-link" href="#ficha">Fichas Médicas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#informacao">Minhas informações</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-current="page">
                <img  src="./img/icone.png.webp" class="rounded-circle custom-size" alt="">
                <?php echo $_SESSION['nome']; ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end"  style="font-size: 18px;">
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Modificar Senha</a></li>
                <li><a class="dropdown-item" href="#apagar"  data-bs-toggle="modal" data-bs-target="#apagar">Apagar Conta</a></li>
                <li><a class="dropdown-item" href="#sair" data-bs-toggle="modal" data-bs-target="#sair">Sair</a></li>
            </ul>
            </li>
        </ul>
        </div>
        
    </div>
    </nav>
    <div id="ficha" class="vh-100 pt-4" style="background-color: 	#ADD8E6;">

        <div class="container py-5 h-100">
        <form method="post" action="#" data-parsley-validate>
            <div class="row mb-2">
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="">E-mail</label>
                    <input type="email"  class="form-control" required/>
                
                </div>
                </div>
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="">Nome</label>
                    <input type="text"  class="form-control" required />
                </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="">Endereço</label>
                    <input type="text"  class="form-control" required />
                
                </div>
                </div>
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="">Data de Nascimento</label>
                    <input type="date"  class="form-control" required />
                </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="">Gênero</label>
                    <input type="text"  class="form-control" required />
                
                </div>
                </div>
                <div class="col">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="">Data da Consulta</label>
                    <input type="date"  class="form-control" required />
                </div>
                </div>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="">Descrição</label>
                <input type="text"  class="form-control" required />
            
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="" >Diagnostico</label>
                <input type="text"  class="form-control" required  />

            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="" >Prescrição</label>
                <input type="text"  class="form-control" required  />
            </div>
        </form>
        <div class="p-1 text-center">
            <a href="#editar"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar">Editar</button></a> 
        </div>

        <div id="informacao" class="vh-100" >
            <div class="">
            <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
                <h2>Minhas informações</h2>                                                                                   
                <div class="table-responsive">          
                <table class="table table-hover ">
                    <thead>
                    <tr>
                        <th>E-mail</th>
                        <th>Nome</th>
                        <th>Especialidade</th>
                        <th>CRM</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#editar_infor"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar_infor">Editar</button></a> </td>
                        
                    </tr>
                    
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>










        <div id="editar" class="modal " tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                    <div id="ficha" class=" pt-4" style="background-color: rgb(219, 227, 249);">
                        <div class="container py-5 h-100">

                        <form method="post" action="#" data-parsley-validate>
                            <div class="row mb-2">
                                <div class="p-2">
                                    <h3>Edite informações Médicas</h3>
                                </div>
                                <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    
                                    <label class="form-label" for="">E-mail</label>
                                    <input type="email"  class="form-control" required />
                
                                </div>
                                </div>
                                <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="">Nome</label>
                                    <input type="text"  class="form-control" required />
                                </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="">Endereço</label>
                                    <input type="text"  class="form-control" required  />
                
                                </div>
                                </div>
                                <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="">Data de Nascimento</label>
                                    <input type="date"  class="form-control" required  />
                                </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="">Gênero</label>
                                    <input type="text"  class="form-control" required  />
                
                                </div>
                                </div>
                                <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="">Data da Consulta</label>
                                    <input type="date"  class="form-control" required  />
                                </div>
                                </div>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="">Descrição</label>
                                <input type="text"  class="form-control" required  />
            
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="" >Diagnostico</label>
                                <input type="text"  class="form-control" required />

                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="" >Prescrição</label>
                                <input type="text"  class="form-control" required />
                            </div>
                        </form>
                </div>
        <div class="p-1 text-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
           <a href="./verify/editar.php"><button type="button" class="btn btn-success">Salvar</button></a> 
        </div>
    </div>
  </div>
</div>
</div>




    <script src="./node_modules/jquery/dist//jquery.min.js"></script>
    <script src="./node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="./node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
    <link rel="stylesheet" href="./node_modules/parsleyjs/src/parsley.css">


  
    
</body>