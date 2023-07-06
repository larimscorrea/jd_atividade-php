<h1>Formulário de cadastro</h1>
<form action="receber.php" method="POST">
    Nome:
    <input type="text" name="nomeusuario">
    Endereco:
    <input type="text" name="endereco">
    <input type="submit" value="Enviar" /> 
</form>

<?php
if (isset($_POST['nomeusuario'])) {
    echo $_POST['nomeusuario'] . '</br>';
}

if (isset($_POST['endereco'])) {
    echo $_POST['endereco'];
}
?>