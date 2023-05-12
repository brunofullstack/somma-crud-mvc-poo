<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link" aria-current="page">X Fechar</a></li>
    </ul>
</header>
<div class="container px-5 my-5">
    <form id="formCliente" data-sb-form-api-token="API_TOKEN" method="POST" action="/<?php echo ($this->route['view'] == 'alterar')?$this->route['view']."/".$this->route['id']:$this->route['view'];?>">
        <div class="form-floating mb-3">
            <input class="form-control" id="cnpj" name="cnpj" type="text" placeholder="CNPJ" value="<?php echo isset($cliente)?$cliente['cnpj']:""; ?>" data-sb-validations="required" />
            <label for="cnpj">CNPJ</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="nomeFantasia" name="nomeFantasia" type="text" placeholder="Nome fantasia" value="<?php echo isset($cliente)?$cliente['nome_fantasia']:""; ?>" data-sb-validations="required" />
            <label for="nomeFantasia">Nome fantasia</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="razaoSocial" name="razaoSocial" type="text" placeholder="Razão social" value="<?php echo isset($cliente)?$cliente['razao_social']:""; ?>" data-sb-validations="required" />
            <label for="razaoSocial">Razão social</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="email" name="email" type="email" placeholder="Email" value="<?php echo isset($cliente)?$cliente['email']:""; ?>" data-sb-validations="required,email" />
            <label for="email">Email</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Enviar</button>
            <!-- <button type="submit" class="btn btn-default">Enviar</button> -->
        </div>
    </form>
</div>