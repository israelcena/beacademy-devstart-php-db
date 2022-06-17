<div class="container">
  <h1>Listar Categorias</h1>

  <table class="table table-hover table-striped">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $categories = $data->fetchAll(\PDO::FETCH_ASSOC);
      foreach ($categories as $category) {
        extract($category);
        echo "<tr>"
          . "<td>{$id}</td>"
          . "<td>{$name}</td>"
          . "<td>{$description}</td>"
          . "<td>
        <a class='btn btn-sm btn-danger' href='/categorias/deletar?id=$id'>Excluir<a>
        <a class='btn btn-sm btn-info' href='/categorias/editar?id=$id'>Editar<a>
        </td>"
          . "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>