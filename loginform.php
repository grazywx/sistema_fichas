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

                                        <form method="post" action="./verify/logar.php" data-parsley-validate>

                                            <div class="d-flex flex-column  align-items-center mb-3 pb-1 justify-content-center ">
                                                <span class="h1 fw-bold mb-0 "><img src="./img/logo.png" alt=""></span>
                                                <h5 class="fw-normal mb-3 pb-3 " style="letter-spacing: 1px;">Faça login em sua conta</h5>
                                            </div>

                                            <?php
                                                if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 'ok'):
                                            ?>
                                                <p id="Alerta1" style="Margin-top: 0px; text-align: center;" ><span class="text-sucess">Usuário cadastrado com sucesso!</span></p>
                                            <?php
                                                endif;
                                            ?>
                                            <?php
                                                 if (isset($_GET["erro"]) && $_GET["erro"] == 'ok'):
                                            ?>
                                                <p id="Alerta2" style="Margin-top: 0px; text-align: center;"><span class="text-danger">Usuário ou senha incorretos!</span></p>
                                            <?php
                                                endif;
                                            ?>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form2Example17">Endereço de E-mail<span class="text-danger">*</span></label>
                                                <input name="email" type="email" class="form-control form-control-lg" required>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="">Senha<span class="text-danger">*</span></label>
                                                <input name="senha" type="password" class="form-control form-control-lg" required>
                                            </div>

                                            <div class="pt-1 mb-4" style="color: #393f81; text-align: center;">
                                                <input class="btn btn-primary" type="submit" name="submit" value="Entrar">
                                            </div>
                                                
                                            <p class="mb-5 pb-lg-2" style="color: #393f81; text-align: center;">Não tem uma conta?<a href="./cadastroform.php">cadastre-se</a></p>

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