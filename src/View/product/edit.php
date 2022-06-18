<?php
$categories = $data['categories'];
$product = $data['product'];
extract($product);
?>
<div class="py-2">
  <div class="container">
    <h1 class="h1 text-primary text-opacity-75 my-4">Editar produto</h1>
    <form class="row g-3 needs-validation" method="POST">
      <div class="col-md-12">
        <label for="name" class="form-label">Nome do produto</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>" placeholder="Laptop" required>
        <div class="valid-feedback">
          Tudo Certo!
        </div>
      </div>
      <div class="col-md-12">
        <label for="description" class="form-label">Descrição</label>
        <textarea type="text" class="form-control" id="description" name="description" rows="8" required><?php echo $description ?></textarea>
        <div class="valid-feedback">
          Tudo Certo!
        </div>
      </div>
      <div class="col-md-3">
        <label for="value" class="form-label">Valor</label>
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend">R$</span>
          <input type="text" class="form-control" id="value" name="value" aria-describedby="inputGroupPrepend" value="<?php echo $value ?>" placeholder="15.51" required>
          <div class="invalid-feedback">
            Por favor coloque um valor.
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <label for="quantity" class="form-label">Quantidade</label>
        <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $quantity ?>" placeholder="3" required>
        <div class="invalid-feedback">
          Por favor uma quantidade.
        </div>
      </div>
      <div class="col-md-3">
        <label for="category" class="form-label" for="category">Categoria</label>
        <select class="form-select" id="category" name="category" required>
          <option selected disabled value=""> -- Selecione --</option>
          <?php
          foreach ($categories as $category) {
            var_dump($category);
            if ($category_id == $category['id']) {
              echo "<option selected value='{$category['id']}'>{$category['name']}</option>";
            }
            echo "<option value='{$category['id']}'>{$category['name']}</option>";
          }
          ?>
        </select>
        <div class="invalid-feedback">
          Selecione uma categoria.
        </div>
      </div>
      <div class="col-md-3">
        <label for="photo" class="form-label">Link da imagem</label>
        <input type="text" class="form-control" id="photo" name="photo" value="<?php echo $photo ?>" placeholder="https://site.com.br/imagem.jpg" required>
        <div class="invalid-feedback">
          Entre com um link válido.
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" name="star">
          <label class="form-check-label" for="invalidCheck">
            Destacar na página inicial
          </label>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary">Editar produto</button>
      </div>
    </form>
  </div>
</div>