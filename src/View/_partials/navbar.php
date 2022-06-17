<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">E-Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produtos">Listar Todos Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categorias">Listar Todas Categorias</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/produtos" id="navbarDropdownProdutos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownProdutos">
            <li><a class="dropdown-item" href="/produtos/novo">Cadastrar produtos</a></li>
            <li><a class="dropdown-item" href="/produtos/editar">Editar Produtos</a></li>
            <li><a class="dropdown-item" href="/produtos/deletar">Remover Produtos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/categorias" id="navbarDropdownCategorias" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategorias">
            <li><a class="dropdown-item" href="/categorias/novo">Cadastrar categoria</a></li>
            <li><a class="dropdown-item" href="/categorias/editar">Editar categoria</a></li>
            <li><a class="dropdown-item" href="/categorias/deletar">Remover categoria</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled">Painel Administrativo</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>