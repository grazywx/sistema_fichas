<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    
</head>

<body>
        <section class="vh-100" style="background-color: rgb(219, 227, 249);">
            <div class="container py-2 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card shadow" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-6 d-none d-lg-block ">
                                    <img src="./img/imagem.jpg" alt="imagem" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" id="img" />
                                </div>
                                <div class="col-md-12 col-lg-6 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-2 text-black">

                                        <form method="post" action="./verify/cadastra.php" data-parsley-validate>

                                            <div class="d-flex flex-column  align-items-center mb-2 pb-1 justify-content-center ">
                                                <h5 class="fw-normal  pb-1 p-lg-2" style="letter-spacing: 1px;">Cadastre-se Aqui</h5>
                                            </div>

                                            <div class="form-outline mb-2">
                                                <label class="form-label" for="">Nome<span class="text-danger">*</span></label>
                                                <input name="nome" type="text" class="form-control form-control-lg" required> 
                                            </div>

                                            <div class="form-outline mb-2">
                                                <label class="form-label" for="">Endereço de E-mail<span class="text-danger">*</span></label>
                                                <input name="email" type="email" class="form-control form-control-lg" required>
                                            </div>

                                            <div class="form-outline mb-2">
                                                <label class="form-label" for="">Senha<span class="text-danger">*</span></label>
                                                <input name="senha" type="password" class="form-control form-control-lg" required>
                                 
                                            </div>
                                            <div>
                                                <p>Tipo de Usuário<span class="text-danger">*</span></p>
                                                <input type="radio" id="medico" name="tipo" value="medico" required>
                                                <label for="medico">Médico</label>
                                                <input type="radio" id="paciente" name="tipo" value="paciente" required>
                                                <label for="paciente">paciente</label>
                                            </div>
                                            
                                            <div class="pt-1 mb-2" style="color: #393f81; text-align: center;">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Cadastrar" >
                                            </div>

                                            <p class="mb-5 pb-lg-2" style="color: #393f81; text-align: center;">Já tem uma conta?<a href="./loginform.php">Entrar</a></p>


                                        </form>
        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="./node_modules/jquery/dist//jquery.min.js"></script>
    <script src="./node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="./node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
    <link rel="stylesheet" href="./node_modules/parsleyjs/src/parsley.css">

</body>

</html>