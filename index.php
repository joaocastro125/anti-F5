<?php
if(isset($_POST['nome'])){// se existir nome execulte caso contrario não exculte 
    $nome=$_POST['nome'];
    file_put_contents("texte.txt", $nome, FILE_APPEND);//não existir, o arquivo é criado. Do contrário, o arquivo existente é sobrescrito, a não ser que a flag FILE_APPEND seja definida.
    header('Location:index.php');// para redirecionar para o index 
}
 

?>
<form method="POST">
<input type="text" name="nome" placeholder="informe um valor">
<input type="submit" value='enviar'>
</form>