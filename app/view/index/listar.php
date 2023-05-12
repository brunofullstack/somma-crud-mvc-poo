<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <span class="fs-4">Somma-crud-mvc-poo</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/cadastrar" class="nav-link active" aria-current="page">Criar novo</a></li>
    </ul>
</header>

<table class="table">
    <tr>
        <th>id</th>
        <th>cnpj</th>
        <th>razao_social</th>
        <th>email</th>
    </tr>
    <?php var_dump($clientes); ?>
    <?php foreach ($clientes as $value): ?>
        <tr>
            <td>
                <?php echo $value['id']; ?>
            </td>
            <td>
                <?php echo $value['cnpj']; ?>
            </td>
            <td>
                <?php echo $value['razao_social']; ?>
            </td>
            <td>
                <?php echo $value['email']; ?>
            </td>
            <td>apagar</td>
        </tr>
    <?php endforeach; ?>
</table>