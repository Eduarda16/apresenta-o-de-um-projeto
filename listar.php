<?php

include './conexao.php';//Inclui o arquivo de conexao
$nome = $_POST["nome"];//Pega o conteúdo da busca

$sql = "SELECT * FROM visitante WHERE nome LIKE '%$nome%'";//Monta o comando de busca

$result = mysqli_query($conexao, $sql);//Executa o comando de busca e guarda os dados na variável $result
echo "<table border='1'>"
        . "<tr>"
        . "<td>Nome</td>"
        . "<td>Data de Nascimento</td>"
        . "<td>Telefone</td>"
        . "<td>Curso</td>"
     
        . "</tr>";//Monta o cabeçalho da tabela de exibição

while($dados=mysqli_fetch_array($result)) {//O laço vai ocorrer ENQUANTO houver registros da busca realizada. Observe que guardamos os dados na variável $dados
    $id = $dados["id"];
    $nome = $dados["nome"];//Pega na variável dados o valor correspondente ao campo nome na tabela aluno do banco de dados
    $dataNascimento = $dados["dataNascimento"];
    $telefone = $dados["telefone"];
    $curso = $dados["curso"];//Pega na variável dados o valor correspondente ao campo telefone na tabela aluno do banco de dados
   

    
    echo "<tr>"
        . "<td>$nome</td>"
        . "<td>$dataNascimento</td>"
        . "<td>$telefone</td>"
        . "<td>$curso</td>"
        . "</tr>";//Exibe os dados capturados na busca
}
echo "</table>";

?>