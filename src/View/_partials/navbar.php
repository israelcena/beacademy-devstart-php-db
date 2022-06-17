<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2">
  <div class="container">
    <a class="navbar-brand" href="#">E-Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-4">
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == "/" ?  "active" : ""; ?>" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == "/produtos" ?  "active" : ""; ?>" href="/produtos">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == "/categorias" ?  "active" : ""; ?>" href="/categorias">Categorias</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/produtos" id="navbarDropdownProdutos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownProdutos">
            <li><a class="dropdown-item" href="/produtos/novo">Produtos</a></li>
            <li><a class="dropdown-item" href="/categorias/novo">Categorias</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>