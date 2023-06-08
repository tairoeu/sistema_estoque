<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h2>Cadastrar um produto</h2>
        <p>Digite os dados do produto:</p>
        <form method="post">
            <div>
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="" placeholder="Digite o nome do produto">
            </div>

            <div>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="" placeholder="Digite a descrição do produto">
            </div>

            <div>
            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="" placeholder="Digite o preço do produto">
            </div>

            <div>
            <label for="quantidade">Quantidade:</label>
            <input type="text" name="quantidade" id="" placeholder="Digite a quantidade">
            </div>

        </form>
    </section>
    <a href="index.php"><button>Voltar</button></a>
</body>
</html>