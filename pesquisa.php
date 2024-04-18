<<<<<<< HEAD
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <title>...:::Pesquisa de Pessoas:::...</title>
  </head>
  <body>
    <?php
      $pesquisa = $_POST['busca'] ?? ''; 
      include "conexao.php"; 
      $sql = "select * from pessoas where nome LIKE '%$pesquisa%'"; 
      $dados = mysqli_query($conn,$sql); 
    ?> 
    <div class="container">
      <div class="row">
        <div class="col">
          <p></p>
          <h1 align="center">Pesquisar</h1>
          <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus="">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
              </form>
            </div>
          </nav> 
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data de Nascimento</th>
              </tr>
            </thead>
            <tbody>
              <?php
                date_default_timezone_set('America/Sao_Paulo'); 
                date('d/m/Y'); 
                while($linha = mysqli_fetch_assoc($dados)){ 
                  $cod_pessoa = $linha['cod_pessoa']; 
                  $nome = $linha['nome']; 
                  $endereco = $linha['endereco']; 
                  $telefone = $linha['telefone']; 
                  $email = $linha['email']; 
                  $data_nascimento = $linha['data_nascimento']; 
                  echo
                  "<tr>
                    <th scope='row'>$nome</th>
                    <td>$endereco</td>
                    <td>$telefone</td>
                    <td>$email</td>
                    <td>$data_nascimento</td>
                  </tr>";
                }
              ?>
            </tbody>
          </table>
          <a href="index.php" class="btn btn-outline-primary">Voltar o Início</a>
        </div>
      </div> 
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
=======
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <title>...:::Pesquisa de Pessoas:::...</title>
  </head>
  <body>
    <?php
      $pesquisa = $_POST['busca'] ?? ''; 
      include "conexao.php"; 
      $sql = "select * from pessoas where nome LIKE '%$pesquisa%'"; 
      $dados = mysqli_query($conn,$sql); 
    ?> 
    <div class="container">
      <div class="row">
        <div class="col">
          <p></p>
          <h1 align="center">Pesquisar</h1>
          <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus="">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
              </form>
            </div>
          </nav> 
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data de Nascimento</th>
              </tr>
            </thead>
            <tbody>
              <?php
                date_default_timezone_set('America/Sao_Paulo'); 
                date('d/m/Y'); 
                while($linha = mysqli_fetch_assoc($dados)){ 
                  $cod_pessoa = $linha['cod_pessoa']; 
                  $nome = $linha['nome']; 
                  $endereco = $linha['endereco']; 
                  $telefone = $linha['telefone']; 
                  $email = $linha['email']; 
                  $data_nascimento = $linha['data_nascimento']; 
                  echo
                  "<tr>
                    <th scope='row'>$nome</th>
                    <td>$endereco</td>
                    <td>$telefone</td>
                    <td>$email</td>
                    <td>$data_nascimento</td>
                  </tr>";
                }
              ?>
            </tbody>
          </table>
          <a href="index.php" class="btn btn-outline-primary">Voltar o Início</a>
        </div>
      </div> 
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
>>>>>>> e5131a51d16b7a131b020f8544f2eb1100b734f0
</html>