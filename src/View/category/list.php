

<h1>Listar Categorias</h1>

<table class="table table-hover table-striped">
  <thead class="table-dark">
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Descrição</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $categories = $data->fetchAll(\PDO::FETCH_ASSOC);
    foreach ($categories as $category) {
      echo "<tr>"
        . "<td>{$category['id']}</td>"
        . "<td>{$category['name']}</td>"
        . "<td>{$category['description']}</td>"
        . "</tr>";
    }
    ?>
  </tbody>
</table>