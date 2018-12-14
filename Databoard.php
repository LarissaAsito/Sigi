<html>
    <head>
        <title>Insira o titulo aqui</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
    <body>

        <?php
        
        //session_start();

        //$servername = "localhost";
        //$username = "root";
        //$password = "";
        //$dbname = "infobiobd";
        //$login = "teste@gmail.com"; //$_SESSION["login"];

        // Cria conexão
        //$conn = new mysqli($servername, $username, $password, $dbname);


        // Checa conexão
        //if ($conn->connect_error) {
        //    die("Connection failed: " . $conn->connect_error);
        //}

        //$sql = "SELECT user_nome,user_email FROM usuarios where user_email='$login'";
        //$result = mysqli_query($conn, $sql);

        //if (mysqli_num_rows($result) > 0) {
            // output data of each row
         //   while($row = mysqli_fetch_assoc($result)) {
         //       $nome = "teste"; //$row["user_nome"];
        //        $email = "teste@gmail.com"; //$row["user_email"];
        //    }
        //} else {
        //    echo "_Falha em buscar dados_";
        //}

        //mysqli_close($conn);
        ?>

            <nav class="navbar navbar-expand-md bg-infobio navbar-light">
            
            <!-- Botão para celular -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbarreduzida">
                <span class="navbar-toggler-icon"></span>
              </button>
            
            <div class="collapse navbar-collapse" id="Navbarreduzida">
              <!-- Links -->
              <ul id="guia" class="nav nav-pills" role="tablist">
                  <!--Colocar link para o site da infobio -->
                    <!-- Logotipo de preferencia em PNG -->
                  <a class="navbar-brand" href="#">
                    <img src="img/logomarca.png" alt="Logo" style="width:80px;">
                  </a>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Diretorias
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="pill" href="#financeiro">Financeiro</a>
                    <a class="dropdown-item" data-toggle="pill" href="#projetos">Projetos</a>
                    <a class="dropdown-item" data-toggle="pill" href="#marketing">Marketing</a>
                    <a class="dropdown-item" data-toggle="pill" href="#recursos">RH</a>
                    <a class="dropdown-item" data-toggle="pill" href="#qualidade">Qualidade</a>
                  </div>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Avaliações
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="pill" href="#360">360º</a>
                    <a class="dropdown-item" data-toggle="pill"  href="#mensal">Mensal</a>
                  </div>
                </li>
                  
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="pill" href="#reunioes">Reuniões</a>
                </li>
                  
              </ul>
            </div>
        </nav>

            <!-- Tab panes -->
            <div class="tab-content">
    <div id="financeiro" class="container-fluid tab-pane"><br>
        <div class="row">
            <div class="col-md-3">
                <div class="container">
                  <h2 class="text-center">Financeiro</h2>
                        <ul class="nav flex-column nav-pills">
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#fluxo">Fluxo de caixa</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#troca">Troca de gestão</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#relatorios">Relatórios</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#membrosFinanceiro">Membros</a>
                          </li>
                        </ul>
                </div>
            </div>
            <div class="col-md-9"> 
                    <div class="tab-content">
                        <div id="fluxo" class="container-fluid tab-pane fade">
                          <h3>Fluxo de caixa</h3>
                            <div class="container">           
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Data</th>
                                    <th>Entrada</th>
                                    <th>Saida</th>
                                    <th>Balanço</th>
                                    <th>Descrição</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>01/01/2000</td>
                                    <td>1000</td>
                                    <td>0</td>
                                    <td>550</td>
                                    <td>Pagamento</td>
                                  </tr>
                                  <tr>
                                    <td>05/01/2015</td>
                                    <td>0</td>
                                    <td>300</td>
                                    <td>75</td>
                                    <td>Imersão</td>
                                  </tr>
                                  <tr>
                                    <td>07/03/2017</td>
                                    <td>250</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>Doação</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                
                        <div id="troca" class="container-fluid tab-pane fade">
                          <h3>Troca de gestão</h3>
                            <h5>(Digite o rg de cada membro)</h5>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-7">
                                <form method="post" action="Buscar_info.php" class="fundoClaro">
                                <div class="form-group">
                                    <label for="Presidente">Presidente: </label>
                                    <input type="text" class="controle_formulario" name="nome">
                                      </div>
                                <div class="form-group">
                                    <label for="Qualidade">Qualidade: </label>
                                    <input type="text" class="controle_formulario" name="nome">
                                    </div>
                                <div class="form-group">    
                                    <label for="Financeiro">Financeiro: </label>
                                    <input type="text" class="controle_formulario" name="nome">
                                      </div>
                                <div class="form-group">   
                                    <label for="Projetos">Projetos: </label>
                                    <input type="text" class="controle_formulario" name="nome">
                                    </div>
                                <div class="form-group">   
                                    <label for="RH">Recursos humanos: </label>
                                    <input type="text" class="controle_formulario" name="nome">
                                    </div>
                                <div class="form-group"> 
                                    <label for="Marketing">Marketing: </label>
                                    <input type="text" class="controle_formulario" name="nome">
                                    </div>
                                <div class="form-group">
                                    <label for="secretario">Secretário: </label>
                                    <input type="text" class="controle_formulario" name="nome">
                                    </div>
                                <div class="form-group">
                                    <label for="conselho">Conselho fiscal: </label>
                                    <input type="text" class="controle_formulario" name="nome">
                                  </div>
                                  <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input type="hidden" name="form_submitted" value="1" />
                                    </label>
                                  </div>
                                  <button type="submit" class="btn btn-success">Buscar informações</button>
                                </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                
                        <div id="relatoriosFinanceiro" class="container-fluid tab-pane fade">
                          <h3>Relatórios</h3>
                          <form class="form-inline" action="/action_page.php">
                              <label for="selecao" class="mr-sm-2">Documento:</label>
                                <select class="form-control" id="sel1">
                                    <option>ComboBox</option>
                                    <option>ETC</option>
                                    <option>Algo</option>
                                </select>
                              <br>
                              Importante: Criar um negocio para as datas
                            </form>
                        </div>
                
                        <div id="membrosFinanceiro" class="container-fluid tab-pane fade">
                          <h3>Membros</h3>
    <div class="card-deck">
    
    <div class="card">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
        <!-- <a href="#" class="btn btn-success btn btn-success-primary">See Profile</a> -->
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>
</div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    <div id="projetos" class="container-fluid tab-pane fade"><br>
        <div class="row">
            <div class="col-md-3">
                <div class="container">
                  <h2 class="text-center">Projetos</h2>
                        <ul class="nav flex-column nav-pills">
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#andamento">Em andamento</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#finalizados">Finalizados</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#relatoriosProjetos">Relatórios</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#membrosProjetos">Membros</a>
                          </li>
                        </ul>
                </div>
            </div>
            <div class="col-md-9"> 
                    <div class="tab-content">
                        <div id="andamento" class="container-fluid tab-pane fade">
                            <div class="card-columns">

                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                    
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>

                        </div>
       
                        </div>
                        
                        <div id="finalizados" class="container-fluid tab-pane fade">
                            <div class="card-columns">

                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                    
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>
                            <div class="card">
                                <a href="projeto.php"><img class="card-img-top" src="img/project.png" alt="foto"></a>
                              <div class="card-body">
                                <h4 class="card-title">Projeto</h4>
                                <p class="card-text">Empresa</p>
                              </div>
                            </div>

                        </div>                      
                        </div>

                        <div id="relatoriosProjetos" class="container-fluid tab-pane fade"></div>
                        
                        <div id="membrosProjetos" class="container-fluid tab-pane fade">
                          <h3>Membros</h3>
                            <div class="card-columns">

                            <div class="card">
                              <img class="card-img-top" src="img/pawn.png" alt="foto">
                              <div class="card-body">
                                <h4 class="card-title">Nome</h4>
                                <p class="card-text">Texto qualquer</p>
                                <!-- <a href="#" class="btn btn-success btn btn-success-primary">See Profile</a> -->
                              </div>
                            </div>

                            <div class="card">
                              <img class="card-img-top" src="img/pawn.png" alt="foto">
                              <div class="card-body">
                                <h4 class="card-title">Nome</h4>
                                <p class="card-text">Texto qualquer</p>
                              </div>
                            </div>

                            <div class="card">
                              <img class="card-img-top" src="img/pawn.png" alt="foto">
                              <div class="card-body">
                                <h4 class="card-title">Nome</h4>
                                <p class="card-text">Texto qualquer</p>
                              </div>
                            </div>

                            <div class="card">
                              <img class="card-img-top" src="img/pawn.png" alt="foto">
                              <div class="card-body">
                                <h4 class="card-title">Nome</h4>
                                <p class="card-text">Texto qualquer</p>
                              </div>
                            </div>

                            <div class="card">
                              <img class="card-img-top" src="img/pawn.png" alt="foto">
                              <div class="card-body">
                                <h4 class="card-title">Nome</h4>
                                <p class="card-text">Texto qualquer</p>
                              </div>
                            </div>

                            <div class="card">
                              <img class="card-img-top" src="img/pawn.png" alt="foto">
                              <div class="card-body">
                                <h4 class="card-title">Nome</h4>
                                <p class="card-text">Texto qualquer</p>
                              </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div id="marketing" class="container-fluid tab-pane fade"><br>
        <div class="row">
            <div class="col-md-3">
                <div class="container">
                  <h2 class="text-center">Marketing</h2>
                        <ul class="nav flex-column nav-pills">
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#botao1">botao 1</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#botao2">botao 2</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#botao3">botao 3</a>
                          </li>
                        </ul>
                </div>
            </div>
            <div class="col-md-9"> 
                    <div class="tab-content">
                        <div id="botao1" class="container-fluid tab-pane fade">
                            <h3>Botao clicado</h3>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div id="recursos" class="container-fluid tab-pane fade"><br>
        <div class="row">
            <div class="col-md-3">
                <div class="container">
                  <h2 class="text-center">Recursos humanos</h2>
                        <ul class="nav flex-column nav-pills">
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#gerenciar">Gerenciar membros</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#entrevistas">Entrevistas</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#avaliacoes">Avaliações</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#relatoriosRH">Relatórios</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#membrosRH">Membros</a>
                          </li>
                        </ul>
                </div>
            </div>
            <div class="col-md-9"> 
                    <div class="tab-content">
                        <div id="botao1" class="container-fluid tab-pane fade">
                            <h3>Botao clicado</h3>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div id="qualidade" class="container-fluid tab-pane fade"><br>
        <div class="row">
            <div class="col-md-3">
                <div class="container">
                  <h2 class="text-center">Qualidade</h2>
                        <ul class="nav flex-column nav-pills">
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#documentacao">Documentação</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#cursos">Cursos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#relatoriosQualidade">Relatórios</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link margemTopoBaixo" data-toggle="pill" href="#membrosQualidade">Membros</a>
                          </li>
                        </ul>
                </div>
            </div>
            <div class="col-md-9"> 
                    <div class="tab-content">
                        <div id="botao1" class="container-fluid tab-pane fade">
                            <h3>Botao clicado</h3>
                        </div>
                    </div>
            </div>
        </div>
    </div>
  </div>
        
        <!-- Modal para desconectar da sessão, irá ativar a sair.php
-->
<div class="modal" id="sair">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Deseja sair ?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <a href="sair.php" class="btn btn-danger" role="button">Desconectar</a>
      </div>

    </div>
  </div>
</div>
    </body>
</html>