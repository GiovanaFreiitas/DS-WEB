 <h1>Produtos Cadastrados</h1>

    <table class="produtos">
        <tr>
            <th>Nome:</th>
            <th>Preço:</th>
            <th>Estoque:</th>
        </tr>
    
    <?php
        foreach($dados as $dado){
            extract($dado);
            echo "<tr>";
                echo "<td>$nomeProduto </td>";
                echo "<td>$precoProduto </td>";
                echo "<td>estoqueProduto </td>";
            echo '</tr>';
        }
    ?>
    </table>
    <br>
    <a href="cadastro"><button>Cadastrar Produto</button></a>
    
