<?php
$posts = [
    [
        'titulo' => 'Primeiro Post do Blog',
        'data' => '26/06/2025',
        'imagem' => 'https://via.placeholder.com/600x200',
        'conteudo' => 'Este é o conteúdo do primeiro post. Aqui você pode escrever uma introdução do seu artigo ou notícia.',
    ],
    [
        'titulo' => 'Segundo Post do Blog',
        'data' => '25/06/2025',
        'imagem' => 'https://via.placeholder.com/600x200',
        'conteudo' => 'O segundo post traz mais detalhes sobre os recursos do Bootstrap e como integrá-lo ao PHP.',
    ],
    [
        'titulo' => 'Terceiro Post do Blog',
        'data' => '24/06/2025',
        'imagem' => 'https://via.placeholder.com/600x200',
        'conteudo' => 'Explore aqui dicas sobre como usar o Grid System do Bootstrap para layouts responsivos.',
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Meu Blog com Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Meu Blog</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Alerta -->
<div class="container mt-3">
  <div class="alert alert-info text-center">Bem-vindo ao meu blog!</div>
</div>

<!-- Conteúdo principal com sidebar -->
<div class="container mt-4">
  <div class="row">
    <!-- Posts -->
    <div class="col-md-8">
      <?php foreach ($posts as $post): ?>
        <div class="card mb-4">
          <img src="<?= $post['imagem'] ?>" class="card-img-top" alt="Imagem do post">
          <div class="card-body">
            <h5 class="card-title"><?= $post['titulo'] ?></h5>
            <p class="card-text"><small class="text-muted"><?= $post['data'] ?></small></p>
            <p class="card-text"><?= $post['conteudo'] ?></p>
            <a href="#" class="btn btn-primary">Leia mais...</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Sidebar -->
    <div class="col-md-4">
      <div class="p-3 bg-light rounded">
        <h4>Sobre o Autor</h4>
        <p>Olá! Sou um estudante de ADS apaixonado por desenvolvimento web. Este blog é um espaço para compartilhar aprendizados e dicas úteis.</p>
      </div>
    </div>
  </div>
</div>

<!-- Rodapé com formulário -->
<footer class="bg-dark text-white mt-5 p-4">
  <div class="container">
    <h5>Contato</h5>
    <form>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Seu nome">
      </div>
      <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagem" rows="3" placeholder="Sua mensagem"></textarea>
      </div>
      <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
    <p class="mt-3">Email: contato@blogexemplo.com | Telefone: (99) 99999-9999</p>
  </div>
</footer>

</body>
</html>
