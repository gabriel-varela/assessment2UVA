<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="height=device-height, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/styles/index.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/image/favicon-32x32.png">
  <script src="https://kit.fontawesome.com/6302ea1cad.js" crossorigin="anonymous"></script>
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
          <a class="Link_Element-3" href="sobre.php">Sobre</a>
        </div>
        <div class="Navbar__Link">
          <a class="Link_Element-4" href="contato.php">Contato</a>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <section class="contact-section">
      <div class="background">
      </div>
      <form action="/">
        <div class="input-group">
          <label for="name">Nome</label>
          <input type="text" id="name" name="name" placeholder="Insira seu nome" required>
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Insira seu email" required>
        </div>
        <div class="input-group">
          <label for="tel">Telefone</label>
          <input type="tel" id="tel" name="tel" placeholder="Insira seu telefone" required>
        </div>
        <div class="input-group">
          <label for="message">Mensagem</label>
          <textarea rows="3" cols="33" name="message" id="message" cols="30" rows="10" placeholder="Insira sua mensagem"
            required></textarea>
        </div>
        <input type="submit" value="Enviar">
        <div class="social-medias">
          <a href=""><i class="fa-brands fa-github"></i></a>
          <a href=""><i class="fa-brands fa-linkedin"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-x-twitter"></i></a>
          <a href=""><i class="fa-brands fa-youtube"></i></a>
          <a href=""><i class="fa-solid fa-envelope"></i></a>
        </div>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 TechSprint</p>
  </footer>

  <script src="../assets/js/script.js"></script>
</body>

</html>