<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovoTec Informática - Cadastro de Produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <div class="container">
        <h3 class="titulo">Cadastro de Produtos</h3>
    </div>
    <form>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <label for="codProd">Código:</label>
                <input type="text" id="codProd" name="codProd" class="form-control">
            </div>
            <div class="col-md-8">
                <label for="nomeProd">Nome:</label>
                <input type="text" id="nomeProd" name="nomeProd" placeholder="Insira o nome do produto aqui." class="form-control">
            </div>
            <div class="col-md-2">
                <label for="valProd">Validade:</label>
                <input type="date" id="valProd" name="valProd" class="form-control">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <label for="categProd">Categoria</label>
        <select name="categProd" id="categProd" class="form-control">
        <option name="1">Açougue</option>
        <option name="2">Higiene e Beleza</option>
        <option name="3">Grãos</option>
        <option name="4">Mercearia</option>
        <option name="5">Hortifruti</option>
        </select>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <label for="prVendaProd">Preço de Venda</label>
                <input type="text" name="prVendaProd" id="prVendaProd" placeholder="Não é necessário informar a moeda" class="form-control">
            </div>
            <div class="col-md-4">
            <label for="prCompraProd">Preço de Compra</label>
                <input type="text" name="prCompraProd" id="prCompraProd" placeholder="Não é necessário informar a moeda" class="form-control">
            </div>
            <div class="col-md-4">
            <label for="fornecProd">Fornecedor</label>
        <select name="fornecProd" id="fornecProd" class="form-control">
        <option name="1">Nestle</option>
        <option name="2">Laticinios Carolina</option>
        <option name="3">Marilan</option>
        <option name="4">Colgate S/A</option>
        <option name="5">JBS Alimentos</option>
        </select>
            </div>
        </div>
    </div>
    <div class="container">
    <label for="observProd">Observações</label>    
    <textarea class="form-control" row="5" name="observProd" id="observProd"></textarea></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn btn-success form-control">Salvar dados</button>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="button" class="btn btn-danger form-control" >Cancelar envio</button>
            </div>
        </div>
    </div>
    </form>

    <footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center"><a href="index.php">Página Principal</a> | <a href="clientes.php">Clientes</a> | <a href="produtos.php">Produtos</a> | <a href="fale-conosco.php">Fale conosco</a></p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>    
</body>
</html>