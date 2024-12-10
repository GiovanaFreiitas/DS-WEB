<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            background-color: #f3e5f5; /* Roxo claro para o fundo */
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh; /* Garantir que o body ocupe toda a altura da tela */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center; /* Centralizar texto */
        }

        .clientes {
            background-color: #e1bee7; /* Roxo mais forte para o formulário */
            padding: 20px;
            border: 1px solid #ba68c8; /* Contorno em roxo mais escuro */
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #6a1b9a; /* Tom de roxo escuro */
        }

        input[type="text"],
        input[type="password"] {
            width: 280px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ba68c8; /* Contorno em roxo escuro */
            border-radius: 5px;
            font-size: 14px;
            color: #6a1b9a; /* Texto em roxo escuro */
        }

        input[type="submit"] {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #8e24aa; /* Botão em roxo vibrante */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #7b1fa2; /* Tom mais escuro para o hover */
        }

        h2 {
            color: #7b1fa2; /* Título em roxo escuro vibrante */
        }
    </style>
</head>

<body>
    <div class="clientes">
        <h2>Cadastro</h2>
        <form action="root.php" method="POST">
            <label for="nome-cliente">Nome:</label>
            <input type="text" id="nome-cliente" name="nome" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

  
