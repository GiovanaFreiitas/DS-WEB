/* Conectar ao banco de dados*/
$conexao = mysqli_connect($host, $usuario, $senha, $banco);
/* Verificar se a conexão foi bem-sucedida*/
if (!$conexao) {
die('<span style="color:red;">Erro na conexão: <br></span>' . mysqli_connect_error());
}
echo"<br>";
echo '<strong><span style="color: darkgreen;">Conexão bem-sucedida!<br></span></strong>';

?>

    /*incluindo a minha conexão com o banco de dados*/
include_once('conexao.php');


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

/*inicio a inserção dos dados no banco*/
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', $senha)";
//mysquli_query = consulta 
if (mysqli_query($conexao, $sql)) {
echo "Novo registro inserido com sucesso!";
header('location: login.php');
} else {
echo "Erro ao inserir: " . mysqli_error($conexao);
}

?>
/*incluindo a minha conexão com o banco de dados*/
include_once('conexao.php');


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['quantidade'];
/*/inicio a inserção dos dados no banco*/
$sql = "INSERT INTO produtos (nome, quantidade, preco) VALUES ('$nome', '$quantidade',$preco)";
//mysquli_query = consulta 
if (mysqli_query($conexao, $sql)) {
echo "Novo registro inserido com sucesso!";
header('location: login.php');
} else {
echo "Erro ao inserir: " . mysqli_error($conexao);
}

?>
 <!-- Cadastro de Produtos -->
        <div class="produtos">
            <h2>Cadastro de Produtos</h2>
            <form action="produtos.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="preco">preco:</label>
                <input type="number" id="preco" name="preco" required>
                
                <label for="quantidade">quantidade:</label>
                <input type="number" id="quantidade" name="quantidade" required>
                
                <input type="submit" value="Enviar">
            </form>