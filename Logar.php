<html>
    <head>
        <title>Insira o titulo aqui</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <!--Ícone da página -->
        <link rel="icon" href="img/Logo.png">
        <!-- Conexão com o bootstrap/javascript/jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/MainStyle.css" rel="stylesheet">
    </head>
    
    <!-- Define estilos menores da pagina -->
    <style>
        body{
            background-image: url(img/7961.jpg);
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; /* Resize the background image to cover the entire container */
        }
    </style>
    
    <body>    
        
        
            <div class="bg-info text-center bigger letraBranca">
            <?php 
                //session_start();
                //echo $_SESSION['erro']; 
            ?>
            </div>
       
        <div class="container-fluid">
            <div class="row justify-content-center">
                
                <div class="col-md-4"></div>
                
                <div class="col-md-4">
                            <!-- Logotipo de preferencia em PNG - Os col-md servem para centralizar o conteudo -->
                            <img src="img/logomarca.png" alt="Logo" class="rounded mx-auto d-block" style="width:200;   ">
                    
                    
                    <div class="card card-LogCad">
                        <div class="card-header-login card-header"><h1 class="letraBranca">Login</h1>
                            <p class="letraBranca">Lorem ipsum et cetera</p>
                        </div>
                      <div class="card-body card-body-LogCad"><form action="Databoard.php" method="post">
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email">
                          </div>
                          <div class="form-group">
                            <label for="pwd">Senha:</label>
                            <input type="password" name="senha" class="form-control" id="pwd">
                          </div>
                          <div class="form-group form-check">
                            <label class="form-check-label">
                                    <input type="hidden" name="form_submitted" value="1" />
                            </label>
                          </div>
                            <div class="form-group form-check">
                                <div class="row">
                                <div class="col-md-6">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" > Lembrar-me
                                </label>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Logar</button>
                                </div>
                                </div>
                              </div>    
                        </form>
                          <p class="smaller text-left"><a href="Logar.php">Esqueci minha senha</a></p>
                          <p class="smaller text-left"><a href="Cadastrar.php">Cadastrar</a></p>
                      </div> 
                    </div>
                </div>
                
                <div class="col-md-4"></div>
                
            </div>
        </div>
    </body>
</html>