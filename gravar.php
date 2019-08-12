<?php
include './conexao.php';//incluir o arquivo conexao.php

$nome = $_POST["txtNome"];//Pega o valor da caixa de texto
$dataNascimento = $_POST["txtdataNascimento"];//Pega o valor da caixa de texto
$telefone = $_POST["txtTelefone"];
$curso = $_POST["txtCurso"];


$sql = "insert into visitante(id,nome,dataNascimento,curso,telefone) values(null,'$nome','$dataNascimento','$curso','$telefone')";

mysqli_query($conexao, $sql);//Executa o comando especificando os dados da conexão e o comando sql

if(mysqli_affected_rows($conexao) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//Site//cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
    
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//Site//cadastro.php>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";
                            //echo "ERRO".mysqli_error();
			}

?>

