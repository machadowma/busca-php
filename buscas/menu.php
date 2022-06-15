<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Início</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="busca-01_form.php">Busca-01</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="busca-02_form.php">Busca-02</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="busca-03_form.php">Busca-03</a>
        </li>
      </ul>
      <form class="d-flex" method="post" action="busca-02_result.php">
        <input type="text" class="form-control me-2" id="nome" name="nome" placeholder="Digite o nome da pessoa.">
        <button class="btn btn-primary" type="button">Buscar</button>
      </form>
    </div>
  </div>
</nav>