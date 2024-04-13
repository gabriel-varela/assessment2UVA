<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="height=device-height, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/styles/index.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/image/favicon-32x32.png">
  <script src="https://kit.fontawesome.com/196c5b28f0.js" crossorigin="anonymous"></script>
  <title>TechSprint Solutions</title>
</head>

<body>
  <header>
    <div class="Navbar">
      <div class="Navbar__Link Navbar__Link-brand">
        <a class="logotype" href="../">
          <img src="../assets/image/LogoWithoutBG03.svg" alt="logo">
          TechSprint
        </a>
      </div>
      <div class="Navbar__Link Navbar__Link-toggle">
        <i class="fas fa-bars"></i>
      </div>
      <nav class="Navbar__Items">
        <div class="Navbar__Link">
          <a class="Link_Element-1" href="produtos.php">Produtos e Serviços</a>
        </div>
        <div class="Navbar__Link">
          <a class="Link_Element-2" href="novidades.php">Novidades</a>
        </div>
        <div class="Navbar__Link">
          <a class="Link_Element-3" href="sobre.html">Sobre</a>
        </div>
        <div class="Navbar__Link">
          <a class="Link_Element-4" href="contato.html">Contato</a>
        </div>
      </nav>
    </div>
  </header>

  <main class="novidades-main">
    <section>
      <div class="novidades">
        <?php
        $conexao = new mysqli('localhost', 'root', '', 'empresa');
        $consulta = $conexao->query("SELECT * FROM novidades");
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        foreach ($resultado as $novidade)
          echo ("<div class='item-novidades'>
          <img src='../assets/scripts/imagenovidades.php?id=" . $novidade['id_nov'] . "' alt=''>
           <div>
              <h1>" . $novidade['resumo'] . "</h1>
                <p>" . $novidade['descricao'] . "</p>
            </div>
        </div>");
        $conexao->close();
        ?>
      </div>
    </section>


  </main>

  <footer>
    <p>Copyright &copy; 2024 Tech Sprint Solutions Todos os direitos reservados.</p>
  </footer>

  <script src="../assets/js/script.js"></script>
</body>

</html>
