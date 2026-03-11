<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Administração</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="index.html">Portal de Cursos</a>
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

<div class="container mt-5">

<h1 class="text-center">Administração</h1>

<div class="row mt-4">

<div class="col-md-6">
<img src="https://picsum.photos/600/400?2" class="img-fluid rounded">
</div>

<div class="col-md-6">

<h3>Sobre o Curso</h3>

<p>
O curso de Administração prepara profissionais para atuar na gestão de empresas,
organização de processos e liderança de equipes.
</p>

<h4>O que você irá aprender</h4>

<ul>
<li>Gestão empresarial</li>
<li>Planejamento estratégico</li>
<li>Recursos humanos</li>
<li>Empreendedorismo</li>
</ul>

</div>
</div>
</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
© 2026 Portal de Cursos
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>