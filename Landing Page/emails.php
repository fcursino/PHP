<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel = "icon" href ="./images/television.png" type = "image/x-icon">
    <title>E-mails Registrados</title>
</head>
<body>
    <div class="container">
    <?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
   //Conectando ao banco de dados
     include "./php/conexao.php";
   
   //Consultando banco de dados
   $qryLista = mysqli_query($conn, "SELECT * FROM cadastrados");    
   while($resultado = mysqli_fetch_assoc($qryLista)){
       $vetor[] = array_map('utf8_encode', $resultado); 
   }   
   //Mostrando e-mails 
   if($vetor != null){
    echo '<center>';
    echo '<h1>E-mails Registrados</h1>';
    foreach($vetor as $cadastrado) {
        echo '<p>';
        echo $cadastrado['email'] ;
        echo '</p>';
    }
    echo '</center>';
    
   }
   //Mensagem negativa para a consulta
   else{
       echo('<center>');
       echo('<h1>Não há e-mails registrados!</h1>');
       echo('</center>');
   }
   

   
?>
<!--BOTÃO DE VOLTAR-->
<a href="index.html"><input type="submit" value="Voltar" id="voltar" style="background-color: yellow; color: black"></a>
</div>
<!--BOTÃO DE VOLTAR-->
<div class="alert" >

</div>
</body>
</html>