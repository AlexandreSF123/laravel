<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre - Portal de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">Portal de Cursos</a>

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


    <!-- TÍTULO -->
    <div class="container mt-5 text-center">
      <h1>Sobre Nossa Instituição</h1>
      <p class="lead">Conheça mais sobre nossa escola e nosso compromisso com a educação.</p>
    </div>


    <!-- SOBRE -->
    <div class="container mt-4">
      <div class="row align-items-center">

        <div class="col-md-6">
          <img src="https://picsum.photos/600/400" class="img-fluid rounded">
        </div>

        <div class="col-md-6">
          <h3>Quem Somos</h3>
          <p>
            O Portal de Cursos é uma instituição dedicada à formação de profissionais
            qualificados em diversas áreas do conhecimento. Nosso objetivo é oferecer
            ensino de qualidade, com foco no desenvolvimento técnico e profissional
            dos alunos.
          </p>

          <p>
            Oferecemos cursos em áreas como tecnologia, gestão, saúde e meio ambiente,
            preparando nossos estudantes para os desafios do mercado de trabalho.
          </p>
        </div>

      </div>
    </div>


    <!-- MISSÃO VISÃO VALORES -->
    <div class="container mt-5">

      <div class="row text-center">

        <div class="col-md-4">
          <h4>Missão</h4>
          <p>
            Oferecer educação de qualidade, formando profissionais preparados
            para atuar no mercado de trabalho e contribuir com a sociedade.
          </p>
        </div>

        <div class="col-md-4">
          <h4>Visão</h4>
          <p>
            Ser referência em educação profissional e tecnológica,
            reconhecida pela excelência no ensino.
          </p>
        </div>

        <div class="col-md-4">
          <h4>Valores</h4>
          <p>
            Ética, responsabilidade, inovação, compromisso com o aluno
            e respeito ao meio ambiente.
          </p>
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