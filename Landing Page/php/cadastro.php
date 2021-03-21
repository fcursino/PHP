<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include "conexao.php";//Conectando ao banco de dados

$nm = addslashes(trim($_POST["nome"]));//Adquirindo os valores inseridos
$em = addslashes(trim($_POST["email"]));
$sql = "INSERT INTO cadastrados(nome, email) VALUES('$nm','$em')"; 
$rs = mysqli_query($conn,$sql);//Cadastrando no banco de dados
if(!$rs)
echo "Não foi possivel realizar seu cadastro!";//Mensagem de erro
else
echo $nm;
mysqli_close($conn);
?>
</body>
</html>


