<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2>Formulário de Clientes</h2>
                <p class="text-muted">
                    Insira as informações pedidas abaixo, para que possamos realizar
                    seu cadastro em nosso sistema.
                </p>
            </div>
        </div>
        <form action="" method="post">
            <div class="row">
                <div class="col-7">
                    <label for="nome" required="required" class="form-label">Nome do Cliente</label>
                    <input type="text" class="form-control" id="nome" placeholder="Insira o nome do Cliente">
                </div>
                <div class="col-3">
                    <label class="form-label" for="cpf">CPF:</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="999.999.999-99">
                </div>
                <div class="col-2">
                    <label for="dataNasc" class="form-label">Data de nascimento:</label>
                    <input type="date" name="dataNasc" id="dataNasc" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="bairro" class="form-label">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" class="form-control">
                </div>
                <div class="col-2">
                    <label for="CEP" class="form-label">CEP:</label>
                    <input type="text" name="CEP" id="CEP" class="form-control" placeholder="99999-999"><br />
                </div>
                <div class="col-7">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" name="endereco" id="endereco"
                        placeholder="Insira o endereço com o número da casa.">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="cidade" class="form-label">Cidade: </label>
                    <input type="text" name="cidade" id="cidade" class="form-control">
                </div>
                <div class="col-2">
                    <label for="Uf" class="form-label">UF:</label>
                    <select class="form-select" name="uf" id="uf">
                        <option value="AC">Acre</option>
                        <option value="AM">Amazonas</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="telefone" class="form-label">Telefone Celular:
                        <input type="tel" name="telefone" id="telefone" class="form-control"></label>
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="Insira seu e-mail (nome@teste.com.br)">

                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit"  class="btn btn-success form-control">Cadastrar Informações</button>
                </div>
                <div class="col-6">
                    <button type="reset" class="btn btn-danger form-control">Cancelar Cadastro</button>
                </div>
            </div>
        </form>
    </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
</body>

</html>