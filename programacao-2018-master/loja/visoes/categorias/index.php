


    <body>
    <a href="../controladores/categorias.php?acao=inserir"
    <thead>

    <p>Inserir Categoria</p>

<table class="ui table">

    <tr>
      <th>Id</th>
      <th>Nome Categoria</th>
    </tr>
  </thead>

  <tbody>
  <?php foreach ($categorias as $categoria):?>
    <tr>
      <td><?= $categoria->getId() ?></td>
                    <td>
                        <a href="?acao=show&id=<?= $categoria->getId()?>"><?= $categoria->getNome() ?></a>
                    </td>
    </tr>
                <?php endforeach;?>
  </tbody>
</table>

</body>
 
      




 












</html>