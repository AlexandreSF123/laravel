<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Portal de Cursos</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">

          <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-principal') }}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-ds') }}">Desenvolvimento de Sistemas</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-adm') }}">Administração</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-adm') }}">Farmácia</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-meio') }}">Meio Ambiente</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <!-- BANNER -->
    <div class="container-fluid bg-primary text-white text-center p-5">
      <h1>Bem-vindo ao Portal de Cursos</h1>
      <p>Escolha uma área profissional e comece sua carreira hoje mesmo.</p>
    </div>


    <!-- CURSOS -->
    <div class="container mt-5">

      <h2 class="text-center mb-4">Nossos Cursos</h2>

      <div class="row">

        <!-- Desenvolvimento de Sistemas -->
        <div class="col-md-3">
          <div class="card">
            <img src="https://picsum.photos/300/200?random=1" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Desenvolvimento de Sistemas</h5>
              <p class="card-text">
                Aprenda programação, banco de dados, desenvolvimento web e criação de sistemas completos.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Administração -->
        <div class="col-md-3">
          <div class="card">
            <img src="https://picsum.photos/300/200?random=2" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Administração</h5>
              <p class="card-text">
                Desenvolva habilidades de gestão, liderança, planejamento estratégico e organização empresarial.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Farmácia -->
        <div class="col-md-3">
          <div class="card">
            <img src="https://picsum.photos/300/200?random=3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Farmácia</h5>
              <p class="card-text">
                Conheça medicamentos, manipulação farmacêutica, controle de qualidade e atendimento em farmácias.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Meio Ambiente -->
        <div class="col-md-3">
          <div class="card">
            <img src="https://picsum.photos/300/200?random=4" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Meio Ambiente</h5>
              <p class="card-text">
                Estude sustentabilidade, preservação ambiental, gestão de recursos naturais e impacto ambiental.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
      <p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>