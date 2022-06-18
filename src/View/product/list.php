<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-3 mb-4">
        <div class="btn-group" role="group" aria-label="Btn Actions">
          <a href="/produtos/novo" type="button" class="btn btn-outline-primary">Cadastrar</a>
          <a href="/produtos/relatorio" type="button" class="btn btn-outline-primary">Relatorio</a>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach ($data as $product) {
        extract($product);
        echo "
      <div class='col'>
        <div class='card shadow-sm'>
          <img src='{$photo}' class='rounded' alt='Foto de {$name}'>
          <div class='card-body'>
          <h5 class='card-title text-capitalize'>{$name}</h5>
            <p class='card-text'>{$description}</p>
            <div class='d-flex justify-content-between align-items-center'>
              <div class='btn-group'>
                <a class='btn btn-sm btn-outline-secondary' href='/produtos/editar?id={$id}'>Editar</a>
                <a class='btn btn-sm btn-outline-secondary' href='/produtos/deletar?id={$id}'>Deletar</a>
              </div>
              <small class='text-muted'>{$quantity} Disponíveis</small>
            </div>
          </div>
        </div>
      </div>
        ";
      }; ?>
    </div>
  </div>
</div>