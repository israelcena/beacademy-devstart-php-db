<div class="py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach ($data as $product) {
        extract($product);
        echo "
      <div class='col'>
        <div class='card shadow-sm'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='225' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'>
            <title>Placeholder</title>
            <rect width='100%' height='100%' fill='#55595c'></rect>
          </svg>
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