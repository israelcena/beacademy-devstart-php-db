<h1 class="p-2 mx-2">Cadastrar Categorias</h1>
<div class="container">
  <form class="row g-3 needs-validation p-4" method="POST">
    <div class="col-lg-12">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Computadores" required>
      <div class="valid-feedback">
        Tudo Certo!
      </div>
    </div>
    <div class="col-lg-12">
      <label for=" description" class="form-label">Descrição</label>
      <textarea type="text" class="form-control" id="description" name="description" rows="6" required></textarea>
      <div class="valid-feedback">
        Tudo Certo!
      </div>
    </div>
    <div class="col-12 text-center">
      <button class="btn btn-primary">Cadastrar</button>
    </div>
  </form>
</div>